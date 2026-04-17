(() => {
  const accordionContainers = document.querySelectorAll('[data-accordion]');

  const setExpanded = (trigger, expanded) => {
    trigger.setAttribute('aria-expanded', expanded ? 'true' : 'false');

    const panelId = trigger.getAttribute('aria-controls');
    if (!panelId) return;

    const panel = document.getElementById(panelId);
    if (!panel) return;

    panel.hidden = !expanded;

    const icon = trigger.querySelector('[data-accordion-icon]');
    if (icon) icon.classList.toggle('rotate-180', expanded);
  };

  const closeSiblings = (container, exceptTrigger) => {
    const triggers = container.querySelectorAll('[data-accordion-trigger]');
    triggers.forEach((trigger) => {
      if (trigger === exceptTrigger) return;
      setExpanded(trigger, false);
    });
  };

  accordionContainers.forEach((container) => {
    const mode = container.getAttribute('data-accordion') || 'multi';
    const triggers = container.querySelectorAll('[data-accordion-trigger]');

    triggers.forEach((trigger) => {
      setExpanded(trigger, trigger.getAttribute('aria-expanded') === 'true');

      trigger.addEventListener('click', () => {
        const isExpanded = trigger.getAttribute('aria-expanded') === 'true';
        const nextExpanded = !isExpanded;

        if (mode === 'single' && nextExpanded) closeSiblings(container, trigger);
        setExpanded(trigger, nextExpanded);
      });

      trigger.addEventListener('keydown', (event) => {
        if (event.key !== 'Enter' && event.key !== ' ') return;
        event.preventDefault();
        trigger.click();
      });
    });
  });
})();

document.querySelectorAll('.faq-trigger').forEach(trigger => {
  trigger.addEventListener('click', () => {
    const item = trigger.parentElement;
    const isActive = item.classList.contains('active');

    // Close all others
    document.querySelectorAll('.faq-item').forEach(i => i.classList.remove('active'));

    if (!isActive) {
      item.classList.add('active');
    }
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const toggle = document.querySelector(".menu-toggle");
  const nav = document.querySelector(".nav-links");
  if (toggle && nav) {
    toggle.addEventListener("click", () => {
      nav.classList.toggle("active");
    });
  }
});