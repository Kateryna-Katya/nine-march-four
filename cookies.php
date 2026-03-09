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
            <h1 data-aos="fade-right">Политика использования файлов cookie</h1>

            <p data-aos="fade-up">
                Добро пожаловать в <strong><?= $domainTitle ?></strong>! Чтобы улучшить ваш опыт
                взаимодействия с нашей образовательной платформой, обеспечить корректную работу личного кабинета и
                анализировать активность студентов, мы используем файлы cookie и
                схожие технологии. Настоящая политика подробно объясняет, какие
                именно технологии мы применяем, для каких целей, и как вы можете ими
                управлять в рамках законодательства Великобритании и ЕС.
            </p>

            <h2 data-aos="fade-up">Что такое файлы cookie?</h2>
            <p data-aos="fade-up">
                Файл cookie — это небольшой фрагмент данных (текстовый файл),
                который веб-сайт сохраняет на вашем устройстве (компьютере, планшете
                или смартфоне), когда вы его посещаете. Это позволяет платформе 
                <strong><?= $domainTitle ?></strong> "помнить" ваши действия и предпочтения 
                (например, логин для доступа к курсам, язык интерфейса, настройки региона Англия и другие параметры) 
                в течение определенного времени, чтобы вам не приходилось вводить их 
                повторно при каждом визите.
            </p>

            <h2 data-aos="fade-up">Какие типы файлов cookie мы используем?</h2>
            <p data-aos="fade-up">
                Мы классифицируем файлы cookie, используемые на сайте <strong><?= $fullDomain ?></strong>, по
                следующим категориям:
            </p>
            <ul class="pages__list" data-aos="fade-up">
                <li>
                    <strong>Строго необходимые файлы cookie:</strong> Эти файлы
                    критически важны для функционирования IT-школы. Они позволяют вам
                    перемещаться по страницам <strong><?= $domainTitle ?></strong>, получать доступ к защищенным областям и использовать базовые возможности обучения. 
                </li>
                <li>
                    <strong>Аналитические и производительные файлы cookie:</strong>
                    Эти файлы собирают анонимную информацию о том, как студенты
                    используют наш сайт, помогая нам улучшать контент курсов и структуру платформы.
                </li>
                <li>
                    <strong>Функциональные файлы cookie:</strong> Эти файлы позволяют
                    сайту запоминать ваш выбор (например, уровень подготовки или выбранный курс) для предоставления более
                    персонализированного опыта.
                </li>
                <li>
                    <strong>Рекламные (маркетинговые) файлы cookie:</strong> Эти файлы
                    используются для доставки объявлений об инновационных технологиях и новых программах, соответствующих вашим интересам.
                </li>
            </ul>

            <h2 data-aos="fade-up">Зачем мы используем файлы cookie?</h2>
            <p data-aos="fade-up">Основные цели использования файлов cookie на сайте <strong><?= $domainTitle ?></strong>:</p>
            <ul class="pages__list" data-aos="fade-up">
                <li>Обеспечение стабильной и безопасной работы передовой цифровой инфраструктуры.</li>
                <li>Анализ пользовательского поведения для оптимизации учебного процесса.</li>
                <li>Персонализация контента для удобства пользователей в Англии и Европе.</li>
                <li>Предоставление информации о программах пассивного дохода и стратегиях роста на базе инноваций.</li>
            </ul>

            <h2 data-aos="fade-up">Ваш выбор и управление файлами cookie</h2>
            <p data-aos="fade-up">
                Вы имеете полный контроль над файлами cookie. Вы можете в любой
                момент изменить свои настройки в браузере или отозвать согласие через наш Cookie-попап. Однако, обратите
                внимание: отключение строго необходимых cookie может привести к
                некорректной работе некоторых функций нашей платформы, включая доступ к урокам.
            </p>

            <h2 data-aos="fade-up">Файлы cookie третьих сторон</h2>
            <p data-aos="fade-up">
                На некоторых страницах <strong><?= $domainTitle ?></strong> мы можем использовать сервисы
                сторонних компаний, например, Google Analytics для аналитики или Three.js для 3D-визуализаций в учебных материалах. 
                Мы рекомендуем вам ознакомиться с их политиками конфиденциальности.
            </p>

            <h2 data-aos="fade-up">Обновления настоящей политики</h2>
            <p data-aos="fade-up">
                Мы можем время от времени обновлять эту Политику, чтобы отразить изменения в технологиях обучения или
                законодательстве. Актуальная версия всегда доступна на этой странице. Платформа уже доступна в Европе, и мы соблюдаем международные стандарты защиты данных.
            </p>

            <h2 data-aos="fade-up">Контактная информация</h2>
            <p data-aos="fade-up">
                Если у вас возникли вопросы касательно политики использования файлов cookie на <strong><?= $domainTitle ?></strong>, пожалуйста, свяжитесь с нашей службой поддержки:
                <br><br>
                Email: <a href="mailto:support@<?= $fullDomain ?>" class="text-accent-blue">support@<?= $fullDomain ?></a><br>
                Телефон: <a href="tel:+442022673225" class="text-accent-blue">+44 20 2267 3225</a><br>
                Адрес: 124 City Road, London, EC1V 2NX, United Kingdom
            </p>
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