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
        'bundle-feedback-form',
        'bundle-homepage',
    ]),
    'inlineJs' => collect([]),
    'deferredCss' => collect([]),
    'deferredJs' => collect([
        'bundle-common',
        'bundle-homepage',
        'bundle-feedback-form',
    ]),
    'asyncJs' => collect([]),
];

require_once($_SERVER['DOCUMENT_ROOT'] . '/include/header.php');
?>

<?php

$cards = [
    'cards' => [

        [
            'stock' => 'В наличии',
            'images' => './local/assets/images/icon_normal_fav.png',
            'image' => './local/assets/images/Group.png',
            'title' => 'HYUNDAI HD 78 c промтоварным фургоном....',
            'price' => 'от 352 000',
            'link' => 'Подробнее'
        ],
        [
            'stock' => 'В наличии',
            'images' => './local/assets/images/icon_normal_fav.png',
            'image' => './local/assets/images/Group.png',
            'title' => 'HYUNDAI HD 78 c промтоварным фургоном....',
            'price' => 'от 352 000',
            'link' => 'Подробнее'
        ],
        [
            'stock' => 'В наличии',
            'images' => './local/assets/images/icon_normal_fav.png',
            'image' => './local/assets/images/Group.png',
            'title' => 'HYUNDAI HD 78 c промтоварным фургоном....',
            'price' => 'от 352 000',
            'link' => 'Подробнее'
        ],
        [
            'stock' => 'В наличии',
            'images' => './local/assets/images/icon_normal_fav.png',
            'image' => './local/assets/images/Group.png',
            'title' => 'HYUNDAI HD 78 c промтоварным фургоном....',
            'price' => 'от 352 000',
            'link' => 'Подробнее'
        ],
        [
            'stock' => 'В наличии',
            'images' => './local/assets/images/icon_normal_fav.png',
            'image' => './local/assets/images/Group.png',
            'title' => 'HYUNDAI HD 78 c промтоварным фургоном....',
            'price' => 'от 352 000',
            'link' => 'Подробнее'
        ],
        [
            'stock' => 'В наличии',
            'images' => './local/assets/images/icon_normal_fav.png',
            'image' => './local/assets/images/Group.png',
            'title' => 'HYUNDAI HD 78 c промтоварным фургоном....',
            'price' => 'от 352 000',
            'link' => 'Подробнее'
        ],
        [
            'stock' => 'В наличии',
            'images' => './local/assets/images/icon_normal_fav.png',
            'image' => './local/assets/images/Group.png',
            'title' => 'HYUNDAI HD 78 c промтоварным фургоном....',
            'price' => 'от 352 000',
            'link' => 'Подробнее'
        ],
        [
            'stock' => 'В наличии',
            'images' => './local/assets/images/icon_normal_fav.png',
            'image' => './local/assets/images/Group.png',
            'title' => 'HYUNDAI HD 78 c промтоварным фургоном....',
            'price' => 'от 352 000',
            'link' => 'Подробнее'
        ],
        [
            'stock' => 'В наличии',
            'images' => './local/assets/images/icon_normal_fav.png',
            'image' => './local/assets/images/Group.png',
            'title' => 'HYUNDAI HD 78 c промтоварным фургоном....',
            'price' => 'от 352 000',
            'link' => 'Подробнее'
        ],
        [
            'stock' => 'В наличии',
            'images' => './local/assets/images/icon_normal_fav.png',
            'image' => './local/assets/images/Group.png',
            'title' => 'HYUNDAI HD 78 c промтоварным фургоном....',
            'price' => 'от 352 000',
            'link' => 'Подробнее'
        ],
        [
            'stock' => 'В наличии',
            'images' => './local/assets/images/icon_normal_fav.png',
            'image' => './local/assets/images/Group.png',
            'title' => 'HYUNDAI HD 78 c промтоварным фургоном....',
            'price' => 'от 352 000',
            'link' => 'Подробнее'
        ],
        [
            'stock' => 'В наличии',
            'images' => './local/assets/images/icon_normal_fav.png',
            'image' => './local/assets/images/Group.png',
            'title' => 'HYUNDAI HD 78 c промтоварным фургоном....',
            'price' => 'от 352 000',
            'link' => 'Подробнее'
        ],
        [
            'stock' => 'В наличии',
            'images' => './local/assets/images/icon_normal_fav.png',
            'image' => './local/assets/images/Group.png',
            'title' => 'HYUNDAI HD 78 c промтоварным фургоном....',
            'price' => 'от 352 000',
            'link' => 'Подробнее'
        ],
        [
            'stock' => 'В наличии',
            'images' => './local/assets/images/icon_normal_fav.png',
            'image' => './local/assets/images/Group.png',
            'title' => 'HYUNDAI HD 78 c промтоварным фургоном....',
            'price' => 'от 352 000',
            'link' => 'Подробнее'
        ],
        [
            'stock' => 'В наличии',
            'images' => './local/assets/images/icon_normal_fav.png',
            'image' => './local/assets/images/Group.png',
            'title' => 'HYUNDAI HD 78 c промтоварным фургоном....',
            'price' => 'от 352 000',
            'link' => 'Подробнее'
        ],
        [
            'stock' => 'В наличии',
            'images' => './local/assets/images/icon_normal_fav.png',
            'image' => './local/assets/images/Group.png',
            'title' => 'HYUNDAI HD 78 c промтоварным фургоном....',
            'price' => 'от 352 000',
            'link' => 'Подробнее'
        ],
        [
            'stock' => 'В наличии',
            'images' => './local/assets/images/icon_normal_fav.png',
            'image' => './local/assets/images/Group.png',
            'title' => 'HYUNDAI HD 78 c промтоварным фургоном....',
            'price' => 'от 352 000',
            'link' => 'Подробнее'
        ],
        [
            'stock' => 'В наличии',
            'images' => './local/assets/images/icon_normal_fav.png',
            'image' => './local/assets/images/Group.png',
            'title' => 'HYUNDAI HD 78 c промтоварным фургоном....',
            'price' => 'от 352 000',
            'link' => 'Подробнее'
        ],
        [
            'stock' => 'В наличии',
            'images' => './local/assets/images/icon_normal_fav.png',
            'image' => './local/assets/images/Group.png',
            'title' => 'HYUNDAI HD 78 c промтоварным фургоном....',
            'price' => 'от 352 000',
            'link' => 'Подробнее'
        ],
        [
            'stock' => 'В наличии',
            'images' => './local/assets/images/icon_normal_fav.png',
            'image' => './local/assets/images/Group.png',
            'title' => 'HYUNDAI HD 78 c промтоварным фургоном....',
            'price' => 'от 352 000',
            'link' => 'Подробнее'
        ],
        [
            'stock' => 'В наличии',
            'images' => './local/assets/images/icon_normal_fav.png',
            'image' => './local/assets/images/Group.png',
            'title' => 'HYUNDAI HD 78 c промтоварным фургоном....',
            'price' => 'от 352 000',
            'link' => 'Подробнее'
        ],
        [
            'stock' => 'В наличии',
            'images' => './local/assets/images/icon_normal_fav.png',
            'image' => './local/assets/images/Group.png',
            'title' => 'HYUNDAI HD 78 c промтоварным фургоном....',
            'price' => 'от 352 000',
            'link' => 'Подробнее'
        ],
        [
            'stock' => 'В наличии',
            'images' => './local/assets/images/icon_normal_fav.png',
            'image' => './local/assets/images/Group.png',
            'title' => 'HYUNDAI HD 78 c промтоварным фургоном....',
            'price' => 'от 352 000',
            'link' => 'Подробнее'
        ],
        [
            'stock' => 'В наличии',
            'images' => './local/assets/images/icon_normal_fav.png',
            'image' => './local/assets/images/Group.png',
            'title' => 'HYUNDAI HD 78 c промтоварным фургоном....',
            'price' => 'от 352 000',
            'link' => 'Подробнее'
        ],
        [
            'stock' => 'В наличии',
            'images' => './local/assets/images/icon_normal_fav.png',
            'image' => './local/assets/images/Group.png',
            'title' => 'HYUNDAI HD 78 c промтоварным фургоном....',
            'price' => 'от 352 000',
            'link' => 'Подробнее'
        ],
        [
            'stock' => 'В наличии',
            'images' => './local/assets/images/icon_normal_fav.png',
            'image' => './local/assets/images/Group.png',
            'title' => 'HYUNDAI HD 78 c промтоварным фургоном....',
            'price' => 'от 352 000',
            'link' => 'Подробнее'
        ],
        [
            'stock' => 'В наличии',
            'images' => './local/assets/images/icon_normal_fav.png',
            'image' => './local/assets/images/Group.png',
            'title' => 'HYUNDAI HD 78 c промтоварным фургоном....',
            'price' => 'от 352 000',
            'link' => 'Подробнее'
        ],
        [
            'stock' => 'В наличии',
            'images' => './local/assets/images/icon_normal_fav.png',
            'image' => './local/assets/images/Group.png',
            'title' => 'HYUNDAI HD 78 c промтоварным фургоном....',
            'price' => 'от 352 000',
            'link' => 'Подробнее'
        ],
        [
            'stock' => 'В наличии',
            'images' => './local/assets/images/icon_normal_fav.png',
            'image' => './local/assets/images/Group.png',
            'title' => 'HYUNDAI HD 78 c промтоварным фургоном....',
            'price' => 'от 352 000',
            'link' => 'Подробнее'
        ],
        [
            'stock' => 'В наличии',
            'images' => './local/assets/images/icon_normal_fav.png',
            'image' => './local/assets/images/Group.png',
            'title' => 'HYUNDAI HD 78 c промтоварным фургоном....',
            'price' => 'от 352 000',
            'link' => 'Подробнее'
        ],
    ]
]

?>

<?php

$navigations = [
    'navigation' => [
        'show_more_button' => [
            'text' => 'Показать еще',
        ],

        'arrow_left' => [
            'icon' => '‹', 
            'label' => 'Назад',
            'is_disabled' => false, 
        ],

        'pages' => [
            [
                'text' => '1',
                'is_current' => false, 
                'is_dots' => false,
            ],
            [
                'text' => '...',
                'url' => '#',
                'is_current' => false,
                'is_dots' => true,
            ],
            [
                'text' => '5',
                'url' => '#page5',
                'is_current' => true,
                'is_dots' => false,
            ],
            [
                'text' => '6',
                'url' => '#page6',
                'is_current' => false,
                'is_dots' => false,
            ],
            [
                'text' => '7',
                'url' => '#page7',
                'is_current' => false,
                'is_dots' => false,
            ],
            [
                'text' => '...',
                'url' => '#',
                'is_current' => false,
                'is_dots' => true,
            ],
            [
                'text' => '15',
                'url' => '#page15',
                'is_current' => false,
                'is_dots' => false,
            ],
        ],

        'arrow_right' => [
            'icon' => '›', 
            'label' => 'Дальше',
            'url' => '#', 
            'is_disabled' => false, 
        ],
    ]
];

?>

<?php
$slider = [

    'generalTitle' => 'Похожие товары',

    'slides' => [

        [
            'image' => './local/assets/images/one.png',
            'stock' => 'В наличии',
            'title' => 'HYUNDAI HD 78 c промтоварным фургоном....',
            'link' => 'Подробнее',
            'images' => './local/assets/images/icon_normal_fav.png'
        ],
        [
            'image' => './local/assets/images/one.png',
            'stock' => 'В наличии',
            'title' => 'HYUNDAI HD 78 c промтоварным фургоном....',
            'link' => 'Подробнее',
            'images' => './local/assets/images/icon_normal_fav.png'
        ],
        [
            'image' => './local/assets/images/one.png',
            'stock' => 'В наличии',
            'title' => 'HYUNDAI HD 78 c промтоварным фургоном....',
            'link' => 'Подробнее',
            'images' => './local/assets/images/icon_normal_fav.png'
        ],
        [
            'image' => './local/assets/images/one.png',
            'stock' => 'В наличии',
            'title' => 'HYUNDAI HD 78 c промтоварным фургоном....',
            'link' => 'Подробнее',
            'images' => './local/assets/images/icon_normal_fav.png'
        ],
        [
            'image' => './local/assets/images/one.png',
            'stock' => 'В наличии',
            'title' => 'HYUNDAI HD 78 c промтоварным фургоном....',
            'link' => 'Подробнее',
            'images' => './local/assets/images/icon_normal_fav.png'
        ],
        [
            'image' => './local/assets/images/one.png',
            'stock' => 'В наличии',
            'title' => 'HYUNDAI HD 78 c промтоварным фургоном....',
            'link' => 'Подробнее',
            'images' => './local/assets/images/icon_normal_fav.png'
        ],

    ]
];

?>

<div class="wrapper">
    <?= $mustache->render('cards', $cards); ?>
    <?= $mustache->render('navigation', $navigations); ?>
    <?= $mustache->render('slider', $slider); ?>
</div>

<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/include/footer.php');
