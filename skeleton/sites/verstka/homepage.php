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
            'image' => '',
            'imageAlt' => 'Для дома'
        ],
        [
            'title' => 'Новый Год',
            'image' => './local/assets/images/new_year.png',
            'imageAlt' => 'Новый год'
        ],

    ]
]
?>

<div class="wrapper">
    <?= $mustache->render('task-slider', $task); ?>
    <?= $mustache->render('task-catalog', $catalog); ?>
</div>

<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/include/footer.php');
