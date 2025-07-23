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
        'bundle-test-task',
    ]),
    'inlineJs' => collect([]),
    'deferredCss' => collect([]),
    'deferredJs' => collect([
        'bundle-common',
        'bundle-homepage',
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

    'items' => [
        [
            'image' => './local/assets/images/image.png',
            'itemTitle' => '"Шагающая" пружинка слинки - средняя',
            'productInfo' => [
                [
                    'textBefore' => 'В наличии',
                    'icon' => './local/assets/images/check.png',
                    'iconAlt' => 'в наличии',
                    'textAfter' => '4050'
                ],
                [
                    'textBefore' => 'Продано за месяц',
                    'icon' => './local/assets/images/check.png',
                    'iconAlt' => 'продано',
                    'textAfter' => '8352'
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
                    'textAfter' => '4050'
                ],
                [
                    'textBefore' => 'Продано за месяц',
                    'icon' => './local/assets/images/check.png',
                    'iconAlt' => 'продано',
                    'textAfter' => '8352'
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
                    'textAfter' => '4050'
                ],
                [
                    'textBefore' => 'Продано за месяц',
                    'icon' => './local/assets/images/check.png',
                    'iconAlt' => 'продано',
                    'textAfter' => '8352'
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
                    'textAfter' => '4050'
                ],
                [
                    'textBefore' => 'Продано за месяц',
                    'icon' => './local/assets/images/check.png',
                    'iconAlt' => 'продано',
                    'textAfter' => '8352'
                ]
            ],
            'itemPrice' => '260 ₽'
        ],

    ],

    'hitsTitle' => 'Хиты',
    'hitsSubtitle' => 'все хиты',

    'items' => [
        [
            'image' => './local/assets/images/image.png',
            'itemTitle' => '"Шагающая" пружинка слинки - средняя',
            'productInfo' => [
                [
                    'textBefore' => 'В наличии',
                    'icon' => './local/assets/images/check.png',
                    'iconAlt' => 'в наличии',
                    'textAfter' => '4050'
                ],
                [
                    'textBefore' => 'Продано за месяц',
                    'icon' => './local/assets/images/check.png',
                    'iconAlt' => 'продано',
                    'textAfter' => '8352'
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
                    'textAfter' => '4050'
                ],
                [
                    'textBefore' => 'Продано за месяц',
                    'icon' => './local/assets/images/check.png',
                    'iconAlt' => 'продано',
                    'textAfter' => '8352'
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
                    'textAfter' => '4050'
                ],
                [
                    'textBefore' => 'Продано за месяц',
                    'icon' => './local/assets/images/check.png',
                    'iconAlt' => 'продано',
                    'textAfter' => '8352'
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
                    'textAfter' => '4050'
                ],
                [
                    'textBefore' => 'Продано за месяц',
                    'icon' => './local/assets/images/check.png',
                    'iconAlt' => 'продано',
                    'textAfter' => '8352'
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

<div class="wrapper">
    <!-- <?= $mustache->render('task-slider', $task); ?> -->
    <?= $mustache->render('task-catalog', $catalog); ?>
    <!-- <?= $mustache->render('task-duo', $duo); ?> -->
    <?= $mustache->render('task-news', $news); ?>
</div>

<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/include/footer.php');
