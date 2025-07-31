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
        'bundle-test-task',
    ]),
    'inlineJs' => collect([]),
    'deferredCss' => collect([]),
    'deferredJs' => collect([
        'bundle-common',
        'bundle-test-task',
    ]),
    'asyncJs' => collect([]),
];

require_once($_SERVER['DOCUMENT_ROOT'] . '/include/header.php');
?>

<?php
$task = [
    'slides' => [
        [
            'background' => './local/assets/images/background.png',
            'logo' => './local/assets/images/logo.png',
            'logoAlt' => 'Storiz',
            'title' => 'Надежный поставщик и партнер для вашего бизнеса',
            'buttonText' => 'Перейти в каталог',
        ],
        [
            'background' => './local/assets/images/background.png',
            'logo' => './local/assets/images/logo.png',
            'logoAlt' => 'Storiz',
            'title' => 'Надежный поставщик и партнер для вашего бизнеса',
            'buttonText' => 'Перейти в каталог',
        ],
        [
            'background' => './local/assets/images/background.png',
            'logo' => './local/assets/images/logo.png',
            'logoAlt' => 'Storiz',
            'title' => 'Надежный поставщик и партнер для вашего бизнеса',
            'buttonText' => 'Перейти в каталог',
        ],
    ]
];

?>

<?php
$catalog = [
    'items' => [
        [
            'title' => 'Рюкзаки',
            'image' => './local/assets/images/backpack.png',
            'imageAlt' => 'Рюкзаки'
        ],
        [
            'title' => 'Гаджеты',
            'image' => './local/assets/images/gadgets.png',
            'imageAlt' => 'Гаджеты'
        ],
        [
            'title' => 'Аксессуары',
            'image' => './local/assets/images/accessories.png',
            'imageAlt' => 'Аксессуары'
        ],
        [
            'title' => 'Игрушки',
            'image' => './local/assets/images/toys.png',
            'imageAlt' => 'Игрушка'
        ],
        [
            'title' => 'Канцелярия',
            'image' => './local/assets/images/chancellery.png',
            'imageAlt' => 'Канцелярия'
        ],
        [
            'title' => 'Одежда',
            'image' => './local/assets/images/clothes.png',
            'imageAlt' => 'Одежда'
        ],
        [
            'title' => 'Для дома',
        ],
        [
            'title' => 'Новый Год',
            'image' => './local/assets/images/new_year.png',
            'imageAlt' => 'Новый год'
        ],

    ]
]
?>

<?php
$duo = [
    'title' => 'Новинки',
    'subtitle' => 'все новинки',
    'subtitleLink' => '/new-items',

    'newItems' => [
        [
            'image' => './local/assets/images/image.png',
            'itemTitle' => '"Шагающая" пружинка слинки - средняя',
            'productInfo' => [
                [
                    'textBefore' => 'В наличии',
                    'icon' => './local/assets/images/check.png',
                    'iconAlt' => 'в наличии',
                    'textAfter' => '<span>4050</span>'
                ],
                [
                    'textBefore' => 'Продано за месяц',
                    'icon' => './local/assets/images/check.png',
                    'iconAlt' => 'продано',
                    'textAfter' => '<span>8352</span>'
                ]
            ],
            'itemPrice' => '280 ₽ <span>230</span>'
        ],

        [
            'image' => './local/assets/images/image.png',
            'itemTitle' => '"Шагающая" пружинка слинки - средняя',
            'productInfo' => [
                [
                    'textBefore' => 'В наличии',
                    'icon' => './local/assets/images/check.png',
                    'iconAlt' => 'в наличии',
                    'textAfter' => '<span>4050</span>'
                ],
                [
                    'textBefore' => 'Продано за месяц',
                    'icon' => './local/assets/images/check.png',
                    'iconAlt' => 'продано',
                    'textAfter' => '<span>8352</span>'
                ]
            ],
            'itemPrice' => '260 ₽'
        ],
        [
            'image' => './local/assets/images/image.png',
            'itemTitle' => '"Шагающая" пружинка слинки - средняя',
            'productInfo' => [
                [
                    'textBefore' => 'В наличии',
                    'icon' => './local/assets/images/check.png',
                    'iconAlt' => 'в наличии',
                    'textAfter' => '<span>4050</span>'
                ],
                [
                    'textBefore' => 'Продано за месяц',
                    'icon' => './local/assets/images/check.png',
                    'iconAlt' => 'продано',
                    'textAfter' => '<span>8352</span>'
                ]
            ],
            'itemPrice' => '260 ₽'
        ],
        [
            'image' => './local/assets/images/image.png',
            'itemTitle' => '"Шагающая" пружинка слинки - средняя',
            'productInfo' => [
                [
                    'textBefore' => 'В наличии',
                    'icon' => './local/assets/images/check.png',
                    'iconAlt' => 'в наличии',
                    'textAfter' => '<span>4050</span>'
                ],
                [
                    'textBefore' => 'Продано за месяц',
                    'icon' => './local/assets/images/check.png',
                    'iconAlt' => 'продано',
                    'textAfter' => '<span>8352</span>'
                ]
            ],
            'itemPrice' => '260 ₽'
        ],
        [
            'image' => './local/assets/images/image.png',
            'itemTitle' => '"Шагающая" пружинка слинки - средняя',
            'productInfo' => [
                [
                    'textBefore' => 'В наличии',
                    'icon' => './local/assets/images/check.png',
                    'iconAlt' => 'в наличии',
                    'textAfter' => '<span>4050</span>'
                ],
                [
                    'textBefore' => 'Продано за месяц',
                    'icon' => './local/assets/images/check.png',
                    'iconAlt' => 'продано',
                    'textAfter' => '<span>8352</span>'
                ]
            ],
            'itemPrice' => '260 ₽'
        ],
        [
            'image' => './local/assets/images/image.png',
            'itemTitle' => '"Шагающая" пружинка слинки - средняя',
            'productInfo' => [
                [
                    'textBefore' => 'В наличии',
                    'icon' => './local/assets/images/check.png',
                    'iconAlt' => 'в наличии',
                    'textAfter' => '<span>4050</span>'
                ],
                [
                    'textBefore' => 'Продано за месяц',
                    'icon' => './local/assets/images/check.png',
                    'iconAlt' => 'продано',
                    'textAfter' => '<span>8352</span>'
                ]
            ],
            'itemPrice' => '260 ₽'
        ],

    ],

    'hitsTitle' => 'Хиты',
    'hitsSubtitle' => 'все хиты',
    'hitsSubtitleLink' => '/new-items',

    'hitItems' => [
        [
            'image' => './local/assets/images/image.png',
            'itemTitle' => '"Шагающая" пружинка слинки - средняя',
            'productInfo' => [
                [
                    'textBefore' => 'В наличии',
                    'icon' => './local/assets/images/check.png',
                    'iconAlt' => 'в наличии',
                    'textAfter' => '<span>4050</span>'
                ],
                [
                    'textBefore' => 'Продано за месяц',
                    'icon' => './local/assets/images/check.png',
                    'iconAlt' => 'продано',
                    'textAfter' => '<span>8352</span>'
                ]
            ],
            'itemPrice' => '280 ₽ <span>230</span>'
        ],

        [
            'image' => './local/assets/images/image.png',
            'itemTitle' => '"Шагающая" пружинка слинки - средняя',
            'productInfo' => [
                [
                    'textBefore' => 'В наличии',
                    'icon' => './local/assets/images/check.png',
                    'iconAlt' => 'в наличии',
                    'textAfter' => '<span>4050</span>'
                ],
                [
                    'textBefore' => 'Продано за месяц',
                    'icon' => './local/assets/images/check.png',
                    'iconAlt' => 'продано',
                    'textAfter' => '<span>8352</span>'
                ]
            ],
            'itemPrice' => '260 ₽'
        ],
        [
            'image' => './local/assets/images/image.png',
            'itemTitle' => '"Шагающая" пружинка слинки - средняя',
            'productInfo' => [
                [
                    'textBefore' => 'В наличии',
                    'icon' => './local/assets/images/check.png',
                    'iconAlt' => 'в наличии',
                    'textAfter' => '<span>4050</span>'
                ],
                [
                    'textBefore' => 'Продано за месяц',
                    'icon' => './local/assets/images/check.png',
                    'iconAlt' => 'продано',
                    'textAfter' => '<span>8352</span>'
                ]
            ],
            'itemPrice' => '260 ₽'
        ],
        [
            'image' => './local/assets/images/image.png',
            'itemTitle' => '"Шагающая" пружинка слинки - средняя',
            'productInfo' => [
                [
                    'textBefore' => 'В наличии',
                    'icon' => './local/assets/images/check.png',
                    'iconAlt' => 'в наличии',
                    'textAfter' => '<span>4050</span>'
                ],
                [
                    'textBefore' => 'Продано за месяц',
                    'icon' => './local/assets/images/check.png',
                    'iconAlt' => 'продано',
                    'textAfter' => '<span>8352</span>'
                ]
            ],
            'itemPrice' => '260 ₽'
        ],
        [
            'image' => './local/assets/images/image.png',
            'itemTitle' => '"Шагающая" пружинка слинки - средняя',
            'productInfo' => [
                [
                    'textBefore' => 'В наличии',
                    'icon' => './local/assets/images/check.png',
                    'iconAlt' => 'в наличии',
                    'textAfter' => '<span>4050</span>'
                ],
                [
                    'textBefore' => 'Продано за месяц',
                    'icon' => './local/assets/images/check.png',
                    'iconAlt' => 'продано',
                    'textAfter' => '<span>8352</span>'
                ]
            ],
            'itemPrice' => '260 ₽'
        ],
        [
            'image' => './local/assets/images/image.png',
            'itemTitle' => '"Шагающая" пружинка слинки - средняя',
            'productInfo' => [
                [
                    'textBefore' => 'В наличии',
                    'icon' => './local/assets/images/check.png',
                    'iconAlt' => 'в наличии',
                    'textAfter' => '<span>4050</span>'
                ],
                [
                    'textBefore' => 'Продано за месяц',
                    'icon' => './local/assets/images/check.png',
                    'iconAlt' => 'продано',
                    'textAfter' => '<span>8352</span>'
                ]
            ],
            'itemPrice' => '260 ₽'
        ],

    ],

]
?>

<?php
$news = [
    'title' => 'Новости',
    'subtitle' => 'все новости',
    'subtitleLink' => '/new-items',

    'items' => [
        [
            'image' => './local/assets/images/news.png',
            'itemTitle' => '16 ноября 2022',
            'itemSubtitle' => 'Розничные магазины Storiz',
        ],
        [
            'image' => './local/assets/images/toys_2.png',
            'itemTitle' => '16 ноября 2022',
            'itemSubtitle' => 'Скидки до 50% на раздел “Игрушки”',
        ],
        [
            'image' => './local/assets/images/design.png',
            'itemTitle' => '16 ноября 2022',
            'itemSubtitle' => 'Дизайн, качество, многообразие – отличительные особенности наших товаров',
        ]
    ]
]
?>

<?php
$viewed = [
    'title' => 'Ранее вы смотрели',
    'items' => [
        [
            'image' => './local/assets/images/image.png',
            'itemTitle' => '"Шагающая" пружинка слинки - средняя',
            'itemPrice' => '180 ₽ <span>180</span>'
        ],
        [
            'image' => './local/assets/images/suit.png',
            'itemTitle' => 'Костюм-Кигуруми "Единорог Звездное небо"',
            'itemPrice' => '890 ₽'
        ],
        [
            'image' => './local/assets/images/set.png',
            'itemTitle' => 'Подарочный набор "K-POP" Stray Kids №5, 8 предметов',
            'itemPrice' => '1 190 ₽'
        ],
        [
            'image' => './local/assets/images/suit.png',
            'itemTitle' => 'Костюм-Кигуруми "Единорог Звездное небо"',
            'itemPrice' => '890 ₽'
        ],
        [
            'image' => './local/assets/images/image.png',
            'itemTitle' => '"Шагающая" пружинка слинки - средняя',
            'itemPrice' => '180 ₽ <span>180</span>'
        ],
        [
            'image' => './local/assets/images/suit.png',
            'itemTitle' => 'Костюм-Кигуруми "Единорог Звездное небо"',
            'itemPrice' => '890 ₽'
        ],
        [
            'image' => './local/assets/images/suit.png',
            'itemTitle' => 'Костюм-Кигуруми "Единорог Звездное небо"',
            'itemPrice' => '890 ₽'
        ],
        [
            'image' => './local/assets/images/image.png',
            'itemTitle' => '"Шагающая" пружинка слинки - средняя',
            'itemPrice' => '180 ₽ <span>180</span>'
        ],
    ]
]
?>

<?php
$text = [
    'title' => 'Оптовый интернет- магазин подарков Storiz',
    'text' => 'Добро пожаловать на сайт оптового интернет-магазина STORIZ — вашего надежного партнёра в мире полезных и качественных товаров. Мы гордимся тем, что предлагаем продукцию с гарантией сертификации и полностью контролируем процесс поставок благодаря собственной логистике, которая начинается непосредственно у производителя. Это позволяет нам исключить лишние звенья и обеспечивать лучшие условия для наших клиентов.
               Все товары находятся на наших складах в Москве, что гарантирует быструю обработку и отправку заказов. Перед отправкой каждая партия проходит тщательную проверку качества на складах в стране производства, чтобы вы получали только проверенные и надёжные позиции. Мы стремимся постоянно обновлять ассортимент, предлагая исключительно востребованные и актуальные товары, что делает сотрудничество с нами выгодным и удобным. <br><br>
               Независимо от того, работаете ли вы с крупным оптом или мелкими партиями, STORIZ всегда готов предоставить выгодные условия и поддержать развитие вашего бизнеса. Мы ценим долгосрочные отношения и всегда открыты для диалога, чтобы учитывать ваши потребности и предлагать оптимальные решения. Благодаря многолетнему опыту и глубокой экспертизе в области оптовых поставок из Китая, мы уверенно занимаем лидирующие позиции на рынке и готовы предложить вам качественный сервис и гибкий подход.',

    'buttonText' => 'Читать полностью'
]
?>

<div class="wrapper">
    <?= $mustache->render('task-slider', $task); ?>
    <?= $mustache->render('task-catalog', $catalog); ?>
    <?= $mustache->render('task-duo', $duo); ?>
    <?= $mustache->render('task-news', $news); ?>
    <?= $mustache->render('task-viewed', $viewed); ?>
    <?= $mustache->render('task-text', $text); ?>
</div>


<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/include/footer.php');
