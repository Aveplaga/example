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
$advantages = [
    'advantages-title' => 'Наши преимущества',
    'advantages-items' => [
        [
            'advantages-item__icon' => './local/assets/images/warehouse-icon.svg',
            'advantages-item__title' => 'Склады на территории России и Китая',
            'advantages-item__subtitle' => 'Склады в Гуанчжоу, Хей-Хе, Благовещенске, Москве. Склады партнеров в Фошане, Пекине, Иу.',
        ],
        [
            'advantages-item__icon' => './local/assets/images/list-icon.svg',
            'advantages-item__title' => 'Свой отдел ВЭД',
            'advantages-item__subtitle' => 'Самостоятельно ведём переговоры с продавцом необходимого вам товара.',
        ],
        [
            'advantages-item__icon' => './local/assets/images/trading-icon.svg',
            'advantages-item__title' => 'Большой опытв розничной торговле',
            'advantages-item__subtitle' => 'Компания может помочь с открытием точки в любом ТЦ Москвы.',
        ],
        [
            'advantages-item__icon' => './local/assets/images/benefit-icon.svg',
            'advantages-item__title' => 'Выгодные условия сотрудничества',
            'advantages-item__subtitle' => 'Минимальный процент за конвертацию валюты, быстрые отправки, честный курс.',
        ],
    ]
]
?>


<?php
$offers = [
    'offers-title' => 'Услуги компании',
    'offers-items' => [
        [
            'offers-item__icon' => './local/assets/images/1.svg',
            'offers-item__title' => 'Поиск и выкуп товара с оптовых онлайн площадок и фабрик',
            'offers-content__subtitle' => 'Поможем найти и выкупить товар с любой китайской онлайн-площадки или напрямую у фабрики-производителя. Все переговоры с продавцом берём на себя.',
            'offers-link__title' => 'Подробнее об услуге',
        ],
        [
            'offers-item__icon' => './local/assets/images/2.svg',
            'offers-item__title' => 'Доставка товара из Китая',
            'offers-content__subtitle' => 'Доставим ваш груз из Китая в Россию по оптимальномутарифу. Решим все вопросы с таможенным оформлением, и проконтролируем сохранность груза. ',
            'offers-link__title' => 'Подробнее об услуге',
        ],
        [
            'offers-item__icon' => './local/assets/images/3.svg',
            'offers-item__title' => 'Денежные переводы',
            'offers-content__subtitle' => '???',
            'offers-link__title' => 'Подробнее об услуге',
        ],
        [
            'offers-item__icon' => './local/assets/images/4.svg',
            'offers-item__title' => 'Консалтинговые услуги по работе с Китаем',
            'offers-content__subtitle' => 'Поможем начать бизнес, а если вы уже работаете с Китаем, то оптимизируем ваши процессы и минимизируем расходы.',
            'offers-link__title' => 'Подробнее об услуге',
        ],
        [
            'offers-item__icon' => './local/assets/images/5.svg',
            'offers-item__title' => 'Заказ образцов товаров у поставщика',
            'offers-content__subtitle' => 'Закажем образцы, сделаем подробный фото и видео-отчёт о товаре.',
            'offers-link__title' => 'Подробнее об услуге',
        ],
    ]
]
?>

<?php
$logistics = [
    'logistics-title' => 'Логистика',
    'logistics-items' => [
        [
            'logistics-item__icon' => './local/assets/images/avia_logo.svg',
            'logistics-content__title' => 'Авиа доставка',
            'logistics-content__subtitle' => 'Описание каждого тарифа, не очень длинное, но в несколько строчек, примерно, в четыре или пять строк.',
            'logistics-content__items' => [
                [
                    'logistics-content__item-title' => 'Стоимость доставки',
                    'logistics-content__item-subtitle' => 'от 7$ за 1 кг.',
                ],
                [
                    'logistics-content__item-title' => 'Сроки доставки',
                    'logistics-content__item-subtitle' => '3 — 5 дней',
                ],
            ],
            'logistics-content__link' => 'Подробнее об услуге',
        ],
        [
            'logistics-item__icon' => './local/assets/images/railway_logo.svg',
            'logistics-content__title' => 'Ж/Д доставка',
            'logistics-content__subtitle' => 'Описание каждого тарифа, не очень длинное, но в несколько строчек, примерно, в четыре или пять строк.',
            'logistics-content__items' => [
                [
                    'logistics-content__item-title' => 'Стоимость доставки',
                    'logistics-content__item-subtitle' => 'от 1$ за 1 кг.',
                ],
                [
                    'logistics-content__item-title' => 'Сроки доставки',
                    'logistics-content__item-subtitle' => '12 — 20 дней',
                ],
            ],
            'logistics-content__link' => 'Подробнее об услуге',
        ],
        [
            'logistics-item__icon' => './local/assets/images/avto_logo.svg',
            'logistics-content__title' => 'Авто доставка',
            'logistics-content__subtitle' => 'Описание каждого тарифа, не очень длинное, но в несколько строчек, примерно, в четыре или пять строк.',
            'logistics-content__items' => [
                [
                    'logistics-content__item-title' => 'Стоимость доставки',
                    'logistics-content__item-subtitle' => 'от 7$ за 1 кг.',
                ],
                [
                    'logistics-content__item-title' => 'Сроки доставки',
                    'logistics-content__item-subtitle' => '10 — 15 дней',
                ],
            ],
            'logistics-content__link' => 'Подробнее об услуге',
        ],
        [
            'logistics-item__icon' => './local/assets/images/ship_logo.svg',
            'logistics-content__title' => 'Доставка морем',
            'logistics-content__subtitle' => 'Описание каждого тарифа, не очень длинное, но в несколько строчек, примерно, в четыре или пять строк.',
            'logistics-content__items' => [
                [
                    'logistics-content__item-title' => 'Стоимость доставки',
                    'logistics-content__item-subtitle' => 'от 0,5$ за 1 кг.',
                ],
                [
                    'logistics-content__item-title' => 'Сроки доставки',
                    'logistics-content__item-subtitle' => 'от 30 дней',
                ],
            ],
            'logistics-content__link' => 'Подробнее об услуге',
        ],
    ],
    'logistics-pagination__dots' => [[], [], [], [],]
]
?>

<?php
$calculator = [
    'calculator-content__title' => 'Расчитать стоимость доставки груза',
    'calculator-content__subtitle' => 'Наши менеджеры помогут рассчитать оптимальную стоимость доставки вашего груза',
    'calculator-content__link' => 'оставить заявку',
    'calculator-image' => './local/assets/images/calculator.png'
]
?>

<?php
$solutions = [
    'sourcing-content__title' => 'Помогаем выкупить товар с аукционов, заводов и фабрик',
    'sourcing-content__subtitle' => 'Мы работаем с крупными онлайн-платформами, такими как 1688, Alibaba и Taobao. Поможем вам подобрать надежного поставщика, выбрать качественный товар, выкупить его и, конечно, доставить в Росиию. <br><br> Поможем с переводом денег в Китай по выгодному курсу, который почти не отличается от официального курса ЦБ. ',
    'sourcing-link__more' => 'Подробнее',
    'sourcing-link__application' => 'Оставить заявку',
    'sourcing-image' => './local/assets/images/a_laptop.png',

    'consulting-content__title' => 'Консультируем по открытию точек продаж',
    'consulting-content__subtitle' => 'Хотите открыть розничную точку продаж? Мы вам поможем! За время работы компании мы помогли открыть партнёрам более 15 магазинов и за это время накопили большой опыт в сфере розничной торговли.',
    'consulting-list__title' => 'Наши специалисты вам помогут:',
    'consulting-list__items' => [
        ['consulting-item__title' => 'найти торговый центр с оптимальным трафиком;'],
        ['consulting-item__title' => 'выбрать надёжных подрядчиков для проектирования и отделки помещения под магазин;'],
        ['consulting-item__title' => 'организовать правильную выкладку товаров;'],
        ['consulting-item__title' => 'подобрать и доставить торговое оборудование;'],
        ['consulting-item__title' => 'и многое другое.'],
    ],
    'consulting-link__consultation' => 'Получить консультацию',
    'consulting-link__more' => 'Подробнее',
    'consulting-image' => './local/assets/images/interior.png',
    'consulting-description__text' => 'Мы решились открыть наш магазин в большом торговом центре, и теперь готовы рассказать вам о проблемах, ошибках, процессах, решениях и выводах.'
]
?>

<?php
$cases = [
    'cases-cap__title' => 'Мы помогли открыть',
    'cases-items' => [
        [
            'cases-item__image' => './local/assets/images/mad_robots.png',
            'cases-item__title' => 'Mad robots',
            'cases-item__subtext' => 'Хобби-магазин',
            'cases-item__subtitle' => 'Подобрали поставщиков и выстроили маркетинговый план для точки продаж.',
            'cases-item__link-tablet' => 'подробнее',
            'cases-item__link-mobile' => 'Подробнее о проекте',
            'cases-items__features' => [
                [
                    'cases-features__icon' => './local/assets/images/geolocation.svg',
                    'cases-features__title' => 'Москва, Химки, т.ц. Мега'
                ],
                [
                    'cases-features__icon' => './local/assets/images/calendar-checked.svg',
                    'cases-features__title' => 'Реализовано менее чем за 3 месяца'
                ],
                [
                    'cases-features__icon' => './local/assets/images/wallet.svg',
                    'cases-features__title' => '250 000 ₽ вложенных средств'
                ],
                [
                    'cases-features__icon' => './local/assets/images/case.svg',
                    'cases-features__title' => 'Увеличение прибыли на 32%'
                ],
            ],
            'cases-item__link' => 'Подробнее'
        ],
        [
            'cases-item__image' => './local/assets/images/divege.png',
            'cases-item__title' => 'Divage',
            'cases-item__subtext' => 'Магазин корейской косметики',
            'cases-item__subtitle' => 'Нашли надежного поставщика безопасной косметики, выстроили план продвижения, доставили товар.',
            'cases-item__link-tablet' => 'подробнее',
            'cases-item__link-mobile' => 'Подробнее о проекте',
            'cases-items__features' => [
                [
                    'cases-features__icon' => './local/assets/images/geolocation.svg',
                    'cases-features__title' => 'Москва, Химки, т.ц. Мега'
                ],
                [
                    'cases-features__icon' => './local/assets/images/calendar-checked.svg',
                    'cases-features__title' => 'Реализовано менее чем за 3 месяца'
                ],
                [
                    'cases-features__icon' => './local/assets/images/wallet.svg',
                    'cases-features__title' => '250 000 ₽ вложенных средств'
                ],
                [
                    'cases-features__icon' => './local/assets/images/case.svg',
                    'cases-features__title' => 'Увеличение прибыли на 32%'
                ],
            ],
            'cases-item__link' => 'Подробнее'
        ],
        [
            'cases-item__image' => './local/assets/images/Dobby.png',
            'cases-item__title' => 'Добби',
            'cases-item__subtext' => 'Магазин аксессуаров',
            'cases-item__subtitle' => 'Подобрали поставщиков и выстроили маркетинговый план для точки продаж.',
            'cases-item__link-tablet' => 'подробнее',
            'cases-item__link-mobile' => 'Подробнее о проекте',
            'cases-items__features' => [
                [
                    'cases-features__icon' => './local/assets/images/geolocation.svg',
                    'cases-features__title' => 'Москва, Химки, т.ц. Мега'
                ],
                [
                    'cases-features__icon' => './local/assets/images/calendar-checked.svg',
                    'cases-features__title' => 'Реализовано менее чем за 3 месяца'
                ],
                [
                    'cases-features__icon' => './local/assets/images/wallet.svg',
                    'cases-features__title' => '250 000 ₽ вложенных средств'
                ],
                [
                    'cases-features__icon' => './local/assets/images/case.svg',
                    'cases-features__title' => 'Увеличение прибыли на 32%'
                ],
            ],
            'cases-item__link' => 'Подробнее'
        ],
        [
            'cases-item__image' => './local/assets/images/mad_robots.png',
            'cases-item__title' => 'Mad robots',
            'cases-item__subtext' => 'Хобби-магазин',
            'cases-item__subtitle' => 'Подобрали поставщиков и выстроили маркетинговый план для точки продаж.',
            'cases-item__link-tablet' => 'подробнее',
            'cases-item__link-mobile' => 'Подробнее о проекте',
            'cases-items__features' => [
                [
                    'cases-features__icon' => './local/assets/images/geolocation.svg',
                    'cases-features__title' => 'Москва, Химки, т.ц. Мега'
                ],
                [
                    'cases-features__icon' => './local/assets/images/calendar-checked.svg',
                    'cases-features__title' => 'Реализовано менее чем за 3 месяца'
                ],
                [
                    'cases-features__icon' => './local/assets/images/wallet.svg',
                    'cases-features__title' => '250 000 ₽ вложенных средств'
                ],
                [
                    'cases-features__icon' => './local/assets/images/case.svg',
                    'cases-features__title' => 'Увеличение прибыли на 32%'
                ],
            ],
            'cases-item__link' => 'Подробнее'
        ],
    ],
    'cases-pagination__dots' => [[], [], [], [],],
    'cases-link' => 'Посмотреть все проекты'
]
?>

<?php
$questions = [
    'questions-title' => 'Частые вопросы',
    'questions-items' => [
        [
            'questions-content__title' => 'Какие даете гарантии, что доставите мой груз?',
            'questions-item__subtitle' => 'Мы гарантируем доставку груза в соответствии с условиями договора. Каждый заказ сопровождается официальным договором, фиксированными сроками и полной ответственностью с нашей стороны. Груз застрахован, а на всех этапах перевозки вы можете отслеживать его статус. В случае непредвиденных ситуаций мы оперативно информируем клиента и берём на себя решение вопросов.'
        ],
        [
            'questions-content__title' => 'Что делать, если мой поставщик отправляет груз в ненадежной упаковке?',
            'questions-item__subtitle' => 'Если поставщик отправляет груз в ненадёжной упаковке, мы обязательно уведомляем вас об этом до отправки. По вашему согласованию мы можем переупаковать груз на нашем складе с использованием надёжных упаковочных материалов, соответствующих типу и хрупкости товара. Это снижает риск повреждений при транспортировке и обеспечивает сохранность груза.'
        ],
        [
            'questions-content__title' => 'Можете ли принять и перевести деньги за товар моему поставщику?',
            'questions-item__subtitle' => 'Да, вы можете перевести деньги поставщику через нашу компанию. Условия перевода зависят от множества факторов, поэтому оговариваются индивидуально по факту возникновения такой потребности.'
        ],
        [
            'questions-content__title' => 'Можете ли принять и перевести деньги за товар моему поставщику?',
            'questions-item__subtitle' => 'Да, вы можете перевести деньги поставщику через нашу компанию. Условия перевода зависят от множества факторов, поэтому оговариваются индивидуально по факту возникновения такой потребности.'
        ],
        [
            'questions-content__title' => 'Можете забрать груз от моего поставщика?',
            'questions-item__subtitle' => 'Мы можем забрать груз напрямую у вашего поставщика. Достаточно предоставить контактные данные и адрес забора — мы согласуем время, организуем выезд транспорта и проконтролируем погрузку. Вы получите уведомление о заборе груза и дальнейших этапах доставки.'
        ],
        [
            'questions-content__title' => 'Как производится оплата заказа?',
            'questions-item__subtitle' => 'Оплата заказа производится удобным для вас способом: по безналичному расчёту или наличными. После согласования условий мы выставляем счёт и фиксируем стоимость в договоре. Оплата осуществляется до начала перевозки, все закрывающие документы предоставляются.'
        ],
    ]
]
?>

<?php
$about = [
    'about-content__title' => 'Наша компания',
    'about-content__subtitle' => 'Интерес к рознице был заметен изначально — с самых первых статейна хабре и на других сайтах мы начали получать запросы на франшизу. Запросы шли со всей страны — Питер, Новосибирск, Краснодар, Ростов-на-Дону, Пермь, Хабаровск, Сочи и так далее. Даже страной дело не ограничилось — люди из Украины, Беларуси и Казахстана тоже хотели открыть у себя магазин Madrobots.  Но франшиза — это в первую очередь отлаженные процессы. Как мы могли объяснять, как открыть магазиныв других городах, если сами этого толком не умели? <br><br> Мы решились открыть наш магазин в большом торговом центре, и теперь готовы рассказать вам о проблемах, косяках, процессах, решениях и выводах. Заходите, под катом интересно. ',
    'about-link__connection' => 'Хочу с вами работать',
    'adout-link__more' => 'Подробнее',
    'about-items' => [
        [
            'about-item__image' => './local/assets/images/certificate.png',
            'about-text__title' => 'Сертификат соответствия',
        ],
        [
            'about-item__image' => './local/assets/images/certificate.png',
            'about-text__title' => 'Сертификат соответствия',
        ],
        [
            'about-item__image' => './local/assets/images/certificate.png',
            'about-text__title' => 'Сертификат соответствия',
        ],
    ]
]
?>

<?php
$questions = [
    'questions-title' => 'Частые вопросы',
    'questions-items' => [
        [
            'questions-content__title' => 'Какие даете гарантии, что доставите мой груз?',
            'questions-item__subtitle' => 'Мы гарантируем доставку груза в соответствии с условиями договора. Каждый заказ сопровождается официальным договором, фиксированными сроками и полной ответственностью с нашей стороны. Груз застрахован, а на всех этапах перевозки вы можете отслеживать его статус. В случае непредвиденных ситуаций мы оперативно информируем клиента и берём на себя решение вопросов.'
        ],
        [
            'questions-content__title' => 'Что делать, если мой поставщик отправляет груз в ненадежной упаковке?',
            'questions-item__subtitle' => 'Если поставщик отправляет груз в ненадёжной упаковке, мы обязательно уведомляем вас об этом до отправки. По вашему согласованию мы можем переупаковать груз на нашем складе с использованием надёжных упаковочных материалов, соответствующих типу и хрупкости товара. Это снижает риск повреждений при транспортировке и обеспечивает сохранность груза.'
        ],
        [
            'questions-content__title' => 'Можете ли принять и перевести деньги за товар моему поставщику?',
            'questions-item__subtitle' => 'Да, вы можете перевести деньги поставщику через нашу компанию. Условия перевода зависят от множества факторов, поэтому оговариваются индивидуально по факту возникновения такой потребности.'
        ],
        [
            'questions-content__title' => 'Можете ли принять и перевести деньги за товар моему поставщику?',
            'questions-item__subtitle' => 'Да, вы можете перевести деньги поставщику через нашу компанию. Условия перевода зависят от множества факторов, поэтому оговариваются индивидуально по факту возникновения такой потребности.'
        ],
        [
            'questions-content__title' => 'Можете забрать груз от моего поставщика?',
            'questions-item__subtitle' => 'Мы можем забрать груз напрямую у вашего поставщика. Достаточно предоставить контактные данные и адрес забора — мы согласуем время, организуем выезд транспорта и проконтролируем погрузку. Вы получите уведомление о заборе груза и дальнейших этапах доставки.'
        ],
        [
            'questions-content__title' => 'Как производится оплата заказа?',
            'questions-item__subtitle' => 'Оплата заказа производится удобным для вас способом: по безналичному расчёту или наличными. После согласования условий мы выставляем счёт и фиксируем стоимость в договоре. Оплата осуществляется до начала перевозки, все закрывающие документы предоставляются.'
        ],
    ]
]
?>

<?php
$feedback = [
    'feedback-content__title' => 'Мы всегда готовы сотрудничеству',
    'feedback-content__subtitle' => 'Оставьте заявку на сотрудничество и наши менеджеры свяжутся с вами в течение <span>24 часов</span>',
    'feedback-content__subtext' => 'Отправляя заявку, вы соглашаетесь с правилами обработки персональных данных и <a href="#">политикой конфиденциальности.</a>',
    'feedback-content__image' => '',

    'feedback-content__label-name' => 'Ваше имя <span>*</span>',
    'feedback-content__file-title' => 'Прикрепите файл',
    'feedback-content__file-subtitle' => 'Не больше 10mb',

    'feedback-dropdown__title' => 'Выберите услугу',
    'feedback-dropdown__links' => [
        ['feedback-dropdown__link' => 'Поиск и выкуп товара'],
        ['feedback-dropdown__link' => 'Доставка товара из Китая'],
        ['feedback-dropdown__link' => 'Денежные переводы в Китай'],
        ['feedback-dropdown__link' => 'Консалтинговые услуги'],
        ['feedback-dropdown__link' => 'Заказ образцов товаров'],
    ],
    'feedback-content-button' => 'оставить заявку',

    'feedback-content__label-number' => 'Номер телефона <span>*</span>',
    'feedback-label' => 'Текст сообщения',
]
?>

<div class="wrapper">
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
