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

    const statistics = document.querySelectorAll('.stat-number[data-target]');
    const animateStatistic = (element) => {
        const target = Number(element.dataset.target);
        const suffix = element.dataset.suffix ?? '';
        const duration = 1400;
        const startTime = performance.now();

        const update = (now) => {
            const progress = Math.min((now - startTime) / duration, 1);
            const easedProgress = 1 - Math.pow(1 - progress, 3);
            element.textContent = `${Math.round(target * easedProgress)}${suffix}`;

            if (progress < 1) requestAnimationFrame(update);
        };

        requestAnimationFrame(update);
    };

    if ('IntersectionObserver' in window) {
        const statisticsObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach((entry) => {
                if (!entry.isIntersecting) return;
                animateStatistic(entry.target);
                observer.unobserve(entry.target);
            });
        }, { threshold: 0.35 });

        statistics.forEach((statistic) => statisticsObserver.observe(statistic));
    } else {
        statistics.forEach(animateStatistic);
    }
});
