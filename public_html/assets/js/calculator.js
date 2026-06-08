(function () {
  const weights = {
    concrete: 4050,
    gravel: 2800,
    dirt: 2200,
    topsoil: 2400,
    garden: 2400,
    mulch: 800,
    sand: 2700,
    rock: 4500
  };

  function convertToFeet(value, unit) {
    const v = Number(value);
    if (unit === 'feet') return v;
    if (unit === 'inches') return v / 12;
    if (unit === 'yards') return v * 3;
    if (unit === 'meters') return v * 3.28084;
    if (unit === 'cm') return v * 0.0328084;
    return v;
  }

  function convertDepthToFeet(value, unit) {
    return convertToFeet(value, unit);
  }

  function round(value, places) {
    return Number.parseFloat(value).toFixed(places);
  }

  function numberWithCommas(value) {
    return Number(value).toLocaleString('en-US');
  }

  function setError(form, name, message) {
    const box = form.querySelector(`[data-error-for="${name}"]`);
    if (box) box.textContent = message || '';
  }

  function validatePositive(form, input) {
    const value = Number(input.value);
    if (input.required && input.value.trim() === '') {
      setError(form, input.name, 'This field is required.');
      return false;
    }
    if (!Number.isFinite(value)) {
      setError(form, input.name, 'Enter a valid number.');
      return false;
    }
    if (value <= 0) {
      setError(form, input.name, 'Enter a number greater than 0.');
      return false;
    }
    setError(form, input.name, '');
    return true;
  }

  function materialKey(form) {
    const locked = form.dataset.material;
    const selected = form.querySelector('[name="material"]')?.value;
    return locked || selected || 'concrete';
  }

  function materialLabel(key) {
    const labels = {
      concrete: 'concrete',
      gravel: 'gravel',
      dirt: 'fill dirt',
      topsoil: 'topsoil',
      garden: 'garden soil',
      mulch: 'mulch',
      sand: 'sand',
      rock: 'rock'
    };
    return labels[key] || key;
  }

  function showResults(form, values) {
    const result = form.querySelector('.results');
    if (!result) return;
    Object.keys(values).forEach((key) => {
      result.querySelectorAll(`[data-result="${key}"]`).forEach((node) => {
        node.textContent = values[key];
      });
    });
    result.classList.add('visible');
    result.scrollIntoView({ behavior: 'smooth', block: 'start' });
  }

  function calculateStandard(form) {
    const length = form.querySelector('[name="length"]');
    const width = form.querySelector('[name="width"]');
    const depth = form.querySelector('[name="depth"]');
    const valid = [length, width, depth].every((input) => validatePositive(form, input));
    const price = form.querySelector('[name="price"]');
    if (price && price.value && Number(price.value) < 0) {
      setError(form, 'price', 'Price cannot be negative.');
      return;
    }
    setError(form, 'price', '');
    if (!valid) return;

    const lFeet = convertToFeet(length.value, form.querySelector('[name="length_unit"]').value);
    const wFeet = convertToFeet(width.value, form.querySelector('[name="width_unit"]').value);
    const dFeet = convertDepthToFeet(depth.value, form.querySelector('[name="depth_unit"]').value);
    const rawFeet = lFeet * wFeet * dFeet;
    const rawYards = rawFeet / 27;
    const yards = Number(round(rawYards, 2));
    const material = materialKey(form);
    const lbs = Math.round(yards * (weights[material] || weights.concrete));
    const cost = price && price.value ? `$${round(yards * Number(price.value), 2)}` : 'Add a price to estimate cost';
    const copyText = `${round(yards, 2)} cubic yards of ${materialLabel(material)} for ${length.value}x${width.value}x${depth.value}`;

    const values = {
      yards: round(yards, 2),
      feet: round(rawFeet, 2),
      meters: round(rawYards * 0.764555, 2),
      pounds: numberWithCommas(lbs),
      tons: round(lbs / 2000, 2),
      cost,
      overage: round(yards * 1.10, 2),
      material: materialLabel(material),
      copy: copyText,
      bags60: Math.ceil(yards * 45).toLocaleString('en-US'),
      bags80: Math.ceil(yards * 34).toLocaleString('en-US'),
      bags2cf: Math.ceil((yards * 27) / 2).toLocaleString('en-US'),
      coverage: round((lFeet * wFeet), 2),
      trucks: round(yards / 2, 2)
    };
    showResults(form, values);
  }

  function calculateSquareFeet(form) {
    const area = form.querySelector('[name="area"]');
    const depth = form.querySelector('[name="depth"]');
    const valid = [area, depth].every((input) => validatePositive(form, input));
    if (!valid) return;
    const dFeet = convertDepthToFeet(depth.value, form.querySelector('[name="depth_unit"]').value);
    const rawFeet = Number(area.value) * dFeet;
    const rawYards = rawFeet / 27;
    const yards = Number(round(rawYards, 2));
    const material = materialKey(form);
    const lbs = Math.round(yards * (weights[material] || weights.concrete));
    showResults(form, {
      yards: round(yards, 2),
      feet: round(rawFeet, 2),
      meters: round(rawYards * 0.764555, 2),
      pounds: numberWithCommas(lbs),
      tons: round(lbs / 2000, 2),
      overage: round(yards * 1.10, 2),
      material: materialLabel(material)
    });
  }

  function calculateTons(form) {
    const amount = form.querySelector('[name="amount"]');
    if (!validatePositive(form, amount)) return;
    const mode = form.querySelector('[name="convert_mode"]:checked').value;
    const material = materialKey(form);
    const poundsPerYard = weights[material] || weights.concrete;
    const tonsPerYard = poundsPerYard / 2000;
    const input = Number(amount.value);
    const yards = mode === 'tons' ? input / tonsPerYard : input;
    const tons = mode === 'yards' ? input * tonsPerYard : input;
    showResults(form, {
      converted: mode === 'tons' ? `${round(yards, 2)} cubic yards` : `${round(tons, 2)} tons`,
      confirmation: `${round(yards, 2)} cubic yards of ${materialLabel(material)} weighs about ${round(tons, 2)} tons.`
    });
  }

  document.addEventListener('click', (event) => {
    const faqButton = event.target.closest('.faq-question');
    if (faqButton) {
      const item = faqButton.closest('.faq-item');
      item.classList.toggle('open');
      faqButton.setAttribute('aria-expanded', item.classList.contains('open') ? 'true' : 'false');
    }

    const navToggle = event.target.closest('.nav-toggle');
    if (navToggle) {
      const links = document.getElementById('navLinks');
      links.classList.toggle('open');
      navToggle.setAttribute('aria-expanded', links.classList.contains('open') ? 'true' : 'false');
    }

    const preset = event.target.closest('[data-depth-preset]');
    if (preset) {
      const form = preset.closest('form');
      form.querySelector('[name="depth"]').value = preset.dataset.depthPreset;
      form.querySelector('[name="depth_unit"]').value = 'inches';
    }

    const materialToggle = event.target.closest('[data-material-preset]');
    if (materialToggle) {
      const form = materialToggle.closest('form');
      const select = form.querySelector('[name="material"]');
      if (select) select.value = materialToggle.dataset.materialPreset;
    }

    const copy = event.target.closest('[data-copy-result]');
    if (copy) {
      const form = copy.closest('form');
      const text = form.querySelector('[data-result="copy"]')?.textContent || '';
      if (text && navigator.clipboard) {
        navigator.clipboard.writeText(text).then(() => { copy.textContent = 'Copied'; });
      }
    }
  });

  document.addEventListener('submit', (event) => {
    const form = event.target.closest('[data-calculator]');
    if (!form) return;
    event.preventDefault();
    if (form.dataset.calculator === 'tons') calculateTons(form);
    else if (form.dataset.calculator === 'square-feet') calculateSquareFeet(form);
    else calculateStandard(form);
  });

  document.addEventListener('reset', (event) => {
    const form = event.target.closest('[data-calculator]');
    if (!form) return;
    setTimeout(() => {
      form.querySelectorAll('.error').forEach((node) => { node.textContent = ''; });
      form.querySelector('.results')?.classList.remove('visible');
    }, 0);
  });
})();
