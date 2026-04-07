<?php

use ZLabs\Asset\AsyncJs;
use ZLabs\Asset\DeferredJs;
use ZLabs\Asset\DeferredStyles;
use ZLabs\Frontend\Helpers\BundlesPathBuilder;
use ZLabs\EnvSingleton;
use ZLabs\Frontend\MustacheSingleton;

/** @var array $pageConfig */
/** @var MustacheSingleton $mustache */
?>
</main>

<footer class="footer homepage-fade">
    <div class="wrapper">
        <div class="footer__wrapper">
            <a href="#" class="footer__link">
                <img class="footer__link-icon" src="./local/assets/images/footer-storage.svg" alt="">
                <span class="footer__link-title">Хранение <br> товара</span>
            </a>
            <a href="#" class="footer__link">
                <img class="footer__link-icon" src="./local/assets/images/footer-customs.svg" alt="">
                <span class="footer__link-title">Таможенное <br> оформление</span>
            </a>

            <a href="" class="footer__logo">
                <img class="footer__logo-icon" src="./local/assets/images/header-logo.svg" alt="">
                <div class="footet__logo-suptitle">Группа компаний</div>
                <div class="footet__logo-title">Шёлковый путь</div>
            </a>

            <a href="#" class="footer__link">
                <img class="footer__link-icon" src="./local/assets/images/footer-logistics.svg" alt="">
                <span class="footer__link-title">Логистика <br> и доставка</span>
            </a>
            <a href="#" class="footer__link">
                <img class="footer__link-icon" src="./local/assets/images/footer-procurement.svg" alt="">
                <span class="footer__link-title">Поиск и <br> закупка</span>
            </a>
        </div>
    </div>

    <nav class="footer__menu">
        <div class="wrapper">
            <ul class="footer__menu-list">
                <li class="footer__menu-item">
                    <a href="#" class="footer__menu-link">Услуги</a>
                </li>
                <li class="footer__menu-item">
                    <a href="#" class="footer__menu-link">Экспертность</a>
                </li>
                <li class="footer__menu-item">
                    <a href="#" class="footer__menu-link">О компании</a>
                </li>
                <li class="footer__menu-item">
                    <a href="#" class="footer__menu-link">Отзывы</a>
                </li>
                <li class="footer__menu-item">
                    <a href="#" class="footer__menu-link">Клиенты</a>
                </li>
                <li class="footer__menu-item">
                    <a href="#" class="footer__menu-link">Контакты</a>
                </li>
            </ul>
            <div class="footer__menu-dev">Создание сайта — <a class="footer__dev-link" href="https://z-labs.ru/">Студия Z-labs</a></div>
        </div>
    </nav>
</footer>

<? // page-inner
?>
</div>
<?php


$frontendBuilt = EnvSingleton::getInstance()->isFrontendMode();

// Если фронтенд собран, покажем отложенные css файлы
if ($frontendBuilt) {
    echo (new DeferredStyles(BundlesPathBuilder::buildCssAssets($pageConfig['deferredCss']), true))->render();
} else {
    // костыль для вебпак 5 версии. Общий runtime вынесен в отдельный файл
    $pageConfig['deferredJs']->prepend('bundle-runtime');
}

// Эти скрипты всегда будут грузится отложено (defer)
echo (new DeferredJs(BundlesPathBuilder::buildJsAssets($pageConfig['deferredJs']), true))->render();

// Эти скрипты всегда будут грузится отложено (async - нужно использовать scriptsReady в js файлах)
echo (new AsyncJs(BundlesPathBuilder::buildJsAssets($pageConfig['asyncJs']), true))->render();
?>
</body>

</html>