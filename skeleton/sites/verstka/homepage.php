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
$keys = [
    'keys__content-title' => 'Реализованные проекты',
    'keys__content-subtitle' => 'Что за реализованные проекты, для кого они были реализованы, какой-то маркетинговый текст, который зацепит потенциального клиента.',
    'keys__content-button' => 'Посмотреть все кейсы',
    'keys__list-items' => [
        [
            'keys__item-title' => 'Доставка оборудования для компании «Север Руси»',
            'keys__item-subtitle' => 'Из-за возникших сложностей в конце квартального периода, Клиент мог отправить, только двумя частями, суммы на предоплату...',
            'keys__menu-title' => 'Оказанные услуги',
            'keys__menu-items' => [
                [
                    'keys__menu-icon' => './local/assets/images/storage.svg',
                    'keys__menu-subtitle' => 'Хранение товара'
                ],
                [
                    'keys__menu-icon' => './local/assets/images/customs.svg',
                    'keys__menu-subtitle' => 'Таможенное оформление'
                ],
                [
                    'keys__menu-icon' => './local/assets/images/logistics.svg',
                    'keys__menu-subtitle' => 'Логистика и доставка'
                ],
                [
                    'keys__menu-icon' => './local/assets/images/procurement.svg',
                    'keys__menu-subtitle' => 'Поиск и закупка'
                ]
            ],
            'keys__item-button' => 'Подробнее о проекте'
        ],
        [
            'keys__item-title' => 'Подбор и транспартировка кофейного оборудования для сети уличных Кофеин',
            'keys__item-subtitle' => 'Наш оптовый клиент остался без товара, за неделю у него полностью выкупили весь запас кофе со склада. ',
            'keys__menu-title' => 'Оказанные услуги',
            'keys__menu-items' => [
                [
                    'keys__menu-icon' => './local/assets/images/procurement.svg',
                    'keys__menu-subtitle' => 'Поиск и закупка'
                ],
                [
                    'keys__menu-icon' => './local/assets/images/customs.svg',
                    'keys__menu-subtitle' => 'Таможенное оформление'
                ],
                [
                    'keys__menu-icon' => './local/assets/images/logistics.svg',
                    'keys__menu-subtitle' => 'Логистика и доставка'
                ]
            ],
            'keys__item-button' => 'Подробнее о проекте'
        ],
        [
            'keys__item-title' => 'Доставка пиломатериалов для строительной компании «Амурский Строитель»',
            'keys__item-subtitle' => 'Крупное производственное предприятие вышла на нашу команду по средствам сайта, с запросом на логистику и таможенное...',
            'keys__menu-title' => 'Оказанные услуги',
            'keys__menu-items' => [
                [
                    'keys__menu-icon' => './local/assets/images/customs.svg',
                    'keys__menu-subtitle' => 'Таможенное оформление'
                ],
                [
                    'keys__menu-icon' => './local/assets/images/logistics.svg',
                    'keys__menu-subtitle' => 'Логистика и доставка'
                ],
                [
                    'keys__menu-icon' => './local/assets/images/procurement.svg',
                    'keys__menu-subtitle' => 'Поиск и закупка'
                ]
            ],
            'keys__item-button' => 'Подробнее о проекте'
        ],
    ]
]
?>


<?php
$news =  [
    'news__title--desktop' => 'Последние новости',
    'news__title--mobile' => 'Новости',
    'news__list--items' => [
        [
            'news__item--title' => 'В ходе тестового рейса Falco прошел по заданному маршруту',
            'news__item--date' => '29 августа 2018',
            'news__item--subtitle' => 'В ходе тестового рейса Falco прошел по заданному маршруту, успешно обошел все препятствия и даже сам пришвартовался в порту',
            'news__item--button' => 'Полная новость'
        ],
        [
            'news__item--title' => 'Вот это скорость: склад для Яндекс.Маркета» построили за 14 дней',
            'news__item--date' => '12 января 2019',
            'news__item--subtitle' => 'В комплексе будут собираться заказы для клиентов маркетплейса «Беру», запущенного в октябре',
            'news__item--button' => 'Полная новость'
        ],
        [
            'news__item--title' => 'Вот это скорость: склад для Яндекс.Маркета» построили за 14 дней',
            'news__item--date' => '12 января 2019',
            'news__item--subtitle' => 'В комплексе будут собираться заказы для клиентов маркетплейса «Беру», запущенного в октябре',
            'news__item--button' => 'Полная новость'
        ],
        [
            'news__item--title' => 'Rolls-Royce выставила на показ первый в мире беспилотный паром',
            'news__item--date' => '5 февраля 2019',
            'news__item--subtitle' => 'Согласно прогнозам, с помощью первой европейской платформы электронной коммерции в КНР будет импортировано товаров на общую сумму порядка $200...',
            'news__item--button' => 'Полная новость'
        ]
    ],
    'news__button' => 'Посмотреть все новости'
]
?>

<?php
$about = [
    'about__title--desktop' => 'Немного статистики',
    'about__title--mobile' => 'Статистика',
    'about__list--items' => [
        [
            'about__item--image' => './local/assets/images/market.svg',
            'about__item--title' => 'Успешной работы на рынке'
        ],
        [
            'about__item--image' => './local/assets/images/warehouse.svg',
            'about__item--title' => 'На территории России и Китая'
        ],
        [
            'about__item--image' => './local/assets/images/projects.svg',
            'about__item--title' => 'Выполнено за время работы компании'
        ],
        [
            'about__item--image' => './local/assets/images/customers.svg',
            'about__item--title' => 'Среди крупнейших компаний России'
        ]
    ],
    'about__button' => 'Подробнее о компании'
]
?>

<?php  
$clients = [
    'clients__title' => 'Клиенты компании',
    'clients__items' => [
        ['clients__item-image' => './local/assets/images/fresh-market-logo.svg'],
        ['clients__item-image' => './local/assets/images/sibur-logo.svg'],
        ['clients__item-image' => './local/assets/images/ahk-logo.svg'],
        ['clients__item-image' => './local/assets/images/union-icon.svg'],
        ['clients__item-image' => './local/assets/images/fresh-market-logo.svg'],
        ['clients__item-image' => './local/assets/images/sibur-logo.svg'],
        ['clients__item-image' => './local/assets/images/ahk-logo.svg'],
        ['clients__item-image' => './local/assets/images/union-icon.svg'],
    ]
]
?>

<div class="inner">
    <?= $mustache->render('news', $news); ?>
    <?= $mustache->render('about', $about); ?>
    <?= $mustache->render('clients', $clients); ?>
</div>


<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/include/footer.php');
