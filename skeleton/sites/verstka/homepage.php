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
    'hero__title' => 'Nexus for <br> <span>Resume</span>',
    'hero__subtitle' => 'Персональное онлайн-резюме. <br> Привлекайте внимание рекрутеров и получайте больше приглашений на собеседования.'
]
?>

<div class="wrapper">
    <?= $mustache->render('hero', $hero); ?>
</div>

<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/include/footer.php');
