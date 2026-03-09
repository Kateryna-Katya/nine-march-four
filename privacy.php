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
            <h1 data-aos="fade-right">Политика конфиденциальности</h1>

            <p data-aos="fade-up">
                Политика конфиденциальности распространяется на персональные данные,
                предоставляемые клиентами и студентами <strong><?= $domainTitle ?></strong>, как для оказания образовательных
                услуг и IT-обучения, так и для других взаимодействий в электронном
                формате, а также при участии пользователей в экспертных программах, вебинарах и акциях, оказывая
                техническую поддержку и информационное сопровождение.
            </p>

            <p data-aos="fade-up">
                <strong><?= $domainTitle ?></strong> оставляет за собой право вносить изменения и дополнения
                в действующие положения Политики конфиденциальности. Эти изменения будут иметь приоритет над текущими
                положениями. Обратите внимание, что наши услуги могут содержать ссылки на ресурсы третьих лиц, которые имеют свои
                собственные положения. В таких случаях <strong><?= $domainTitle ?></strong> не несет ответственности за содержание и соблюдение
                конфиденциальности любой сторонней компании. Предоставляя свои данные, вы даете полное согласие
                на их обработку способами, предусмотренными настоящей Политикой в соответствии с <strong>UK GDPR</strong>.
            </p>

            <h2 data-aos="fade-up">Порядок сбора, хранения и уничтожения персональных данных</h2>
            <p data-aos="fade-up">
                <strong><?= $domainTitle ?></strong> собирает персональные данные только с согласия
                пользователя и исключительно для предоставления качественных услуг: доступа к обучающей платформе,
                участия в стратегических сессиях, получения аналитических отчетов и внедрения инноваций в ваш учебный процесс. Для
                предотвращения утечки данных мы используем передовую цифровую инфраструктуру и современные протоколы шифрования.
            </p>

            <p data-aos="fade-up">
                Максимальный срок хранения персональных данных составляет 75
                лет с даты получения информации. В остальных случаях компания хранит данные клиента до
                завершения своей образовательной деятельности или до момента официального отзыва согласия пользователем.
            </p>

            <p data-aos="fade-up">
                Уничтожение, обезличивание или блокирование данных осуществляется для исключения возможности
                их дальнейшей обработки, если цель сбора была достигнута (например, завершение курса) или по запросу клиента.
            </p>

            <p data-aos="fade-up">
                <strong><?= $domainTitle ?></strong> собирает данные в следующих категориях:
            </p>

            <h2 data-aos="fade-up">Техническая информация:</h2>
            <ul class="pages__list" data-aos="fade-up">
                <li>время доступа и IP-адрес;</li>
                <li>источники обращения на интернет-ресурс <strong><?= $fullDomain ?></strong>;</li>
                <li>интернет-страницы, посещаемые пользователем;</li>
                <li>просмотры информационных и рекламных блоков программ обучения;</li>
                <li>иная техническая информация, предоставляемая браузером;</li>
                <li>номер телефона (в случае звонка по контактам, указанным на сайте).</li>
            </ul>

            <p data-aos="fade-up">
                При регистрации или заполнении форм обратной связи мы собираем информацию, 
                необходимую для аутентификации и персонализации образовательного пути:
            </p>
            <ul class="pages__list" data-aos="fade-up">
                <li>имя пользователя;</li>
                <li>e-mail и номер телефона для оперативной связи с экспертной поддержкой;</li>
            </ul>

            <h2 data-aos="fade-up">Информация о действиях пользователя:</h2>
            <ul class="pages__list" data-aos="fade-up">
                <li>информация о соглашениях и контрактах между клиентом и <strong><?= $domainTitle ?></strong>;</li>
                <li>данные о запросах, отправленных через формы на сайте;</li>
                <li>сведения о полученных консультациях и пройденных программах роста;</li>
                <li>произведенные платежи и иная финансовая информация, предусмотренная действующим законодательством Великобритании.</li>
            </ul>

            <h2 data-aos="fade-up">Цели обработки персональных данных клиентов:</h2>
            <ul class="pages__list" data-aos="fade-up">
                <li>предоставление образовательных услуг и доступа к аналитической платформе года;</li>
                <li>учет пожеланий при разработке новых технологий обучения;</li>
                <li>информирование об акциях, скидках и новых материалах в блоге через e-mail;</li>
                <li>обеспечение качественной поддержки на всех этапах.</li>
            </ul>

            <h2 data-aos="fade-up">
                <strong><?= $domainTitle ?></strong> не предоставляет данные клиентов третьим лицам, за исключением:
            </h2>
            <ul class="pages__list" data-aos="fade-up">
                <li>получения прямого согласия пользователя на такую передачу;</li>
                <li>по требованию компетентных органов <strong>Англии</strong> в соответствии с законодательством;</li>
                <li>случаев стратегического слияния или поглощения компании.</li>
            </ul>

            <h2 data-aos="fade-up">Использование файлов cookie и точечных маркеров</h2>
            <p data-aos="fade-up">
                Файлы cookie позволяют нам анализировать трафик и сохранять ваши предпочтения (например, настройки региона Англия), 
                чтобы сделать использование <strong><?= $fullDomain ?></strong> максимально эффективным. Точечные маркеры 
                используются для статистического анализа посещений. Вы можете в любое время отключить Cookies в настройках своего браузера.
            </p>

            <h2 data-aos="fade-up">Права пользователя в отношении персональных данных</h2>
            <p data-aos="fade-up">
                Если вы хотите отредактировать свои данные или полностью прекратить их обработку в соответствии с нормами <strong>UK GDPR</strong>, 
                пожалуйста, свяжитесь с командой <strong><?= $domainTitle ?></strong> по адресу: 
                <a href="mailto:support@<?= $fullDomain ?>" class="text-accent-blue">support@<?= $fullDomain ?></a>.
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