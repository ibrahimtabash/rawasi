document.addEventListener('DOMContentLoaded', () => {
    const toggle = document.querySelector('#menuToggle');
    const nav = document.querySelector('#mainNav');
    toggle?.addEventListener('click', () => {
        const open = nav.classList.toggle('open');
        document.body.classList.toggle('menu-open', open);
        toggle.setAttribute('aria-expanded', String(open));
    });
    nav?.querySelectorAll('a').forEach((link) => link.addEventListener('click', () => {
        nav.classList.remove('open');
        document.body.classList.remove('menu-open');
        toggle?.setAttribute('aria-expanded', 'false');
    }));

    const area = document.querySelector('#areaInput');
    const depth = document.querySelector('#depthInput');
    const result = document.querySelector('#bagResult');
    const calculate = () => {
        if (!area || !depth || !result) return;
        result.textContent = Math.max(1, Math.ceil((Number(area.value) * Number(depth.value)) / 2.4));
    };
    area?.addEventListener('input', calculate);
    depth?.addEventListener('input', calculate);
    calculate();
});
