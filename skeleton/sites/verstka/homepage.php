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
    'hero__title' => 'nexus for <br> <span>resume</span>',
    'hero__subtitle' => 'Привлекайте внимание рекрутеров и получайте больше приглашений на собеседования.',
    "hero__button" => 'подробнее'
]
?>

<?php
$disclosure = [
    'disclosure__title' => 'Часто задаваемые <br> <span>вопросы</span>',
    'disclosure__items' => [
        [
            'disclosure__item-title' => 'Сервис действительно бесплатный?',
            'disclosure__item-subtitle' => 'Да, создание резюме, использование базовых шаблонов и скачивание файла в PDF полностью бесплатны. Мы не требуем привязки карты и не скрываем кнопку скачивания за платным доступом.'
        ],
        [
            'disclosure__item-title' => 'В каком формате лучше сохранять файл?',
            'disclosure__item-subtitle' => 'Мы рекомендуем формат PDF. Он гарантирует, что ваша верстка, шрифты и отступы останутся неизменными на любом компьютере или телефоне рекрутера. Также доступен экспорт в TXT для заполнения анкет на сайтах.'
        ],
         [
            'disclosure__item-title' => 'Резюме должно быть на одну или две страницы?',
            'disclosure__item-subtitle' => 'Для большинства специалистов оптимально — одна страница. Если у вас более 10 лет опыта или вы претендуете на руководящую должность, допустимы две страницы. Главное — не перегружать документ второстепенными деталями.'
        ],
        [
            'disclosure__item-title' => 'Что писать, если у меня нет опыта работы?',
            'disclosure__item-subtitle' => 'Сделайте акцент на образовании, курсовых проектах, волонтерстве и личных достижениях. В нашем конструкторе есть специальные блоки "О себе" и "Навыки", которые помогут выгодно подать ваш потенциал.'
        ],
        [
            'disclosure__item-title' => 'Безопасно ли хранить мои персональные данные?',
            'disclosure__item-subtitle' => 'Абсолютно. Мы используем шифрование данных и не передаем вашу информацию третьим лицам. Вы можете удалить свой аккаунт и все данные в один клик в настройках профиля.'
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
