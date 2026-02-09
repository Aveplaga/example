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



<div class="inner">
    <?= $mustache->render('hero', $hero); ?>
    <?= $mustache->render('advantages', $advantages); ?>
    <?= $mustache->render('offers', $offers); ?>
    <?= $mustache->render('logistics', $logistics); ?>
    <?= $mustache->render('calculator', $calculator); ?>
    <?= $mustache->render('solutions', $solutions); ?>
    <?= $mustache->render('cases', $cases); ?>
    <?= $mustache->render('about', $about); ?>
    <?= $mustache->render('questions', $questions); ?>
    <?= $mustache->render('feedback', $feedback); ?>
</div>


<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/include/footer.php');
