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

            <div class="inner">
                <div class="header-wrapper">

                    <div class="header-menu">
                        <a href="#" class="logo">
                            <img src="./local/assets/images/Logo.svg" alt="Амурстрой">
                        </a>

                        <nav class="header-nav">
                            <ul class="header-list">
                                <li class="header-item">
                                    <a href="#" class="header-link">Новостройки</a>
                                </li>
                                <li class="header-item">
                                    <a href="#" class="header-link">Коммерческая недвижимость</a>
                                </li>
                                <li class="header-item">
                                    <a href="#" class="header-link">Аренда</a>
                                </li>
                                <li class="header-item">
                                    <a href="#" class="header-link">Ипотека</a>
                                </li>
                                <li class="header-item">
                                    <a href="#" class="header-link">
                                        Услуги
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.83331 8.33334L7.64296 10.0686C8.75407 11.134 9.30962 11.6667 9.99998 11.6667C10.6903 11.6667 11.2459 11.134 12.357 10.0686L14.1666 8.33334" stroke="#243048" stroke-width="1.8" stroke-linecap="round" />
                                        </svg>
                                    </a>
                                </li>
                                <li class="header-item">
                                    <a href="#" class="header-link">
                                        О Компании
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.83331 8.33334L7.64296 10.0686C8.75407 11.134 9.30962 11.6667 9.99998 11.6667C10.6903 11.6667 11.2459 11.134 12.357 10.0686L14.1666 8.33334" stroke="#243048" stroke-width="1.8" stroke-linecap="round" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </nav>

                    </div>

                    <div class="header-info">

                        <div class="header-data">
                            <a href="tel:+84162200316" class="header-number">8 4162 200-316</a>
                            <p class="header-sales">Отдел продаж, <time datetime="09:30-18:00">Пн—Пт: 9:30—18:00</time></p>
                        </div>

                        <div class="header-icons">
                            <a href="#" class="header-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20 20L16 16" stroke="#243048" stroke-width="1.8" stroke-linecap="round" />
                                    <rect x="3" y="4" width="14" height="14" rx="5" stroke="#243048" stroke-width="1.8" />
                                </svg>
                            </a>

                            <button class="header-burger">
                                <svg class="icon-burger" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3 12H21M3 6H21M3 18H21" stroke="#243048" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <svg class="icon-close" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24" fill="#243048">
                                    <path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z" />
                                </svg>
                            </button>
                        </div>


                    </div>
                </div>
            </div>
        </header>
        <main class="main <?= $pageConfig['mainClass'] ?>">