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

        <!-- Шапка сайта -->
        <header class="header">
            <div class="header__container container">
                <div class="header__container-menu">

                    <nav class="header__menu">
                        <ul class="header__list">
                            <li class="header__item">
                                <a href="#hero" class="header__link">домашняя</a>
                            </li>
                            <li class="header__item">
                                <a href="#" class="header__link">создать резюме</a>
                            </li>
                            <li class="header__item">
                                <a href="#" class="header__link">частые вопросы</a>
                            </li>
                            <li class="header__item">
                                <a href="#" class="header__link">контакты</a>
                            </li>
                        </ul>
                    </nav>

                    <button class="header__menu-button">
                        <svg class="header__icon header__icon-open" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 512 512">
                            <path fill="currentColor" fill-rule="evenodd" d="M42.666 106.667h426.667v42.666H42.666zm0 128H320v42.666H42.666zm426.667 128H42.666v42.666h426.667z" clip-rule="evenodd" />
                        </svg>
                        <svg class="header__icon header__icon-close" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M5.293 5.293a1 1 0 0 1 1.414 0L12 10.586l5.293-5.293a1 1 0 1 1 1.414 1.414L13.414 12l5.293 5.293a1 1 0 0 1-1.414 1.414L12 13.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L10.586 12L5.293 6.707a1 1 0 0 1 0-1.414" />
                        </svg>
                    </button>

                </div>
            </div>
        </header>

        <main class="main <?= $pageConfig['mainClass'] ?>">