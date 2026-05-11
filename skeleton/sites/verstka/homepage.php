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
        'bundle-common',
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
$catalog = [
    'catalog__top-title' => 'ТОП-10 лучших отелей Вьетнама с нашими рекомендациями',
    'catalog__top-link--stars' => [
        ['catalog__top-link--star' => 1],
        ['catalog__top-link--star' => 2],
        ['catalog__top-link--star' => 3],
        ['catalog__top-link--star' => 4],
        ['catalog__top-link--star' => 5],
    ],
    'catalog__top-links' => [
        [
            'catalog__top-rating' => [
                ['catalog__top-link--star' => 1],
                ['catalog__top-link--star' => 2],
                ['catalog__top-link--star' => 3],
                ['catalog__top-link--star' => 4],
            ]
        ],
        [
            'catalog__top-rating' => [
                ['catalog__top-link--star' => 1],
                ['catalog__top-link--star' => 2],
                ['catalog__top-link--star' => 3],
            ]
        ],
        [
            'catalog__top-link--title' => 'Все отели'
        ]
    ],

    'catalog__items' => [
        [
            'catalog__item-rating' => 5,
            'catalog__item-stars' => [
                ['catalog__item-star' => 1],
                ['catalog__item-star' => 2],
                ['catalog__item-star' => 3],
                ['catalog__item-star' => 4],
                ['catalog__item-star' => 5],
            ],

            'catalog__item-image' => './local/assets/images/Swandor__Hotels.png',
            'catalog__item-title' => 'Swandor Hotels & Resorts Cam Ran',
            'catalog__item-subtitle' => 'Отель расположен на лазурном побережье красивейшего пляжа Бай Дай. В 2017 г. стал победителем...',
            'catalog__item-link' => 'Узнать цену'
        ],
        [
            'catalog__item-rating' => 5,
            'catalog__item-stars' => [
                ['catalog__item-star' => 1],
                ['catalog__item-star' => 2],
                ['catalog__item-star' => 3],
                ['catalog__item-star' => 4],
                ['catalog__item-star' => 5],
            ],

            'catalog__item-image' => './local/assets/images/Vinpearl__Nha.png',
            'catalog__item-title' => 'Vinpearl Nha Trang Resort',
            'catalog__item-subtitle' => 'Отель расположен на острове Хон Тре, в 40 км от международного аэропорта Камрань, добраться до отеля можно на катере или по ...',
            'catalog__item-link' => 'Узнать цену'
        ],
        [
            'catalog__item-rating' => 5,
            'catalog__item-stars' => [
                ['catalog__item-star' => 1],
                ['catalog__item-star' => 2],
                ['catalog__item-star' => 3],
                ['catalog__item-star' => 4],
                ['catalog__item-star' => 5],
            ],

            'catalog__item-image' => './local/assets/images/Duyen__Ha.png',
            'catalog__item-title' => 'Duyen Ha Resort Cam Ranh',
            'catalog__item-subtitle' => 'Все номера оформлены в современном стиле с оттенком вьетнамского очарования, что обеспечивает максимальный комфо...',
            'catalog__item-link' => 'Узнать цену'
        ],
        [
            'catalog__item-rating' => 5,
            'catalog__item-stars' => [
                ['catalog__item-star' => 1],
                ['catalog__item-star' => 2],
                ['catalog__item-star' => 3],
                ['catalog__item-star' => 4],
                ['catalog__item-star' => 5],
            ],

            'catalog__item-image' => './local/assets/images/Diamond__Bay.png',
            'catalog__item-title' => 'Diamond Bay Resort and Spa',
            'catalog__item-subtitle' => 'Расположен в 11 км к югу от центра города Нячанг (20 мин езды), на берегу моря, в уединенной бухте, в 22 км от аэропорта Камрань/Cam Ranh...',
            'catalog__item-link' => 'Узнать цену'
        ],
        [
            'catalog__item-rating' => 5,
            'catalog__item-stars' => [
                ['catalog__item-star' => 1],
                ['catalog__item-star' => 2],
                ['catalog__item-star' => 3],
                ['catalog__item-star' => 4],
                ['catalog__item-star' => 5],
            ],

            'catalog__item-image' => './local/assets/images/Fusion__Resort.png',
            'catalog__item-title' => 'Fusion Resort Cam Ranh',
            'catalog__item-subtitle' => 'Прекрасный отель с большой территорией, уютными номерами и отличной анимацией.',
            'catalog__item-link' => 'Узнать цену'
        ],
    ]
]
?>




<?php
$resorts = [
    'resorts__top-title' => 'Курорты Вьетнама',
    'resorts__items' => [
        [
            'resorts__item-image' => './local/assets/images/resorts__nhatrang.png',
            'resorts__item-title' => 'Нячанг',
            'resorts__item-subtitle' => 'Превосходный вариант для отдыха: удобный перелет и невысокая цена. Курорт славится песчаными пляжами, ароматным вьетнамским кофе, необыкновенно вкусными деликатесами и развлечениями для всей семьи. ',
            'resorts__item-link' => 'Подробнее'
        ],
        [
            'resorts__item-image' => './local/assets/images/resorts__phanthiet.png',
            'resorts__item-title' => 'Фантхьет',
            'resorts__item-subtitle' => 'Очень популярный курорт Вьетнама, особенно в осенне-зимний период. Отдых на этом курорте отлично подходит для людей, которые хотят спокойного умиротворенного отпуска. Преимущества вьетнамского курорта: уютные отели, обилие морепродуктов',
            'resorts__item-link' => 'Подробнее'
        ],
        [
            'resorts__item-image' => './local/assets/images/resorts__phuquoc.png',
            'resorts__item-title' => 'Фукуок',
            'resorts__item-subtitle' => 'Самый большой и быстро развивающийся остров во Вьетнаме. Удовольствия для гостей острова: белоснежные пляжи, теплое море, изумрудные джунгли, мягкий климат, дайвинг, массажи, вкусные морепродукты и романтические закаты.',
            'resorts__item-link' => 'Подробнее'
        ],
    ]
]
?>

<?php
$questions = [
    'questions__title' => 'Часто задаваемые вопросы',
    'questions__items' => [
        [
            'questions__item-title' => 'Когда и где лучше отдыхать во Вьетнаме?',
            'questions__item-subtitle' => 'Отдых во Вьетнаме возможен круглый год, так как всегда тепло. Но в разное время следует предпочесть тот или иной курорт.<br><br>В центральном районе Вьетнама (Нячанг, Дананг) сезон дождей длится с ноября по март, отличное время для отдыха с апреля по октябрь, пик сезона приходится на июнь, июль, август.<br><br>На юге Вьетнама (Фантьет, Муйне) сезон дождей с мая по ноябрь, благоприятное время для отдыха с ноября по апрель, пик сезона приходится на Новогодние праздники.<br><br>На острове Фукуок самый короткий сезон дождей.',
        ],
        [
            'questions__item-title' => 'Входит ли перелёт в стоимость тура?',
            'questions__item-subtitle' => 'Да, все наши туры пакетные и включают авиаперелёт туда-обратно, трансфер из аэропорта в отель и обратно, а также проживание. В некоторых тарифах также включено питание (завтраки или всё включено). Точный состав тура указан в карточке каждого предложения.',
        ],
        [
            'questions__item-title' => 'Как можно оплатить тур?',
            'questions__item-subtitle' => 'Мы принимаем оплату банковскими картами (Visa, MasterCard, МИР), через системы быстрых платежей (СБП), а также безналичным расчётом для юридических лиц. Оплата производится в рублях по текущему курсу банка-партнёра.',
        ],
        [
            'questions__item-title' => 'Можно ли оформить тур в рассрочку?',
            'questions__item-subtitle' => 'Да, мы сотрудничаем с ведущими банками-партнёрами и предлагаем оформление беспроцентной рассрочки на срок от 3 до 12 месяцев. Решение принимается онлайн за несколько минут. Для оформления потребуется только паспорт и карта банка.',
        ],
        [
            'questions__item-title' => 'При бронировании я должен внести всю сумму сразу?',
            'questions__item-subtitle' => 'Нет, полная оплата не требуется сразу. Для фиксации цены и места в отеле достаточно внести предоплату (обычно от 10% до 30% стоимости тура, зависит от отеля и даты вылета). Оставшуюся сумму необходимо оплатить за 7–14 дней до начала путешествия.',
        ],
        [
            'questions__item-title' => 'Сколько мне брать с собой денег?',
            'questions__item-subtitle' => 'Это зависит от ваших личных предпочтений. В среднем, на еду, сувениры и экскурсии во Вьетнаме достаточно $30–50 на человека в день. В крупных городах и на популярных курортах цены выше, чем в провинции. Также рекомендуем иметь небольшой запас наличных долларов или евро на случай непредвиденных расходов.',
        ],
        [
            'questions__item-title' => 'Что я получу от этого тура?',
            'questions__item-subtitle' => 'Вы получите незабываемые эмоции, полное погружение в культуру Азии, вкуснейшую кухню и потрясающие пейзажи. Мы берём на себя всю организационную часть: подбор оптимального маршрута, проверку отелей, страховку и поддержку 24/7 во время вашего отдыха. Вам остаётся только наслаждаться путешествием.',
        ],
        [
            'questions__item-title' => 'Нужна ли виза во Вьетнам?',
            'questions__item-subtitle' => 'Для граждан РФ при пребывании во Вьетнаме сроком до 45 дней виза не нужна (безвизовый режим). Если вы планируете остаться дольше, необходимо оформить электронную визу (E-visa) заранее. Наши менеджеры проконсультируют вас по актуальным правилам въезда перед бронированием.',
        ],
    ]
]
?>

<div class="wrapper">
    <?= $mustache->render('catalog', $catalog); ?>
    <?= $mustache->render('resorts', $resorts); ?>
    <?= $mustache->render('questions', $questions); ?>
</div>



<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/include/footer.php');
