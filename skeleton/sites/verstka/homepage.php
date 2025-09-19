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
        'bundle-practice',
    ]),
    'inlineJs' => collect([]),
    'deferredCss' => collect([]),
    'deferredJs' => collect([
        'bundle-common',
        'bundle-practice',
        'bundle-homepage',
    ]),
    'asyncJs' => collect([]),
];

require_once($_SERVER['DOCUMENT_ROOT'] . '/include/header.php');
?>

<?php
$section = [
    'slides' => [
        [
            'background' => './local/assets/images/awesome.png',
            'title' => 'awesome bell lamp',
            'hidden' => 'Bell Lamp',
            'description' => 'A modern lamp with a sleek bell-shaped design, crafted from premium materials. 
                              It adds warmth and style to any room, making it a perfect fit for contemporary interiors.',
            'text' => 'shop now',
        ],
        [
            'background' => './local/assets/images/awesome.png',
            'title' => 'awesome bell lamp',
            'hidden' => 'Bell Lamp',
            'description' => 'A modern lamp with a sleek bell-shaped design, crafted from premium materials. 
                              It adds warmth and style to any room, making it a perfect fit for contemporary interiors.',
            'text' => 'shop now',
        ],
        [
            'background' => './local/assets/images/awesome.png',
            'title' => 'awesome bell lamp',
            'hidden' => 'Bell Lamp',
            'description' => 'A modern lamp with a sleek bell-shaped design, crafted from premium materials. 
                              It adds warmth and style to any room, making it a perfect fit for contemporary interiors.',
            'text' => 'shop now',
        ],
    ]
]
?>

<?php
$products = [
    'links' => [
        ['link' => 'all'],
        ['link' => 'chair'],
        ['link' => 'table'],
        ['link' => 'home decor'],
        ['link' => 'lighting'],
    ],

    'cards' => [
        [   'image' => './local/assets/images/chair.png',
            'title' => 'le parc minotti chair',
            'price' => '€169.00',
            'purchase' => 'Purchase',
        ],
        [   'image' => './local/assets/images/chair.png',
            'title' => 'le parc minotti chair',
            'price' => '€169.00',
            'purchase' => 'Purchase',
        ],
        [   'image' => './local/assets/images/chair.png',
            'title' => 'le parc minotti chair',
            'price' => '€169.00',
            'purchase' => 'Purchase',
        ],
        [   'image' => './local/assets/images/chair.png',
            'title' => 'le parc minotti chair',
            'price' => '€169.00',
            'purchase' => 'Purchase',
        ],
        [   'image' => './local/assets/images/chair.png',
            'title' => 'le parc minotti chair',
            'price' => '€169.00',
            'purchase' => 'Purchase',
        ],
        [   'image' => './local/assets/images/chair.png',
            'title' => 'le parc minotti chair',
            'price' => '€169.00',
            'purchase' => 'Purchase',
        ],
        [   'image' => './local/assets/images/chair.png',
            'title' => 'le parc minotti chair',
            'price' => '€169.00',
            'purchase' => 'Purchase',
        ],
        [   'image' => './local/assets/images/chair.png',
            'title' => 'le parc minotti chair',
            'price' => '€169.00',
            'purchase' => 'Purchase',
        ],
        [   'image' => './local/assets/images/chair.png',
            'title' => 'le parc minotti chair',
            'price' => '€169.00',
            'purchase' => 'Purchase',
        ],
        [   'image' => './local/assets/images/chair.png',
            'title' => 'le parc minotti chair',
            'price' => '€169.00',
            'purchase' => 'Purchase',
        ],
        [   'image' => './local/assets/images/chair.png',
            'title' => 'le parc minotti chair',
            'price' => '€169.00',
            'purchase' => 'Purchase',
        ],
        [   'image' => './local/assets/images/chair.png',
            'title' => 'le parc minotti chair',
            'price' => '€169.00',
            'purchase' => 'Purchase',
        ],
        [   'image' => './local/assets/images/chair.png',
            'title' => 'le parc minotti chair',
            'price' => '€169.00',
            'purchase' => 'Purchase',
        ],
        [   'image' => './local/assets/images/chair.png',
            'title' => 'le parc minotti chair',
            'price' => '€169.00',
            'purchase' => 'Purchase',
        ],
        [   'image' => './local/assets/images/chair.png',
            'title' => 'le parc minotti chair',
            'price' => '€169.00',
            'purchase' => 'Purchase',
        ],
        [   'image' => './local/assets/images/chair.png',
            'title' => 'le parc minotti chair',
            'price' => '€169.00',
            'purchase' => 'Purchase',
        ],       
    ],

    'button' => 'load more',
]
?>

<div class="wrapper">
    <?= $mustache->render('section', $section); ?>
    <?= $mustache->render('products', $products); ?>
</div>


<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/include/footer.php');
