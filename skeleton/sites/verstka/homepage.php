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
        [   'background' => './local/assets/images/Bell-Lamp.png',
            'titleDesktop' => 'Bell Lamp',
            'description' => 'A modern lamp with a sleek bell-shaped design, crafted from premium materials. 
                              It adds warmth and style to any room, making it a perfect fit for contemporary interiors.',
            'link' => '#products',
            'titleLink' => 'Shop Now',
        ],
        [
            'background' => './local/assets/images/laser.png',
            'titleDesktop' => 'Laser Model',
            'description' => 'A sleek 3D laser-cut model with precise details and modern design. Made from high-quality materials, perfect for any contemporary space.',
            'link' => '#products',
            'titleLink' => 'Shop Now',
        ],
    ]
]
?>

<?php
$info = [
    'title' => 'simple & minimalist',
    'subText' => 'Modern and minimalist design crafted from high-quality materials. Stylish, versatile, and functional, it adds subtle elegance and warmth to any space. Perfect for contemporary interiors, it blends seamlessly with your home or workspace while enhancing everyday comfort.',
]
?>



<?php
$products = [
    'links' => [
        ['link' => 'All'],
        ['link' => 'Chair'],
        ['link' => 'Table'],
        ['link' => 'Home decor'],
        ['link' => 'Lighting'],
    ],

    'cards' => [
        [
            'image' => './local/assets/images/chair.png',
            'title' => 'Le Parc Minotti Chair',
            'price' => '€169.00',
            'category' => 'chair',
        ],
        [
            'image' => './local/assets/images/eiffel.png',
            'title' => 'Dsr Eiffel Chair',
            'discount' => '€115.00',
            'price' => '€137.00',
            'category' => 'chair',
        ],
        [
            'image' => './local/assets/images/lights.png',
            'title' => 'Pendant Lights',
            'price' => '€245.00',
            'category' => 'lighting',
        ],
        [
            'image' => './local/assets/images/laser.png',
            'title' => '3D Laser Cut Model ',
            'discount' => '€125.00',
            'price' => '€185.00',
            'category' => 'home decor',
        ],
        [
            'image' => './local/assets/images/ton.png',
            'title' => 'Ton Chair',
            'price' => '€169.00',
            'category' => 'chair',
        ],
        [
            'image' => './local/assets/images/Bell-Lamp.png',
            'title' => 'Bell Lamp',
            'price' => '€124.00',
            'category' => 'lighting',
        ],
        [
            'image' => './local/assets/images/chair.png',
            'title' => 'Le Parc Minotti Chair',
            'price' => '€169.00',
            'category' => 'chair',
        ],
        [
            'image' => './local/assets/images/pendant.png',
            'title' => 'Leukon Pendant lamp',
            'discount' => '€125.00',
            'price' => '€185.00',
            'category' => 'lamp',
        ],
        [
            'image' => './local/assets/images/chair.png',
            'title' => 'Le Parc Minotti Chair',
            'price' => '€169.00',
            'category' => 'chair',
        ],
        [
            'image' => './local/assets/images/chair.png',
            'title' => 'Le Parc Minotti Chair',
            'price' => '€169.00',
            'category' => 'chair',
        ],
       [
            'image' => './local/assets/images/chair.png',
            'title' => 'Le Parc Minotti Chair',
            'price' => '€169.00',
            'category' => 'chair',
        ],
        [
            'image' => './local/assets/images/chair.png',
            'title' => 'Le Parc Minotti Chair',
            'price' => '€169.00',
            'category' => 'chair',
        ],
        [
            'image' => './local/assets/images/chair.png',
            'title' => 'Le Parc Minotti Chair',
            'price' => '€169.00',
            'category' => 'chair',
        ],
        [
            'image' => './local/assets/images/chair.png',
            'title' => 'Le Parc Minotti Chair',
            'price' => '€169.00',
            'category' => 'chair',
        ],
        [
            'image' => './local/assets/images/chair.png',
            'title' => 'Le Parc Minotti Chair',
            'price' => '€169.00',
            'category' => 'chair',
        ],
        [
            'image' => './local/assets/images/chair.png',
            'title' => 'Le Parc Minotti Chair',
            'price' => '€169.00',
            'category' => 'chair',
        ],
        [
            'image' => './local/assets/images/chair.png',
            'title' => 'Le Parc Minotti Chair',
            'price' => '€169.00',
            'category' => 'chair',
        ],
    ],

    'button' => 'Load More',
]
?>


<div class="wrapper">
    <?= $mustache->render('section', $section); ?>
    <?= $mustache->render('info', $info); ?>
    <?= $mustache->render('products', $products); ?>
</div>


<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/include/footer.php');
