<?php

error_reporting(E_ERROR);

use ZLabs\Frontend\MustacheSingleton;

require_once $_SERVER['DOCUMENT_ROOT'] . '/../../vendor/autoload.php';

$mustache = MustacheSingleton::getInstance();

$pageConfig = [
    'meta' => [
        'title' => 'new-project.ru: Главная',
    ],
    'title' => 'new-project.ru: Главная',
    'isMainPage' => true,
    'mainClass' => 'index',
    'inlineCss' => collect([
        'bundle-homepage',
    ]),
    'inlineJs' => collect([]),
    'deferredCss' => collect([]),
    'deferredJs' => collect([
        'bundle-common',
        'bundle-homepage',
    ]),
    'asyncJs' => collect([]),
];

require_once($_SERVER['DOCUMENT_ROOT'] . '/include/header.php');
?>

<?php
$hero = [
    'hero-content__title' => 'Shop empearl',
    'hero-content__subtitle' => 'Наша компания — это современный магазин мебели и декора, который помогает создавать уютные, стильные и функциональные пространства для жизни и работы.',
]
?>

<?php
$catalog = [
    'catalog-products__content--title' => 'Каталог товаров',
    'catalog-products__content--subtitle' => 'Каталог товаров — это удобная подборка всей продукции магазина, где представлены мебель, декор и аксессуары с описанием, ценой и фото, чтобы клиенты могли быстро выбрать и оформить покупку.',
    'catalog-products__content--links' => [
        ['catalog-products__content--link' => 'Все'],
        ['catalog-products__content--link' => 'Диваны'],
        ['catalog-products__content--link' => 'Кресла'],
    ],
    'catalog-products__items' => [
        [
            'catalog-products__item--image' => './local/assets/images/Node-sofa.png',
            'catalog-products__item--title' => 'Node sofa',
            'catalog-products__item--price' => '₽10 000',
            'catalog-products__item--link' => 'Оформить заказ',
            'catalog-products__item--category' => 'Кресла',
        ],
        [
            'catalog-products__item--image' => './local/assets/images/Develius_Conf.png',
            'catalog-products__item--title' => 'Uppla',
            'catalog-products__item--price' => '₽27 500',
            'catalog-products__item--link' => 'Оформить заказ',
            'catalog-products__item--category' => 'Диваны',
        ],
        [
            'catalog-products__item--image' => './local/assets/images/Kalia-sofa.png',
            'catalog-products__item--title' => 'Develius Conf A Hot Madison',
            'catalog-products__item--price' => '₽426 000',
            'catalog-products__item--link' => 'Оформить заказ',
            'catalog-products__item--category' => 'Диваны',
        ],
        [
            'catalog-products__item--image' => './local/assets/images/Numo.png',
            'catalog-products__item--title' => 'Numo',
            'catalog-products__item--price' => '₽26 000',
            'catalog-products__item--link' => 'Оформить заказ',
            'catalog-products__item--category' => 'Кресла',
        ],
    ],
]
?>

<?php
$order = [
    'order-form__content--title' => 'Оформите заказ в пару кликов',
    'order-form__content--subtitle' => 'Выберите товары, укажите контактные данные и способ доставки — мы позаботимся обо всём остальном. Быстро, удобно и без лишних шагов',
    'order-form__content--button' => 'Оформить заказ',

    'order-form__delivery--title' => 'Тип доставки:',
    'order-form__delivery--links' => [
        ['order-form__delivery--link' => 'Самовывоз'],
        ['order-form__delivery--link' => 'На дом'],
    ]
]
?>



<div class="inner">
    <?= $mustache->render('hero', $hero); ?>
    <?= $mustache->render('catalog-products', $catalog); ?>
    <?= $mustache->render('order-form', $order); ?>
</div>


<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/include/footer.php');
