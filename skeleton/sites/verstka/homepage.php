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
$general = [
    'content-title' => 'Designer lamps',
    'content-subtext' => 'Exclusive designer lighting crafted to elevate your interior with refined aesthetics and timeless sophistication.',
    'content-link' => '-See the offer',
]
?>

<?php
$product = [
    'drowpon-title' => 'Sort by :',
    'drowpon-links' => [
        ['drowpon-link' => 'All'],
        ['drowpon-link' => 'Lamp'],
        ['drowpon-link' => 'Light'],
        ['drowpon-link' => 'Home decor'],
        ['drowpon-link' => 'Chair'],
    ]
]
?>

<div class="wrapper">
    <?= $mustache->render('general', $general); ?>
    <?= $mustache->render('product', $product); ?>
</div>


<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/include/footer.php');
