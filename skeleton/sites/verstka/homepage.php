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
    'hero-content__title' => 'Auto Resume',
    'hero-content__subtitle' => 'Сервис для создания профессионального резюме за несколько минут. Просто введите данные и получите CV, готовое к отправке работодателю.',
    'hero-content__link' => 'Создать резюме'
]
?>

<?php
$resume = [
    'resume-content__title' => 'Создайте своё профессиональное резюме онлайн',
    'resume-content__subtitle' => 'Заполните форму и получите аккуратное, структурированное резюме всего за несколько минут.',

    'preview-content__title' => 'Предварительный просмотр',
    'preview-content__subtitle' => 'Платформа автоматически формирует документ и отображает превью в реальном времени, чтобы вы сразу видели результат и могли контролировать оформление.',
    'preview-content__button' => 'Скачать рeзюме в PDF',

    'preview-label--name' => 'ФИО:',
    'preview-label--email' => 'Электронная почта:',
    'preview-label--number' => 'Телефон:',
    'preview-label--education' => 'Образование:',
    'preview-label--experience' => 'Опыт работы / О себе:',
    'preview-label--skills' => 'Навыки:',
]
?>



<div class="inner">
    <?= $mustache->render('hero', $hero); ?>
    <?= $mustache->render('resume-form', $resume); ?>
</div>


<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/include/footer.php');
