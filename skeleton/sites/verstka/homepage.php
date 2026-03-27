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
    'news-title__desktop' => 'Последние новости',
    'news-title__mobile' => 'Новости',
    'news-items' => [
        [
            'news-item__text--title' => 'В ходе тестового рейса Falco прошел по заданному маршруту',
            'news-item__date' => '29 августа 2018',
            'news-item__subtitle' => 'В ходе тестового рейса Falco прошел по заданному маршруту, успешно обошел все препятствия и даже сам пришвартовался в порту',
            'news-item__link' => 'Полная новость'
        ],
        [
            'news-item__text--title' => 'Вот это скорость: склад для Яндекс.Маркета» построили за 14 дней',
            'news-item__date' => '12 января 2019',
            'news-item__subtitle' => 'В комплексе будут собираться заказы для клиентов маркетплейса «Беру», запущенного в октябре',
            'news-item__link' => 'Полная новость'
        ],
        [
            'news-item__text--title' => 'Вот это скорость: склад для Яндекс.Маркета» построили за 14 дней',
            'news-item__date' => '12 января 2019',
            'news-item__subtitle' => 'В комплексе будут собираться заказы для клиентов маркетплейса «Беру», запущенного в октябре',
            'news-item__link' => 'Полная новость'
        ],

        [
            'news-item__text--title' => 'Rolls-Royce выставила на показ первый в мире беспилотный паром',
            'news-item__date' => '5 февраля 2019',
            'news-item__subtitle' => 'Согласно прогнозам, с помощью первой европейской платформы электронной коммерции в КНР будет импортировано товаров на общую сумму порядка $200...',
            'news-item__link' => 'Полная новость'
        ]
    ],
    'news-link' => 'Посмотреть все новости'
]
?>

<?php
$about = [
    'about-title__desktop' => 'Немного статистики',
    'about-title__mobile' => 'Статистика',
    'about-items' => [
        [
            'about-item__logo' => './local/assets/images/market.svg',
            'about-item__title' => 'Успешной работы на рынке'
        ],
        [
            'about-item__logo' => './local/assets/images/warehouse.svg',
            'about-item__title' => 'На территории России и Китая'
        ],
        [
            'about-item__logo' => './local/assets/images/projects.svg',
            'about-item__title' => 'Выполнено за время работы компании'
        ],
        [
            'about-item__logo' => './local/assets/images/customers.svg',
            'about-item__title' => 'Среди крупнейших компаний России'
        ]
    ],
    'about-link' => 'Подробнее о компании'
]
?>

<?php
$feedback = []
?>


<div class="inner">
    <?= $mustache->render('news', $news); ?>
    <?= $mustache->render('about', $about); ?>
    <?= $mustache->render('feedback', $feedback); ?>
</div>


<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/include/footer.php');
