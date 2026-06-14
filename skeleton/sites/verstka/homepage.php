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
    'hero__title' => 'Nexus for <br> <span class="hero__span-right">resume</span> <span class="hero__span-center">lab</span>'
]
?>

<?php
$disclosure = [
    'disclosure__title' => 'Часто задаваемые вопросы',
    'disclosure__items' => [
        [
            'disclosure__item-number' => '01',
            'disclosure__item-title' => 'Сервис действительно бесплатный?',
            'disclosure__item-subtitle' => 'Да, создание и скачивание резюме полностью бесплатно. Без скрытых платежей и пробных периодов — вы можете создать сколько угодно резюме без ограничений.'
        ],
        [
            'disclosure__item-number' => '02',
            'disclosure__item-title' => 'В каком формате сохраняется файл?',
            'disclosure__item-subtitle' => 'Резюме сохраняется в формате PDF. Это универсальный формат, который корректно отображается на любом устройстве и принимается всеми работодателями и HR-системами.'
        ],
        [
            'disclosure__item-number' => '03',
            'disclosure__item-title' => 'Что писать если у меня нет опыта работы?',
            'disclosure__item-subtitle' => 'Сделайте акцент на образовании, курсах, стажировках, волонтёрстве и личных проектах. Расскажите о навыках, достижениях в учёбе и мотивации — работодатели ценят потенциал не меньше опыта.'
        ],
        [
            'disclosure__item-number' => '04',
            'disclosure__item-title' => 'Безопасно хранить у вас данные?',
            'disclosure__item-subtitle' => 'Абсолютно. Мы используем шифрование данных и не передаём вашу информацию третьим лицам. Вы можете удалить своё резюме и все данные из аккаунта в любой момент.'
        ],
    ]
]
?>

<div class="wrapper">
    <?= $mustache->render('hero', $hero); ?>
    <?= $mustache->render('disclosure', $disclosure); ?>
</div>


<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/include/footer.php');
