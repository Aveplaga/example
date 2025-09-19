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
            <div class="header-inner">
                <a href="#" class="header-logo">Outside</a>

                <button class="burger">
                    <svg width="32" height="32" viewBox="0 0 24 24">
                        <line class="line top" x1="3" y1="6" x2="21" y2="6" stroke="#000" stroke-width="2" stroke-linecap="round" />
                        <line class="line middle" x1="3" y1="12" x2="21" y2="12" stroke="#000" stroke-width="2" stroke-linecap="round" />
                        <line class="line bottom" x1="3" y1="18" x2="21" y2="18" stroke="#000" stroke-width="2" stroke-linecap="round" />
                    </svg>
                </button>

                <nav class="header-menu">
                    <ul class="header-list">
                        <li class="header item">
                            <a href="#" class="header-link">home</a>
                        </li>
                        <li class="header item">
                            <a href="#products" class="header-link">shop</a>
                        </li>
                        <li class="header item">
                            <a href="#contact" class="header-link">contact</a>
                        </li>
                        <li class="header-item header-cart">
                            <a href="" class="header-link">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="#3c3c3c;"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M10.0102 4.64303L9.10439 3.7372C7.31449 1.9473 4.41248 1.9473 2.62258 3.7372C0.832676 5.52711 0.832676 8.42911 2.62258 10.219L9.98827 17.5847L9.98977 17.5832L10.0117 17.6052L17.3774 10.2395C19.1673 8.44956 19.1673 5.54755 17.3774 3.75765C15.5875 1.96775 12.6855 1.96775 10.8956 3.75765L10.0102 4.64303ZM9.98977 15.2262L14.1033 11.1127L15.3123 9.94513L15.3135 9.94633L16.1989 9.06095C17.3379 7.92192 17.3379 6.07519 16.1989 4.93616C15.0599 3.79713 13.2131 3.79713 12.0741 4.93616L10.0111 6.99916L10.0051 6.99312L10.0042 6.99402L7.92588 4.91571C6.78685 3.77668 4.94012 3.77668 3.80109 4.91571C2.66206 6.05474 2.66206 7.90147 3.80109 9.0405L5.91728 11.1567L5.91878 11.1552L9.98977 15.2262Z" />
                                </svg>
                                <span class="cart-count">0</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        <main class="main <?= $pageConfig['mainClass'] ?>">