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
// $general = [
//     'general-suptext' => 'Работаем с малым бизнесом и возим небольшие партии',
//     'general-title' => '<b>Выкуп</b> и <b>доставка</b> товаров <b>консалтинговые</b> услуги, <b>помощь в открытии</b> точек продаж.',
//     'general-trigers' => [
//         [
//             'triger-title' => '7',
//             'triger-subtext' => 'Складов в РФ и Китае',
//         ],
//         [
//             'triger-title' => '15',
//             'triger-subtext' => 'Лет опыта работы с Китаем',
//         ],
//         [
//             'triger-title' => '50 кг',
//             'triger-subtext' => 'Минимальный объем партии',
//         ],
//     ],
//     'background-image' => './local/assets/images/c1a166d687a507ba454bcdc93d3ce61ec56b109a.png',
// ]
?>

<?php
$advantages = [
    'advantages-title' => 'Наши преимущества',
    'advantages-desks' => [
        [
            'desk-icon' => './local/assets/images/warehouse-icon.svg',
            'desk-title' => 'Склады на территории России и Китая',
            'desk-subtext' => 'Склады в Гуанчжоу, Хей-Хе, Благовещенске, Москве. Склады партнеров в Фошане, Пекине, Иу.',
        ],
        [
            'desk-icon' => './local/assets/images/list-icon.svg',
            'desk-title' => 'Свой отдел ВЭД',
            'desk-subtext' => 'Самостоятельно ведём переговоры с продавцом необходимого вам товара.',
        ],
        [
            'desk-icon' => './local/assets/images/trading-icon.svg',
            'desk-title' => 'Большой опыт в розничной торговле',
            'desk-subtext' => 'Компания может помочь с открытием точки в любом ТЦ Москвы.',
        ],
        [
            'desk-icon' => './local/assets/images/benefit-icon.svg',
            'desk-title' => 'Выгодные условия сотрудничества',
            'desk-subtext' => 'Минимальный процент за конвертацию валюты, быстрые отправки, честный курс.',
        ],
    ]
]
?>

<?php
$services = [
    'services-title' => 'Услуги компании',
    'services-cards' => [
        [
            'card-icon' => './local/assets/images/1.svg',
            'card-title' => 'Поиск и выкуп товара с оптовых онлайн площадок и фабрик',
            'card-subtitle' => 'Поможем найти и выкупить товар с любой китайской онлайн-площадки или напрямую у фабрики-производителя. Все переговоры с продавцом берём на себя.',
            'card-link' => 'Подробнее об услуге '
        ],
        [
            'card-icon' => './local/assets/images/2.svg',
            'card-title' => 'Доставка товара из Китая',
            'card-subtitle' => 'Доставим ваш груз из Китая в Россию по оптимальномутарифу. Решим все вопросы с таможенным оформлением,и проконтролируем сохранность груза. ',
            'card-link' => 'Подробнее об услуге '
        ],
        [
            'card-icon' => './local/assets/images/3.svg',
            'card-title' => 'Денежные переводы в Китай',
            'card-subtitle' => '???',
            'card-link' => 'Подробнее об услуге '
        ],
        [
            'card-icon' => './local/assets/images/4.svg',
            'card-title' => 'Консалтинговые услуги по работе с Китаем',
            'card-subtitle' => 'Поможем начать бизнес, а если вы уже работаете с Китаем, то оптимизируем ваши процессы и минимизируем расходы.',
            'card-link' => 'Подробнее об услуге '
        ],
        [
            'card-icon' => './local/assets/images/5.svg',
            'card-title' => 'Заказ образцов товарову поставщика',
            'card-subtitle' => 'Закажем образцы, сделаем подробный фото и видео-отчёт о товаре.',
            'card-link' => 'Подробнее об услуге '
        ],

    ]
]
?>

<?php
$logistics = [
    'logistics-title' => 'Логистика',
    'logistics-cards' => [
        [
            'logistics-card__icon' => './local/assets/images/avia_logo.svg',
            'logistics-content__title' => 'Авиа доставка',
            'logistics-content__subtitle' => 'Описание каждого тарифа, не очень длинное, но в несколько строчек, примерно, в четыре или пять строк.',

            'cost-title' => 'Стоимость доставки',
            'cost-price' => 'от 7$ за 1 кг.',
            'term-title' => 'Сроки доставки',
            'term-days' => '3 — 5 дней',

            'logistics-content__button' => 'Подробнее об услуге',
        ],
        [
            'logistics-card__icon' => './local/assets/images/railway_logo.svg',
            'logistics-content__title' => 'Ж/Д доставка',
            'logistics-content__subtitle' => 'Описание каждого тарифа, не очень длинное, но в несколько строчек, примерно, в четыре или пять строк.',

            'cost-title' => 'Стоимость доставки',
            'cost-price' => 'от 1$ за 1 кг.',
            'term-title' => 'Сроки доставки',
            'term-days' => '12 — 20 дней',

            'logistics-content__button' => 'Подробнее об услуге',
        ],
        [
            'logistics-card__icon' => './local/assets/images/avto_logo.svg',
            'logistics-content__title' => 'Авто доставка',
            'logistics-content__subtitle' => 'Описание каждого тарифа, не очень длинное, но в несколько строчек, примерно, в четыре или пять строк.',

            'cost-title' => 'Стоимость доставки',
            'cost-price' => 'от 7$ за 1 кг.',
            'term-title' => 'Сроки доставки',
            'term-days' => '10 — 15 дней',

            'logistics-content__button' => 'Подробнее об услуге',
        ],
        [
            'logistics-card__icon' => './local/assets/images/ship_logo.svg',
            'logistics-content__title' => 'Доставка морем',
            'logistics-content__subtitle' => 'Описание каждого тарифа, не очень длинное, но в несколько строчек, примерно, в четыре или пять строк.',

            'cost-title' => 'Стоимость доставки',
            'cost-price' => 'от 0,5$ за 1 кг.',
            'term-title' => 'Сроки доставки',
            'term-days' => 'от 30 дней',

            'logistics-content__button' => 'Подробнее об услуге ',
        ],
    ]
]
?>

<?php
$settlement = [
    'settlement-content_title' => 'Расчитать стоимость доставки груза',
    'settlement-content_subtitle' => 'Наши менеджеры помогут рассчитать оптимальную стоимость доставки вашего груза',
    'settlement-content_button' => 'оставить заявку',

    'settlement-image' => './local/assets/images/calculator.png',
]
?>

<?php
$info = [
    'right-logo_element' => './local/assets/images/logo_element.png',
    'info-right_title' => 'Помогаем выкупить товар с аукционов, заводов и фабрик',
    'info-right_subtitle' => 'Мы работаем с крупными онлайн-платформами, такими как 1688, Alibaba и Taobao. Поможем вам подобрать надежного поставщика, выбрать качественный товар, выкупить его и, конечно, доставить в Росиию. <br><br> Поможем с переводом денег в Китай по выгодному курсу, который почти не отличается от официального курса ЦБ. ',
    'right-button_more' => 'Подробнее',
    'right-button_application' => 'Оставить заявку',
    'right-image' => './local/assets/images/a_laptop.png',

    'info-left_title' => 'Консультируем по открытию точек продаж',
    'info-left_subtitle' => 'Хотите открыть розничную точку продаж? Мы вам поможем! За время работы компании мы помогли открыть партнёрам более 15 магазинов и за это время накопили большой опыт в сфере розничной торговли.',
    'left-list_title' => 'Наши специалисты вам помогут:',
    'left-list_items' => [
        ['list-item_title' => 'найти торговый центр с оптимальным трафиком;'],
        ['list-item_title' => 'выбрать надёжных подрядчиков для проектирования и отделки помещения под магазин;'],
        ['list-item_title' => 'организовать правильную выкладку товаров;'],
        ['list-item_title' => 'подобрать и доставить торговое оборудование;'],
        ['list-item_title' => 'и многое другое.'],
    ],
    'left-button_consultation' => 'Получить консультацию',
    'left-button_more' => 'Подробнее',
    'left-image' => './local/assets/images/interior.png',
    'image-content_text' => 'Мы решились открыть наш магазин в большом торговом центре, и теперь готовы рассказать вам о проблемах, ошибках, процессах, решениях и выводах.',
    'left-logo_element' => './local/assets/images/logo_element.png',
]
?>

<?php
$stores = [
    'stores-cap_title' => 'Мы помогли открыть',
    'stores-cards' => [
        [
            'stores-card_image' => './local/assets/images/mad_robots.png',
            'stores-card_title' => 'Mad robots',
            'stores-card_subtext' => 'Хобби-магазин',
            'stores-card_subtitle' => 'Подобрали поставщиков и выстроили маркетинговый план для точки продаж.',
            'stores-card_link' => 'Подробнее',
            'stores-cards_services' => [
                [
                    'stores-card_icon' => '',
                    'stores-services_title' => 'Москва, Химки, т.ц. Мега',
                ],
                [
                    'stores-card_icon' => '',
                    'stores-services_title' => 'Реализовано менее чем за 3 месяца',
                ],
                [
                    'stores-card_icon' => '',
                    'stores-services_title' => '250 000 ₽ вложенных средств',
                ],
                [
                    'stores-card_icon' => '',
                    'stores-services_title' => 'Увеличение прибыли на 32%',
                ],
            ],

            'stores-card_button' => 'Подробнее'
        ],
        [
            'stores-card_image' => './local/assets/images/divege.png',
            'stores-card_title' => 'Divage',
            'stores-card_subtext' => 'Магазин корейской косметики',
            'stores-card_subtitle' => 'Нашли надежного поставщика безопасной косметики, выстроили план продвижения, доставили товар.',
            'stores-card_link' => 'Подробнее',
            'stores-cards_services' => [
                [
                    'stores-card_icon' => '',
                    'stores-services_title' => 'Москва, Химки, т.ц. Мега',
                ],
                [
                    'stores-card_icon' => '',
                    'stores-services_title' => 'Реализовано менее чем за 3 месяца',
                ],
                [
                    'stores-card_icon' => '',
                    'stores-services_title' => '250 000 ₽ вложенных средств',
                ],
                [
                    'stores-card_icon' => '',
                    'stores-services_title' => 'Увеличение прибыли на 32%',
                ],
            ],

            'stores-card_button' => 'Подробнее'
        ],
        [
            'stores-card_image' => './local/assets/images/Dobby.png',
            'stores-card_title' => 'Добби',
            'stores-card_subtext' => 'Магазин аксессуаров',
            'stores-card_subtitle' => 'Подобрали поставщиков и выстроили маркетинговый план для точки продаж.',
            'stores-card_link' => 'Подробнее',
            'stores-cards_services' => [
                [
                    'stores-card_icon' => '',
                    'stores-services_title' => 'Москва, Химки, т.ц. Мега',
                ],
                [
                    'stores-card_icon' => '',
                    'stores-services_title' => 'Реализовано менее чем за 3 месяца',
                ],
                [
                    'stores-card_icon' => '',
                    'stores-services_title' => '250 000 ₽ вложенных средств',
                ],
                [
                    'stores-card_icon' => '',
                    'stores-services_title' => 'Увеличение прибыли на 32%',
                ],
            ],

            'stores-card_button' => 'Подробнее'
        ],
        [
            'stores-card_image' => './local/assets/images/mad_robots.png',
            'stores-card_title' => 'Mad robots',
            'stores-card_subtext' => 'Хобби-магазин',
            'stores-card_subtitle' => 'Подобрали поставщиков и выстроили маркетинговый план для точки продаж.',
            'stores-card_link' => 'Подробнее',
            'stores-cards_services' => [
                [
                    'stores-card_icon' => '',
                    'stores-services_title' => 'Москва, Химки, т.ц. Мега',
                ],
                [
                    'stores-card_icon' => '',
                    'stores-services_title' => 'Реализовано менее чем за 3 месяца',
                ],
                [
                    'stores-card_icon' => '',
                    'stores-services_title' => '250 000 ₽ вложенных средств',
                ],
                [
                    'stores-card_icon' => '',
                    'stores-services_title' => 'Увеличение прибыли на 32%',
                ],
            ],

            'stores-card_button' => 'Подробнее'
        ],
        [
            'stores-card_image' => './local/assets/images/divege.png',
            'stores-card_title' => 'Divage',
            'stores-card_subtext' => 'Магазин корейской косметики',
            'stores-card_subtitle' => 'Нашли надежного поставщика безопасной косметики, выстроили план продвижения, доставили товар.',
            'stores-card_link' => 'Подробнее',
            'stores-cards_services' => [
                [
                    'stores-card_icon' => '',
                    'stores-services_title' => 'Москва, Химки, т.ц. Мега',
                ],
                [
                    'stores-card_icon' => '',
                    'stores-services_title' => 'Реализовано менее чем за 3 месяца',
                ],
                [
                    'stores-card_icon' => '',
                    'stores-services_title' => '250 000 ₽ вложенных средств',
                ],
                [
                    'stores-card_icon' => '',
                    'stores-services_title' => 'Увеличение прибыли на 32%',
                ],
            ],

            'stores-card_button' => 'Подробнее'
        ],
        [
            'stores-card_image' => './local/assets/images/Dobby.png',
            'stores-card_title' => 'Добби',
            'stores-card_subtext' => 'Магазин аксессуаров',
            'stores-card_subtitle' => 'Подобрали поставщиков и выстроили маркетинговый план для точки продаж.',
            'stores-card_link' => 'Подробнее',
            'stores-cards_services' => [
                [
                    'stores-card_icon' => '',
                    'stores-services_title' => 'Москва, Химки, т.ц. Мега',
                ],
                [
                    'stores-card_icon' => '',
                    'stores-services_title' => 'Реализовано менее чем за 3 месяца',
                ],
                [
                    'stores-card_icon' => '',
                    'stores-services_title' => '250 000 ₽ вложенных средств',
                ],
                [
                    'stores-card_icon' => '',
                    'stores-services_title' => 'Увеличение прибыли на 32%',
                ],
            ],

            'stores-card_button' => 'Подробнее'
        ],
    ],
    'stores-button' => 'Показать все проекты',
]
?>

<?php
$questions = [
    'questions-title' => 'Частые вопросы',
    'questions-items' => [
        [
            'questions-content_title' => 'Какие даете гарантии, что доставите мой груз?',
            'questions-content_text' => 'Мы гарантируем доставку груза в соответствии с условиями договора. Каждый заказ сопровождается официальным договором, фиксированными сроками и полной ответственностью с нашей стороны. Груз застрахован, а на всех этапах перевозки вы можете отслеживать его статус. В случае непредвиденных ситуаций мы оперативно информируем клиента и берём на себя решение вопросов.',
        ],
        [
            'questions-content_title' => 'Что делать, если мой поставщик отправляет груз в ненадежной упаковке?',
            'questions-content_text' => 'Если поставщик отправляет груз в ненадёжной упаковке, мы обязательно уведомляем вас об этом до отправки. По вашему согласованию мы можем переупаковать груз на нашем складе с использованием надёжных упаковочных материалов, соответствующих типу и хрупкости товара. Это снижает риск повреждений при транспортировке и обеспечивает сохранность груза.',
        ],
        [
            'questions-content_title' => 'Можете ли принять и перевести деньги за товар моему поставщику?',
            'questions-content_text' => 'Да, вы можете перевести деньги поставщику через нашу компанию. Условия перевода зависят от множества факторов, поэтому оговариваются индивидуально по факту возникновения такой потребности.',
        ],
        [
            'questions-content_title' => 'Можете ли принять и перевести деньги за товар моему поставщику?',
            'questions-content_text' => 'Да, вы можете перевести деньги поставщику через нашу компанию. Условия перевода зависят от множества факторов, поэтому оговариваются индивидуально по факту возникновения такой потребности.',
        ],
        [
            'questions-content_title' => 'Можете забрать груз от моего поставщика?',
            'questions-content_text' => 'Мы можем забрать груз напрямую у вашего поставщика. Достаточно предоставить контактные данные и адрес забора — мы согласуем время, организуем выезд транспорта и проконтролируем погрузку. Вы получите уведомление о заборе груза и дальнейших этапах доставки.',
        ],
        [
            'questions-content_title' => 'Как производится оплата заказа?',
            'questions-content_text' => 'Оплата заказа производится удобным для вас способом: по безналичному расчёту или наличными. После согласования условий мы выставляем счёт и фиксируем стоимость в договоре. Оплата осуществляется до начала перевозки, все закрывающие документы предоставляются.',
        ],
    ]
]
?>

<?php
$about = [
    'about-content_title' => 'Наша компания',
    'about-content_subtitle' => 'Интерес к рознице был заметен изначально — с самых первых статейна хабре и на других сайтах мы начали получать запросы на франшизу. Запросы шли со всей страны — Питер, Новосибирск, Краснодар, Ростов-на-Дону, Пермь, Хабаровск, Сочи и так далее. Даже страной дело не ограничилось — люди из Украины, Беларуси и Казахстана тоже хотели открыть у себя магазин Madrobots.  Но франшиза — это в первую очередь отлаженные процессы. Как мы могли объяснять, как открыть магазиныв других городах, если сами этого толком не умели? <br><br> Мы решились открыть наш магазин в большом торговом центре, и теперь готовы рассказать вам о проблемах, косяках, процессах, решениях и выводах. Заходите, под катом интересно. ',
    'about-contact_button' => 'Хочу с вами работать',
    'about-more_button' => 'Подробнее',
    'about-cards' => [
        [
            'about-card_image' => './local/assets/images/certificate.png',
            'card-image_title' => 'Сертификат соответствия',
        ],
        [
            'about-card_image' => './local/assets/images/certificate.png',
            'card-image_title' => 'Сертификат соответствия',
        ],
        [
            'about-card_image' => './local/assets/images/certificate.png',
            'card-image_title' => 'Сертификат соответствия',
        ],
    ]
]
?>



<div class="wrapper">
    <?= $mustache->render('general', $general); ?>
    <?= $mustache->render('advantages', $advantages); ?>
    <?= $mustache->render('services', $services); ?>
    <?= $mustache->render('logistics', $logistics); ?>
    <?= $mustache->render('settlement', $settlement); ?>
    <?= $mustache->render('info', $info); ?>
    <?= $mustache->render('stores', $stores); ?>
    <?= $mustache->render('about', $about); ?>
    <?= $mustache->render('questions', $questions); ?>
</div>


<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/include/footer.php');
