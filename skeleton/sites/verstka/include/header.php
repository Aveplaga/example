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
            <div class="header__container container">
                <main class="header__main">
                    <div class="header__menu">
                        <button class="header__button">
                            <svg class="header__icon header__icon-open" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 512 512">
                                <path fill="currentColor" fill-rule="evenodd" d="M42.666 106.667h426.667v42.666H42.666zm0 128H320v42.666H42.666zm426.667 128H42.666v42.666h426.667z" clip-rule="evenodd" />
                            </svg>
                            <svg class="header__icon header__icon-close" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 1024 1024">
                                <path fill="currentColor" d="M764.3 214.6L512 466.9L259.7 214.6a32 32 0 0 0-45.1 45.1L466.8 512L214.5 764.2a32 32 0 1 0 45.1 45.2L512 557.2l252.3 252.3a32 32 0 0 0 45.1-45.1L557.1 512l252.3-252.4a32 32 0 1 0-45.1-45.2z" />
                            </svg>
                        </button>

                        <nav class="header__nav">
                            <ul class="header__list">
                                <li class="header__item">
                                    <a href="#" class="header__link">домашняя</a>
                                </li>
                                <li class="header__item">
                                    <a href="#" class="header__link">создать резюме</a>
                                </li>
                                <li class="header__item">
                                    <a href="#" class="header__link">вопросы</a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <a href="#" class="header__logo">nexus for resume</a>
                </main>
            </div>
        </header>

        <main class="main <?= $pageConfig['mainClass'] ?>">