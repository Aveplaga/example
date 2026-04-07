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

        <header class="header">
            <div class="wrapper">
                <div class="header__wrapper">
                    <div class="header__content">
                        <a href="#" class="header__logo">
                            <img class="header__logo--icon" src="./local/assets/images/header-logo.svg" alt="">

                            <div class="header__logo--text">
                                <div class="header__logo--suptitle">Группа компаний</div>
                                <div class="header__logo--title">Шёлковый путь</div>
                            </div>
                        </a>

                        <div class="header__calls">
                            <div class="header__calls--item">
                                <svg class="header__calls--icon" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.3333 8.33333C10.5 8.33333 9.7 8.2 8.95333 7.95333C8.72 7.88 8.46 7.93333 8.27333 8.11333L6.80667 9.58C4.92 8.62 3.37333 7.08 2.41333 5.18667L3.88 3.71333C4.06667 3.54 4.12 3.28 4.04667 3.04667C3.8 2.3 3.66667 1.5 3.66667 0.666667C3.66667 0.3 3.36667 0 3 0H0.666667C0.3 0 0 0.3 0 0.666667C0 6.92667 5.07333 12 11.3333 12C11.7 12 12 11.7 12 11.3333V9C12 8.63333 11.7 8.33333 11.3333 8.33333ZM10.6667 6H12C12 2.68667 9.31333 0 6 0V1.33333C8.58 1.33333 10.6667 3.42 10.6667 6ZM8 5.95833H9.33333C9.33333 4.11833 7.84 2.625 6 2.625V3.95833C7.10667 3.95833 8 4.85167 8 5.95833Z" fill="#FFD98C" />
                                </svg>

                                <div class="header__calls--text">
                                    <a href="#" class="header__calls--addresses">
                                        Благовещенск
                                        <svg width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M4 1L2 3L0 1L4 1Z" fill="#4D4D4D" />
                                        </svg>
                                    </a>
                                    <a href="tel:89145572414" class="header__calls--tels">8 914 557 24 14</a>
                                </div>
                            </div>

                            <div class="header__calls--item header__calls--item-hidden">
                                <svg class="header__calls--icon" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.3333 8.33333C10.5 8.33333 9.7 8.2 8.95333 7.95333C8.72 7.88 8.46 7.93333 8.27333 8.11333L6.80667 9.58C4.92 8.62 3.37333 7.08 2.41333 5.18667L3.88 3.71333C4.06667 3.54 4.12 3.28 4.04667 3.04667C3.8 2.3 3.66667 1.5 3.66667 0.666667C3.66667 0.3 3.36667 0 3 0H0.666667C0.3 0 0 0.3 0 0.666667C0 6.92667 5.07333 12 11.3333 12C11.7 12 12 11.7 12 11.3333V9C12 8.63333 11.7 8.33333 11.3333 8.33333ZM10.6667 6H12C12 2.68667 9.31333 0 6 0V1.33333C8.58 1.33333 10.6667 3.42 10.6667 6ZM8 5.95833H9.33333C9.33333 4.11833 7.84 2.625 6 2.625V3.95833C7.10667 3.95833 8 4.85167 8 5.95833Z" fill="#FFD98C" />
                                </svg>

                                <div class="header__calls--text">
                                    <a href="#" class="header__calls--addresses">Пекин</a>
                                    <a href="tel:8618810009070" class="header__calls--tels">86 18810009070</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="header__buttons">
                        <button class="header__button--contacts" type="button">Связаться с нами</button>
                        <button class="header__button--menu" type="button">
                            <div class="header__button--icons">
                                <svg class="header__button--burger" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 5H16V3H0V5ZM2 9H16V7H2V9ZM6 13H16V11H6V13Z" fill="currentColor" />
                                </svg>
                                <svg class="header__button--close" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.58577 7.99998L1.63605 3.05026L3.05026 1.63605L7.99998 6.58577L12.9497 1.63606L14.3639 3.05027L9.4142 7.99998L14.364 12.9498L12.9498 14.364L7.99998 9.4142L3.0502 14.364L1.63599 12.9498L6.58577 7.99998Z" fill="currentColor" />
                                </svg>
                            </div>
                            <span class="header__button--title">Меню</span>
                        </button>
                    </div>
                </div>
            </div>

            <nav class="header__menu">
                <div class="wrapper">
                    <ul class="header__menu--list">
                        <li class="header__menu--item">
                            <a href="#" class="header__menu--link">
                                <img class="header__menu--icon" src="./local/assets/images/Services.svg" alt="Иконка услуги">
                                <span class="header__menu--title">Услуги</span>
                            </a>
                        </li>
                        <li class="header__menu--item">
                            <a href="#" class="header__menu--link">
                                <img class="header__menu--icon" src="./local/assets/images/Expert.svg" alt="Иконка экспертность">
                                <span class="header__menu--title">Экспертность</span>
                            </a>
                        </li>
                        <li class="header__menu--item">
                            <a href="#" class="header__menu--link">
                                <img class="header__menu--icon" src="./local/assets/images/Company.svg" alt="Иконка о компании">
                                <span class="header__menu--title">О компании</span>
                            </a>
                        </li>
                        <li class="header__menu--item">
                            <a href="#" class="header__menu--link">
                                <img class="header__menu--icon" src="./local/assets/images/Feedback.svg" alt="Иконка отзывы">
                                <span class="header__menu--title">Отзывы</span>
                            </a>
                        </li>
                        <li class="header__menu--item">
                            <a href="#" class="header__menu--link">
                                <img class="header__menu--icon" src="./local/assets/images/Clients.svg" alt="Иконка клиенты">
                                <span class="header__menu--title">Клиенты</span>
                            </a>
                        </li>
                        <li class="header__menu--item">
                            <a href="#" class="header__menu--link">
                                <img class="header__menu--icon" src="./local/assets/images/Contacts.svg" alt="Иконка контакты">
                                <span class="header__menu--title">Контакты</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <main class="main <?= $pageConfig['mainClass'] ?>">