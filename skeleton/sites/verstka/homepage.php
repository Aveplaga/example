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
$news = [
    'news-title' => 'Последние новости',
    'news-items' => [
        [
            'news-item__title' => 'В ходе тестового рейса Falco прошел по заданному маршруту, успешно обошел препятствия',
            'news-item__data' => '29 августа 2018',
            'news-item__subtitle' => 'В ходе тестового рейса Falco прошел по заданному маршруту, успешно обошел все препятствия и даже сам пришвартовался в порту',
            'news-item__button' => 'Полная новость'
        ],
        [
            'news-item__title' => 'Вот это скорость: склад для Яндекс.Маркета» построили за 14 дней',
            'news-item__data' => '12 января 2019',
            'news-item__subtitle' => 'В комплексе будут собираться заказы для клиентов маркетплейса «Беру», запущенного в октябре',
            'news-item__button' => 'Полная новость'
        ],
        [
            'news-item__title' => 'Вот это скорость: склад для Яндекс.Маркета» построили за 14 дней',
            'news-item__data' => '12 января 2019',
            'news-item__subtitle' => 'В комплексе будут собираться заказы для клиентов маркетплейса «Беру», запущенного в октябре',
            'news-item__button' => 'Полная новость'
        ],
        [
            'news-item__title' => 'Rolls-Royce выставила на показ первый в мире беспилотный паром',
            'news-item__data' => '5 февраля 2019',
            'news-item__subtitle' => 'Согласно прогнозам, с помощью первой европейской платформы электронной коммерции в КНР будет импортировано товаров на общую сумму порядка $200...',
            'news-item__button' => 'Полная новость'
        ]
    ],
    'news-button' => 'Посмотреть все новости'
]
?>

<?php
$statistics = [
    'statistics-title' => 'Немного статистики',
    'statistics-items' => [
        [
            'statistics-item__icon' => './local/assets/images/market.svg',
            'statistics-item__title' => 'Успешной работы на рынке'
        ],
        [
            'statistics-item__icon' => './local/assets/images/warehouse.svg',
            'statistics-item__title' => 'На территории России и Китая'
        ],
        [
            'statistics-item__icon' => './local/assets/images/projects.svg',
            'statistics-item__title' => 'Выполнено за время работы компании'
        ],
        [
            'statistics-item__icon' => './local/assets/images/customers.svg',
            'statistics-item__title' => 'Среди крупнейших компаний России'
        ]
    ],
    'statistics-button' => 'Подробнее о компании'
]
?>

<?php  
    $customers = [
        'customers-title' => 'Клиенты компании',
        'customers-items' => [
            ['customers-item__logo' => './local/assets/images/fresh-market-logo.svg'],
            ['customers-item__logo' => './local/assets/images/sibur-logo.svg'],
            ['customers-item__logo' => './local/assets/images/ahk-logo.svg'],
            ['customers-item__logo' => './local/assets/images/union-icon.svg'],
        ]
    ]
?>

<div class="inner">
    <?= $mustache->render('news', $news); ?>
    <?= $mustache->render('statistics', $statistics); ?>
    <?= $mustache->render('customers', $customers); ?>
</div>


<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/include/footer.php');
