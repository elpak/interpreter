/**
 * Interpreter Theme — main.js
 * Professional Business Theme for Bludit CMS
 * v1.0.1
 */
(function () {
    'use strict';

    document.addEventListener('DOMContentLoaded', function () {

        // ---------- 1. Mobile Navigation Toggle ----------
        var toggle   = document.querySelector('.nav-toggle');
        var navLinks = document.querySelector('.nav-links');

        function closeMenu() {
            if (!navLinks || !toggle) return;
            navLinks.classList.remove('open');
            toggle.setAttribute('aria-expanded', 'false');
            toggle.setAttribute('aria-label', 'Open menu');
            toggle.querySelectorAll('span').forEach(function (span) {
                span.style.transform = '';
                span.style.opacity   = '1';
            });
        }

        if (toggle && navLinks) {
            toggle.addEventListener('click', function () {
                var isOpen = navLinks.classList.toggle('open');
                toggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
                toggle.setAttribute('aria-label', isOpen ? 'Close menu' : 'Open menu');

                var spans = toggle.querySelectorAll('span');
                if (isOpen) {
                    spans[0].style.transform = 'translateY(8px) rotate(45deg)';
                    spans[1].style.opacity   = '0';
                    spans[2].style.transform = 'translateY(-8px) rotate(-45deg)';
                } else {
                    closeMenu();
                }
            });

            // Close on outside click
            document.addEventListener('click', function (e) {
                if (!toggle.contains(e.target) && !navLinks.contains(e.target)) {
                    closeMenu();
                }
            });

            // Close on Escape key
            document.addEventListener('keydown', function (e) {
                if (e.key === 'Escape' && navLinks.classList.contains('open')) {
                    closeMenu();
                    toggle.focus();
                }
            });

            // Close mobile menu when a nav link is clicked
            navLinks.querySelectorAll('a').forEach(function (link) {
                link.addEventListener('click', function () {
                    closeMenu();
                });
            });
        }

        // ---------- 2. Counter Animation (Stats) ----------
        var statEls = document.querySelectorAll('.about-stat-card strong[data-count]');

        if (statEls.length && 'IntersectionObserver' in window) {
            var counterObserver = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        var el     = entry.target;
                        var target = parseInt(el.dataset.count, 10);
                        if (isNaN(target)) return;
                        animateCounter(el, target, 1800);
                        counterObserver.unobserve(el);
                    }
                });
            }, { threshold: 0.5 });

            statEls.forEach(function (el) { counterObserver.observe(el); });
        }

        // ---------- 3. FAQ Accordion ----------
        var faqButtons = document.querySelectorAll('.faq-q');

        faqButtons.forEach(function (button) {
            button.addEventListener('click', function () {
                var currentItem = button.closest('.faq-item');
                var isOpen      = currentItem.classList.contains('active');

                // Close all other open items
                document.querySelectorAll('.faq-item.active').forEach(function (item) {
                    if (item !== currentItem) {
                        item.classList.remove('active');
                        item.querySelector('.faq-q').setAttribute('aria-expanded', 'false');
                    }
                });

                // Toggle current item
                currentItem.classList.toggle('active', !isOpen);
                button.setAttribute('aria-expanded', isOpen ? 'false' : 'true');
            });
        });

        // ---------- 4. Smooth Scroll for Anchor Links ----------
        document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
            anchor.addEventListener('click', function (e) {
                var targetSelector = anchor.getAttribute('href');
                if (!targetSelector || targetSelector === '#') return;
                var target = document.querySelector(targetSelector);
                if (target) {
                    e.preventDefault();
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            });
        });

    }); // end DOMContentLoaded

    // ---------- Helper: Counter Animation ----------
    // Uses requestAnimationFrame for smooth, performant animation.
    function animateCounter(el, target, duration) {
        var startTime = null;

        function step(timestamp) {
            if (!startTime) startTime = timestamp;
            var progress = Math.min((timestamp - startTime) / duration, 1);
            // Ease-out curve
            var eased = 1 - Math.pow(1 - progress, 3);
            el.textContent = Math.round(eased * target).toLocaleString();
            if (progress < 1) {
                requestAnimationFrame(step);
            } else {
                el.textContent = target.toLocaleString();
            }
        }

        requestAnimationFrame(step);
    }

})();
