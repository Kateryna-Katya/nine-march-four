<?php

$fullDomain = strtolower($_SERVER['HTTP_HOST'] ?? '');
$fullDomain = explode(':', $fullDomain)[0];

$parts = explode('.', $fullDomain);
$domainSlug = count($parts) >= 2
        ? $parts[count($parts) - 2]
        : $fullDomain;

$domainTitle = ucwords(str_replace('-', ' ', $domainSlug));

?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $domainTitle ?> — Инновационное IT-образование
    </title>

<link rel="icon" type="image/svg+xml"
    href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'%3E%3Crect width='32' height='32' rx='6' fill='%230D0D0D'/%3E%3Cpath d='M11 11C11 9.34315 12.3431 8 14 8H18C19.6569 8 21 9.34315 21 11V14.5L16 18L11 14.5V11Z' fill='%233B82F6'/%3E%3Ccircle cx='16' cy='22' r='3' fill='%23FFFFFF'/%3E%3Cpath d='M16 18V22' stroke='%23FFFFFF' stroke-width='2'/%3E%3C/svg%3E">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&family=Space+Grotesk:wght@500;700&display=swap"
        rel="stylesheet">

    <script src="https://unpkg.com/lucide@latest"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header class="header" id="header">
        <div class="container header__container">
            <a href="./#hero" class="logo">
                <span class="logo__icon"></span>
                <span class="logo__text">
                    <?= $domainTitle ?>
                </span>
            </a>

            <nav class="nav" id="nav">
                <ul class="nav__list">
                    <li><a href="./#hero" class="nav__link">Главная</a></li>
                    <li><a href="./#courses" class="nav__link">Курсы</a></li>
                    <li><a href="./#features" class="nav__link">Преимущества</a></li>
                    <li><a href="./#reviews" class="nav__link">Отзывы</a></li>
                    <li><a href="./#faq" class="nav__link">FAQ</a></li>
                </ul>
            </nav>

            <div class="header__actions">
                <a href="./#contact" class="btn btn--primary">Связаться</a>
                <button class="burger" id="burger" aria-label="Menu">
                    <span></span>
                </button>
            </div>
        </div>
    </header>
<main>
    <section class="pages">
        <div class="container">
            <h1 data-aos="fade-right">Условия использования</h1>

            <p data-aos="fade-up">
                Добро пожаловать на образовательную платформу <strong><?= $domainTitle ?></strong>! Настоящие Условия использования
                (далее — «Условия») представляют собой юридически обязывающий договор между вами (далее — «Пользователь», «Студент») 
                и <strong><?= $domainTitle ?></strong> (далее — «Школа», «мы»). 
                Наша передовая цифровая инфраструктура создана для вашего профессионального роста. Используя наш сайт и любые связанные с ним 
                услуги, вы подтверждаете свое полное согласие с данными Условиями. 
            </p>

            <h2 data-aos="fade-up">1. Предмет Соглашения</h2>
            <p data-aos="fade-up">
                Школа предоставляет Пользователю доступ к использованию сайта 
                <strong><?= $fullDomain ?></strong> и его образовательного функционала, включая доступ к 
                инновационным технологиям обучения, учебным материалам, практикам, применимым уже сегодня, 
                и экспертной поддержке (далее — «Услуги»). Настоящее Соглашение регулирует пошаговый путь 
                взаимодействия Пользователя с платформой.
            </p>

            <h2 data-aos="fade-up">2. Обязанности и права Пользователя</h2>
            <p data-aos="fade-up">
                Вы обязуетесь использовать сайт исключительно в целях личного обучения и профессионального развития. 
                При использовании платформы <strong><?= $domainTitle ?></strong> <strong>запрещается</strong>:
            </p>
            <ul class="pages__list" data-aos="fade-up">
                <li>
                    Передавать данные своей учетной записи третьим лицам или использовать доступ к курсам коллективно.
                </li>
                <li>
                    Предпринимать действия, которые могут нарушить безопасность или привести к перегрузке 
                    цифровой инфраструктуры <strong><?= $domainTitle ?></strong>.
                </li>
                <li>
                    Копировать или распространять учебный программный код, видеоматериалы и методики 
                    без предварительного письменного разрешения.
                </li>
                <li>
                    Использовать AI-инструменты платформы способами, нарушающими этические нормы или закон.
                </li>
            </ul>

            <h2 data-aos="fade-up">3. Интеллектуальная собственность</h2>
            <p data-aos="fade-up">
                Весь контент, размещенный на сайте <strong><?= $fullDomain ?></strong>, включая тексты, графику, 
                алгоритмы и программный код, является объектом интеллектуальной собственности Школы. 
                Вам предоставляется ограниченная лицензия на использование материалов, чтобы вы могли 
                построить карьеру, которая работает на вас. Любое несанкционированное тиражирование Контента 
                строго запрещено и преследуется по закону.
            </p>

            <h2 data-aos="fade-up">4. Ограничение ответственности</h2>
            <p data-aos="fade-up">
                Услуги предоставляются по принципу «как есть» (as is). Мы предоставляем передовые инструменты 
                для реальных задач, однако Школа не несет ответственности за индивидуальные финансовые результаты 
                Пользователя, так как они зависят от личных усилий и динамики рынка труда в <strong>Англии</strong> и ЕС. 
                Мы не гарантируем, что пошаговый путь обучения приведет к автоматическому получению пассивного дохода 
                без активного участия Студента.
            </p>

            <h2 data-aos="fade-up">5. Изменения в Условиях</h2>
            <p data-aos="fade-up">
                Мы оставляем за собой право обновлять настоящие Условия для интеграции новых технологических решений. 
                Все изменения вступают в силу с момента их публикации на <strong><?= $fullDomain ?></strong>. 
                Платформа уже доступна в Европе, и продолжение использования сайта означает ваше согласие с новой редакцией.
            </p>

            <h2 data-aos="fade-up">6. Разрешение споров</h2>
            <p data-aos="fade-up">
                Все разногласия стороны стремятся разрешить путем переговоров через службу экспертной поддержки. 
                В случае невозможности мирного решения, споры подлежат рассмотрению в соответствии 
                с действующим законодательством по месту регистрации Оператора в <strong>Великобритании (Лондон)</strong>.
            </p>

            <h2 data-aos="fade-up">7. Контактная информация</h2>
            <p data-aos="fade-up">
                По всем вопросам, связанным с Условиями использования или доступом к платформе, 
                пожалуйста, свяжитесь с нами:
                <br><br>
                <strong>Email:</strong> <a href="mailto:support@<?= $fullDomain ?>" class="text-accent-blue">support@<?= $fullDomain ?></a><br>
                <strong>Телефон:</strong> <a href="tel:+442022673225" class="text-accent-blue">+44 20 2267 3225</a><br>
                <strong>Адрес:</strong> 124 City Road, London, EC1V 2NX, United Kingdom
            </p>

            <div class="pages-footer" style="margin-top: 50px; padding-top: 30px; border-top: 1px solid rgba(255,255,255,0.1);" data-aos="fade-in">
                <p style="font-size: 0.9rem; opacity: 0.7;">Последнее обновление: Март 2026</p>
            </div>
        </div>
    </section>
</main>

    <footer class="footer">
        <div class="container">
            <div class="footer__grid">
                <div class="footer__col">
                    <a href="./#hero" class="logo logo--footer">
                        <span class="logo__icon"></span>
                        <span class="logo__text">
                            <?= $domainTitle ?>
                        </span>
                    </a>
                    <p class="footer__description">
                        Передовая цифровая инфраструктура для вашего старта в карьере. Постройте будущее, которое
                        работает на вас.
                    </p>
                </div>

                <div class="footer__col">
                    <h4 class="footer__title">Навигация</h4>
                    <ul class="footer__links">
                        <li><a href="./#hero">Главная</a></li>
                        <li><a href="./#courses">Курсы</a></li>
                        <li><a href="./#features">Преимущества</a></li>
                        <li><a href="./#reviews">Отзывы</a></li>
                    </ul>
                </div>

                <div class="footer__col">
                    <h4 class="footer__title">Документы</h4>
                    <ul class="footer__links">
                        <li><a href="./privacy.php">Privacy Policy</a></li>
                        <li><a href="./cookies.php">Cookies Policy</a></li>
                        <li><a href="./terms.php">Terms of Service</a></li>
                        <li><a href="./return.php">Return Policy</a></li>
                        <li><a href="./disclaimer.php">Disclaimer</a></li>
                        <li><a href="./contact.php">Contact Us</a></li>
                        <li><a href="./personal-data-policy.php">Data Policy</a></li>
                    </ul>
                </div>

                <div class="footer__col">
                    <h4 class="footer__title">Контакты</h4>
                    <ul class="footer__info">
                        <li>
                            <i data-lucide="phone" class="icon-sm"></i>
                            <a href="tel:+442022673225">+44 20 2267 3225</a>
                        </li>
                        <li>
                            <i data-lucide="mail" class="icon-sm"></i>
                            <a href="mailto:hello@<?= $fullDomain ?>">hello@
                                <?= $fullDomain ?>
                            </a>
                        </li>
                        <li>
                            <i data-lucide="map-pin" class="icon-sm"></i>
                            <span>124 City Road, London, EC1V 2NX, United Kingdom</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="footer__bottom">
                <p>&copy;
                    2026
                    <?= $domainTitle ?>. Платформа уже доступна в Европе.
                </p>
            </div>
        </div>
    </footer>
<div id="cookie-popup" class="cookie">
    <div class="cookie__content">
        <p>Этот сайт использует cookies для улучшения работы. Подробнее — в нашей <a href="./cookies.php">Cookie
                политике</a>.</p>
        <button id="cookie-accept" class="btn btn--primary btn--sm">Принять</button>
    </div>
</div>

<div id="mobile-menu" class="mobile-menu">
    <div class="mobile-menu__content">
        <nav class="mobile-nav">
            <ul class="mobile-nav__list">
                <li><a href="./#hero">Главная</a></li>
                <li><a href="./#courses">Курсы</a></li>
                <li><a href="./#features">Преимущества</a></li>
                <li><a href="./#reviews">Отзывы</a></li>
                <li><a href="./#faq">FAQ</a></li>
            </ul>
        </nav>
        <a href="./#contact" class="btn btn--primary btn--full mobile-menu__cta">Запросить доступ</a>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="script.js"></script>
</body>

</html>