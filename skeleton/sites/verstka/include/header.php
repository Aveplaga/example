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
                <div class="header-wrapper">
                    <a href="#" class="header-logo">Empearl</a>

                    <nav class="header-menu">
                        <ul class="header-list">
                            <li class="header-item">
                                <a href="#catalog-products" class="header-link">Каталог продукции</a>
                            </li>
                            <li class="header-item">
                                <a href="#order-form" class="header-link">Оформление заказа</a>
                            </li>
                        </ul>
                    </nav>

                    <button class="header-menu__button">
                        <svg class="header-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#292929">
                            <path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z" />
                        </svg>
                        <svg class="header-close__icon" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#292929">
                            <path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z" />
                        </svg>
                    </button>
                    
                </div>
            </div>
        </header>

        <main class="main <?= $pageConfig['mainClass'] ?>">