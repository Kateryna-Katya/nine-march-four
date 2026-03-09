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
            <h1 data-aos="fade-right">Политика обработки персональных данных</h1>

            <h2 data-aos="fade-up">1. Общие положения</h2>
            <p data-aos="fade-up">
                Настоящая политика обработки персональных данных (далее —
                «Политика») определяет порядок и условия обработки данных, предпринимаемые образовательной платформой 
                <strong><?= $domainTitle ?></strong> (далее — «Оператор»), и устанавливает меры по обеспечению безопасности этой информации в соответствии с требованиями UK GDPR.
            </p>
            <p data-aos="fade-up">
                1.1. Важнейшей целью Оператора является соблюдение прав и свобод человека при обработке его данных, в том числе защиты прав на неприкосновенность частной жизни в рамках обучения в нашей IT-школе.
            </p>
            <p data-aos="fade-up">
                1.2. Настоящая Политика применяется ко всей информации, которую Оператор может получить о посетителях (далее — «Пользователи») веб-сайта <strong><?= $fullDomain ?></strong>.
            </p>

            <h2 data-aos="fade-up">2. Основные понятия</h2>
            <ul class="pages__list" data-aos="fade-up">
                <li>
                    <strong>Веб-сайт</strong> — совокупность графических материалов и программного кода, обеспечивающих доступность платформы 
                    <strong><?= $domainTitle ?></strong> по адресу <strong><?= $fullDomain ?></strong>.
                </li>
                <li><strong>Пользователь</strong> — любой посетитель, заинтересованный в инновационных технологиях обучения.</li>
                <li>
                    <strong>Персональные данные</strong> — информация, относящаяся к определенному Пользователю (имя, контакты, история обучения).
                </li>
                <li>
                    <strong>Безопасность данных</strong> — защищенность информации от неправомерного доступа, реализованная через передовую цифровую инфраструктуру Оператора.
                </li>
            </ul>

            <h2 data-aos="fade-up">3. Данные, которые мы обрабатываем</h2>
            <p data-aos="fade-up">Оператор может обрабатывать следующие категории данных:</p>
            <ul class="pages__list" data-aos="fade-up">
                <li>
                    <strong>Данные, предоставляемые Пользователем:</strong>
                    <ul>
                        <li>Имя и фамилия;</li>
                        <li>Адрес электронной почты (для доступа к материалам);</li>
                        <li>Номера телефонов (валидация по стандартам <strong>Англии</strong>).</li>
                    </ul>
                </li>
                <li>
                    <strong>Автоматические данные:</strong>
                    <ul>
                        <li>
                            Сбор обезличенных данных о посетителях (в т.ч. файлов «cookie») через Google Аналитику для улучшения структуры нашего блога и курсов.
                        </li>
                    </ul>
                </li>
            </ul>

            <h2 data-aos="fade-up">4. Цели обработки</h2>
            <ul class="pages__list" data-aos="fade-up">
                <li>Идентификация Пользователя для предоставления доступа к курсам и программам роста.</li>
                <li>Установление обратной связи и экспертная поддержка на всех этапах обучения.</li>
                <li>Заключение договоров на образовательные услуги и программы пассивного дохода в Великобритании.</li>
                <li>Информирование о решениях, которые меняют правила игры в IT-индустрии.</li>
            </ul>

            <h2 data-aos="fade-up">5. Правовые основания</h2>
            <p data-aos="fade-up">
                Оператор обрабатывает данные Пользователя только:
            </p>
            <ul class="pages__list" data-aos="fade-up">
                <li>При наличии добровольного согласия, выраженного через заполнение форм на сайте <strong><?= $domainTitle ?></strong>.</li>
                <li>Для обеспечения качественного пошагового пути обучения, понятного каждому Пользователю.</li>
            </ul>

            <h2 data-aos="fade-up">6. Безопасность и сроки хранения</h2>
            <ul class="pages__list" data-aos="fade-up">
                <li>
                    Оператор применяет технические меры защиты в соответствии с нормами <strong>UK GDPR</strong>. Ваша личная информация никогда не будет передана третьим лицам без законных оснований.
                </li>
                <li>
                    Срок обработки данных неограничен, но Пользователь может в любой момент отозвать согласие, написав на 
                    <a href="mailto:support@<?= $fullDomain ?>" class="text-accent-blue">support@<?= $fullDomain ?></a>.
                </li>
            </ul>

            <h2 data-aos="fade-up">7. Заключительные положения</h2>
            <p data-aos="fade-up">
                По любым вопросам вы можете связаться с нами напрямую. Актуальная версия Политики <strong><?= $domainTitle ?></strong> всегда доступна на этой странице.
                <br><br>
                <strong>Email:</strong> support@<?= $fullDomain ?><br>
                <strong>Адрес:</strong> 124 City Road, London, EC1V 2NX, United Kingdom
            </p>
            
            <div class="pages-footer" style="margin-top: 50px; padding-top: 30px; border-top: 1px solid rgba(0,0,0,0.05);">
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