document.addEventListener('DOMContentLoaded', () => {
    
    // 1. ИНИЦИАЛИЗАЦИЯ БИБЛИОТЕК
    // ---------------------------------------------------------
    
    // Иконки Lucide
    if (typeof lucide !== 'undefined') {
        lucide.createIcons();
    }

    // Анимации AOS
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 800,
            easing: 'ease-out-cubic',
            once: true,
            offset: 50
        });
    }


    // 2. ХЕДЕР И МОБИЛЬНОЕ МЕНЮ
    // ---------------------------------------------------------
    const header = document.getElementById('header');
    const burger = document.getElementById('burger');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileLinks = document.querySelectorAll('.mobile-nav__list a');

    // Изменение хедера при скролле
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.classList.add('header--scrolled');
        } else {
            header.classList.remove('header--scrolled');
        }
    });

    // Логика бургера
    const toggleMenu = () => {
        burger.classList.toggle('active');
        mobileMenu.classList.toggle('active');
        document.body.classList.toggle('no-scroll'); // запрет скролла при открытом меню
    };

    if (burger) {
        burger.addEventListener('click', toggleMenu);
    }

    mobileLinks.forEach(link => {
        link.addEventListener('click', () => {
            if (mobileMenu.classList.contains('active')) toggleMenu();
        });
    });


    // 3. HERO: ВАНИЛЬНАЯ SVG АНИМАЦИЯ (НЕЙРОННАЯ СЕТЬ)
    // ---------------------------------------------------------
    const initHeroAnimation = () => {
        const svg = document.getElementById('hero-svg');
        if (!svg) return;

        const width = 1000;
        const height = 1000;
        const points = [];
        const numPoints = 25;

        // Создаем точки
        for (let i = 0; i < numPoints; i++) {
            const p = {
                x: Math.random() * width,
                y: Math.random() * height,
                vx: (Math.random() - 0.5) * 0.5,
                vy: (Math.random() - 0.5) * 0.5,
                element: document.createElementNS("http://www.w3.org/2000/svg", "circle")
            };
            p.element.setAttribute("r", "2");
            p.element.setAttribute("fill", "#3B82F6");
            svg.appendChild(p.element);
            points.push(p);
        }

        // Создаем линии
        const lines = [];
        for (let i = 0; i < points.length; i++) {
            for (let j = i + 1; j < points.length; j++) {
                const line = document.createElementNS("http://www.w3.org/2000/svg", "line");
                line.setAttribute("stroke", "#3B82F6");
                line.setAttribute("stroke-width", "0.5");
                line.setAttribute("opacity", "0");
                svg.appendChild(line);
                lines.push({ a: points[i], b: points[j], element: line });
            }
        }

        function animate() {
            points.forEach(p => {
                p.x += p.vx;
                p.y += p.vy;
                if (p.x < 0 || p.x > width) p.vx *= -1;
                if (p.y < 0 || p.y > height) p.vy *= -1;
                p.element.setAttribute("cx", p.x);
                p.element.setAttribute("cy", p.y);
            });

            lines.forEach(l => {
                const dx = l.a.x - l.b.x;
                const dy = l.a.y - l.b.y;
                const dist = Math.sqrt(dx * dx + dy * dy);
                if (dist < 200) {
                    l.element.setAttribute("x1", l.a.x);
                    l.element.setAttribute("y1", l.a.y);
                    l.element.setAttribute("x2", l.b.x);
                    l.element.setAttribute("y2", l.b.y);
                    l.element.setAttribute("opacity", (1 - dist / 200) * 0.4);
                } else {
                    l.element.setAttribute("opacity", "0");
                }
            });
            requestAnimationFrame(animate);
        }
        animate();
    };
    initHeroAnimation();


    // 4. FEATURES: ANIME.JS MORPHING BLOB
    // ---------------------------------------------------------
    if (typeof anime !== 'undefined' && document.querySelector('.experience-blob path')) {
        anime({
            targets: '.experience-blob path',
            d: [
                { value: 'M44.7,-76.4C58.1,-69.2,69.2,-56.3,77.3,-41.8C85.4,-27.3,90.5,-11.2,89.2,4.6C87.9,20.4,80.2,35.9,70.1,49.2C60,62.5,47.5,73.6,33.1,79.1C18.7,84.6,2.4,84.5,-14.2,81.1C-30.8,77.7,-47.7,71,-60.1,59.8C-72.5,48.6,-80.4,32.9,-83.4,16.5C-86.4,0.1,-84.5,-17,-76.8,-32.1C-69.1,-47.2,-55.6,-60.3,-41,-67C-26.4,-73.7,-10.7,-74,4.4,-81.2C19.5,-88.4,31.3,-83.6,44.7,-76.4Z' },
                { value: 'M48.2,-78.3C61.4,-71.4,70.3,-55.8,76.5,-40.3C82.7,-24.8,86.2,-9.4,85.1,5.8C84,21,78.3,35.9,69.2,48.5C60.1,61.1,47.5,71.4,33.1,77.8C18.7,84.2,2.5,86.7,-13.7,84.1C-29.9,81.5,-46.1,73.8,-58.5,62.3C-70.9,50.8,-79.5,35.5,-83.1,19C-86.7,2.5,-85.3,-15.1,-78.3,-30.9C-71.3,-46.7,-58.7,-60.7,-43.8,-67.2C-28.9,-73.7,-11.7,-72.7,2.6,-77.2C16.9,-81.7,35,-85.2,48.2,-78.3Z' }
            ],
            easing: 'easeInOutSine',
            duration: 4000,
            direction: 'alternate',
            loop: true
        });
        
        // Маленькая анимация логотипа при старте
        anime({
            targets: '.logo__icon',
            rotate: '1turn',
            duration: 2000,
            easing: 'easeInOutQuart'
        });
    }


    // 5. REVIEWS: SWIPER SLIDER
    // ---------------------------------------------------------
    if (typeof Swiper !== 'undefined' && document.querySelector('.reviews-slider')) {
        new Swiper('.reviews-slider', {
            slidesPerView: 1,
            spaceBetween: 30,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                768: { slidesPerView: 2 },
                1100: { slidesPerView: 3 }
            }
        });
    }


    // 6. FAQ: ACCORDION LOGIC
    // ---------------------------------------------------------
    const faqItems = document.querySelectorAll('.accordion-item');
    faqItems.forEach(item => {
        const header = item.querySelector('.accordion-header');
        header.addEventListener('click', () => {
            const isActive = item.classList.contains('active');
            faqItems.forEach(i => i.classList.remove('active'));
            if (!isActive) item.classList.add('active');
        });
    });


    // 7. КОНТАКТНАЯ ФОРМА (VALIDATION + AJAX MOCK)
    // ---------------------------------------------------------
    const phoneInput = document.getElementById('phone-input');
    if (phoneInput) {
        phoneInput.addEventListener('input', (e) => {
            e.target.value = e.target.value.replace(/\D/g, ''); // Только цифры
        });
    }

    // Капча
    const captchaLabel = document.getElementById('captcha-label');
    const captchaInput = document.getElementById('captcha-input');
    let num1, num2, correctAnswer;

    const generateCaptcha = () => {
        if (!captchaLabel) return;
        num1 = Math.floor(Math.random() * 10) + 1;
        num2 = Math.floor(Math.random() * 10) + 1;
        correctAnswer = num1 + num2;
        captchaLabel.textContent = `Сколько будет ${num1} + ${num2}?`;
    };
    generateCaptcha();

    // Отправка
    const mainForm = document.getElementById('main-form');
    const formStatus = document.getElementById('form-status');

    if (mainForm) {
        mainForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const userAnswer = parseInt(captchaInput.value);

            if (userAnswer !== correctAnswer) {
                formStatus.textContent = 'Ошибка в ответе капчи! Попробуйте еще раз.';
                formStatus.className = 'form__status error';
                generateCaptcha();
                captchaInput.value = '';
                return;
            }

            formStatus.textContent = 'Отправка данных...';
            formStatus.className = 'form__status success';
            formStatus.style.color = '#3B82F6';

            // Имитация задержки сети
            setTimeout(() => {
                formStatus.textContent = 'Спасибо! Ваша заявка принята. Мы свяжемся с вами в течение 15 минут.';
                formStatus.style.color = '#10B981';
                mainForm.reset();
                generateCaptcha();
            }, 1500);
        });
    }


    // 8. COOKIE POPUP (LOCAL STORAGE)
    // ---------------------------------------------------------
    const cookiePopup = document.getElementById('cookie-popup');
    const cookieAccept = document.getElementById('cookie-accept');

    if (cookiePopup && !localStorage.getItem('cookieAccepted')) {
        setTimeout(() => {
            cookiePopup.classList.add('active');
        }, 3000);
    }

    if (cookieAccept) {
        cookieAccept.addEventListener('click', () => {
            localStorage.setItem('cookieAccepted', 'true');
            cookiePopup.classList.remove('active');
        });
    }
});