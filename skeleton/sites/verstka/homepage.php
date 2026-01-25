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
    'hero-content__title' => 'Living Place',
    'hero-content__subtitle' => 'мебель, которая помнит лучшие моменты и хранит тепло ваших встреч.',
]
?>

<?php  
    $products = [
        'products-dropdown__title' => 'Все категории',
        'products-dropdown__links' => [
            ['products-dropdown__link' => 'Домашний декор'],
            ['products-dropdown__link' => 'Лампы'],
            ['products-dropdown__link' => 'Светильники'],
            ['products-dropdown__link' => 'Стулья'],
        ]
    ]
?>

<div class="inner">
    <?= $mustache->render('hero', $hero); ?>
    <?= $mustache->render('products', $products); ?>
</div>


<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/include/footer.php');
