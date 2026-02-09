<?php

use ZLabs\Asset\AsyncJs;
use ZLabs\Asset\DeferredJs;
use ZLabs\Asset\DeferredStyles;
use ZLabs\Asset\InlineJs;
use ZLabs\Asset\InlineStyles;
use ZLabs\Frontend\Helpers\BundlesPathBuilder;
use ZLabs\EnvSingleton;
use ZLabs\Frontend\MustacheSingleton;

/** @var array $pageConfig */
/** @var MustacheSingleton $mustache */

require_once $_SERVER['DOCUMENT_ROOT'] . '/../../vendor/autoload.php';

$mustache = new Mustache_Engine([
    'loader' => new Mustache_Loader_FilesystemLoader($_SERVER['DOCUMENT_ROOT'] . '/local/assets/mustache/')
]);

?>
<!doctype html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $pageConfig['title'] ?></title>
    <?php
    // Если фронтенд собран, покажем стили и скрипты "инлайново"
    if (EnvSingleton::getInstance()->isFrontendMode()) {
        echo (new InlineStyles(BundlesPathBuilder::buildCssAssets($pageConfig['inlineCss'])))->render();
        echo (new InlineJs(BundlesPathBuilder::buildJsAssets($pageConfig['inlineJs'])))->render();
    }
    ?>
</head>

<body class="page">
    <div class="fixed-panel">
    </div>
    <div class="page-inner">

        <!-- Header block -->
        <header class="header">
            <div class="wrapper">
                <div class="header-wrapper">

                    <div class="header-panel"">
                        <div class="header-logo__zone">
                            <button class="header-burger">
                                <svg class="header-icon__menu" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M22 17V19H2V17H22Z" fill="black" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M18 11V13H2V11H18Z" fill="black" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M22 5V7H2V5H22Z" fill="black" />
                                </svg>
                                <svg class="header-icon__close" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.4142 12L19.7782 18.364L18.364 19.7782L12 13.4143L5.63604 19.7782L4.22183 18.364L10.5858 12L4.22183 5.63608L5.63604 4.22187L12 10.5858L18.364 4.22187L19.7782 5.63608L13.4142 12Z" fill="black" />
                                </svg>
                            </button>
                            <a href="#" class="header-logo">
                                <img src="./local/assets/images/header-logo.svg" alt="Логотип">
                            </a>
                        </div>
                        <button class="header-button__phone">
                            <svg class="header-icon__phone" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.8565 8.33802C11.3746 7.63981 11.5604 6.90396 10.9744 6.25443C9.65949 4.41445 8.77515 3.27662 8.22044 2.72866C7.16589 1.68693 5.43112 1.82784 4.51779 2.72777C4.02723 3.21113 3.86116 3.37712 3.35747 3.88873C0.551816 6.69589 2.26285 12.6301 6.81139 17.1831C11.3589 21.7351 17.2926 23.4471 20.1041 20.634C20.5689 20.1859 20.9624 19.7921 21.2728 19.4641C22.1678 18.5181 22.3037 16.8598 21.2669 15.7825C20.7354 15.2302 19.6503 14.3886 17.7329 13.0171C17.1457 12.492 16.4494 12.6058 15.811 13.0246C15.504 13.226 15.2805 13.4298 14.8585 13.8522L14.0923 14.6188C13.9914 14.7198 12.621 14.0335 11.2907 12.702C9.95972 11.3697 9.2739 9.99918 9.37435 9.89874L10.1411 9.13155C10.275 8.99754 10.339 8.93266 10.4211 8.84639C10.5921 8.66666 10.7337 8.50356 10.8565 8.33802ZM15.5057 16.0331L16.2721 15.2662C16.5044 15.0338 16.6549 14.8909 16.7773 14.7923C18.457 15.9985 19.4297 16.757 19.8271 17.1698C20.0656 17.4177 20.0286 17.87 19.8212 18.0892C19.5342 18.3925 19.1613 18.7656 18.7037 19.2069C16.8857 21.0257 12.0959 19.6438 8.22513 15.7692C4.35315 11.8934 2.97188 7.10291 4.7762 5.29761C5.27786 4.7881 5.4368 4.62924 5.92035 4.15278C6.10166 3.97413 6.59552 3.93401 6.81608 4.15189C7.24314 4.57376 8.03534 5.58811 9.20071 7.21145C9.14038 7.28635 9.06503 7.37099 8.97333 7.46737C8.90603 7.5381 8.84996 7.59494 8.72738 7.71764L7.96136 8.48408C6.65821 9.78712 7.76802 12.0048 9.87697 14.1159C11.9845 16.2254 14.203 17.3365 15.5057 16.0331ZM13.655 2.06956C17.9783 2.5936 21.4064 6.02165 21.9304 10.345L19.955 10.6742C19.5736 7.19184 16.8081 4.42642 13.3258 4.045L13.655 2.06956ZM12.9963 6.02214C15.6378 6.2584 17.7416 8.36221 17.9778 11.0037L15.9961 11.334C15.912 9.53314 14.4668 8.08802 12.666 8.00392L12.9963 6.02214Z" fill="#FF022C" />
                            </svg>
                        </button>
                    </div>

                    <div class="header-content">
                        <ul class="header-content__menu">
                            <li class="header-content__item">
                                <a href="#" class="header-content__link">Логистика</a>
                            </li>
                            <li class="header-content__item header-content__item--hidden">
                                <a href="#" class="header-content__link">Услуги
                                    <svg class="header-icon__arrow" width="7" height="5" viewBox="0 0 7 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.459595 0.459595L3.45959 3.45959L6.45959 0.459595" stroke="currentColor" stroke-width="1.3" />
                                    </svg>
                                </a>
                                <ul class="header-content__menu--hidden">
                                    <li class="header-content__item">
                                        <a href="#" class="header-content__link--hidden">Поиск и выкуп товара</a>
                                    </li>
                                    <li class="header-content__item">
                                        <a href="#" class="header-content__link--hidden">Доставка товара из Китая</a>
                                    </li>
                                    <li class="header-content__item">
                                        <a href="#" class="header-content__link--hidden">Денежные переводы в Китай</a>
                                    </li>
                                    <li class="header-content__item">
                                        <a href="#" class="header-content__link--hidden">Консалтинговые услуги</a>
                                    </li>
                                    <li class="header-content__item">
                                        <a href="#" class="header-content__link--hidden">Заказ образцов товаров</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="header-content__item">
                                <a href="#" class="header-content__link">Логистика</a>
                            </li>
                            <li class="header-content__item">
                                <a href="#" class="header-content__link">Заказ</a>
                            </li>
                            <li class="header-content__item header-content__item--hidden">
                                <a href="#" class="header-content__link">Компания
                                    <svg class="header-icon__arrow" width="7" height="5" viewBox="0 0 7 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.459595 0.459595L3.45959 3.45959L6.45959 0.459595" stroke="currentColor" stroke-width="1.3" />
                                    </svg>
                                </a>
                                <ul class="header-content__menu--hidden">
                                    <li class="header-content__item">
                                        <a href="#" class="header-content__link--hidden">Поиск и выкуп товара</a>
                                    </li>
                                    <li class="header-content__item">
                                        <a href="#" class="header-content__link--hidden">Доставка товара из Китая</a>
                                    </li>
                                    <li class="header-content__item">
                                        <a href="#" class="header-content__link--hidden">Денежные переводы в Китай</a>
                                    </li>
                                    <li class="header-content__item">
                                        <a href="#" class="header-content__link--hidden">Консалтинговые услуги</a>
                                    </li>
                                    <li class="header-content__item">
                                        <a href="#" class="header-content__link--hidden">Заказ образцов товаров</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>

                        <div class="header-content__blank">
                            <svg class="header-icon__blank" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3 20C3 21.1046 3.80589 22 4.8 22H16.8728L21 17.4142V17V15V4C21 2.89543 20.1941 2 19.2 2H4.8C3.80589 2 3 2.89543 3 4V20ZM19 4V15H17C15.8954 15 15 15.8954 15 17V20H5V4H19ZM17 17V18.8715L18.6376 17H17ZM7 15V17H13V15H7ZM7 13V11H17V13H7ZM7 7V9H17V7H7Z" fill="#FF022C" />
                            </svg>
                            <a href="#" class="header-content__blank--title">Бланк заказа</a>
                        </div>

                        <div class="header-content__number">
                            <div class="header-content__number--title">Бесплатный звонок по РФ</div>
                            <a href="tel:+78005555535" aria-label="Позвонить по номеру 8 800 555 55 35" class="header-content__number--phone">8 800 555 55 35</a>
                        </div>

                        <button class="header-content__button">Оставить заявку</button>
                    </div>
                </div>
            </div>
        </header>

        <main class="main <?= $pageConfig['mainClass'] ?>">