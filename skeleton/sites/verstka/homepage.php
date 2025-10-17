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

$product = [

    'links' => [
        ['link' => 'Home'],
        ['link' => 'Shop'],
        ['link' => 'Men'],
        ['link' => 'T-shirts'],
    ],

    'images' => [
        ['image' => './local/assets/images/before-t-shirts.png'],
        ['image' => './local/assets/images/t-shirt-butt.png'],
        ['image' => './local/assets/images/men.png'],
    ],

    'main_image' => './local/assets/images/before-t-shirts.png',
    'title' => 'One Life Graphic T-shirt',

    'stars' => [
        ['star' => 1],
        ['star' => 2],
        ['star' => 3],
        ['star' => 4],
        ['star' => 5],
    ],

    'rating' => '4.5/<span class="content__span">5</span>',
    'price' => '$260 <span class="span__discount">$300</span>',
    'discount' => '-40%',
    'subText' => 'This graphic t-shirt which is perfect for any occasion. Crafted from a soft and breathable fabric, it offers superior comfort and style.',
    'colorTitle' => 'Select Colors',

    'colors' => [
        ['color' => 'rgba(79, 70, 49, 1)', 'selector' => true],
        ['color' => 'rgba(49, 79, 74, 1)', 'selector' => false],
        ['color' => 'rgba(49, 52, 79, 1)', 'selector' => false],
    ],

    'sizeTitle' => 'Choose Size',

    'buttons' => [
        ['button' => 'Small'],
        ['button' => 'Medium'],
        ['button' => 'Large'],
        ['button' => 'X-Large'],
    ],

    'counterButton' => '1',
    'purchaseButton' => 'Add to Cart',
]

?>

<?php

$rating = [

    'links' => [
        ['link' => 'Product Details'],
        ['link' => 'Rating & Reviews'],
        ['link' => 'FAQs'],
    ],

    'allTitle' => 'All Reviews <span>(451)</span>',
    'buttonText' => 'Latest',
    'buttonSubtext' => 'Write a Review',

    'reviews' => [
        [
            'stars' => [
                ['star' => 1],
                ['star' => 2],
                ['star' => 3],
                ['star' => 4],
                ['star' => 5],
            ],
            'name' => 'Samantha D.',
            'subtext' => '"I absolutely love this t-shirt! The design is unique and the fabric feels so comfortable. As a fellow designer, I appreciate the attention to detail. It-s become my favorite go-to shirt."',
            'data' => 'Posted on August 14, 2023',
        ],
        [
            'stars' => [
                ['star' => 1],
                ['star' => 2],
                ['star' => 3],
                ['star' => 4],
            ],
            'name' => 'Alex M.',
            'subtext' => '"The t-shirt exceeded my expectations! The colors are vibrant and the print quality is top-notch. Being a UI/UX designer myself, Im quite picky about aesthetics, and this t-shirt definitely gets a thumbs up from me."',
            'data' => 'Posted on August 15, 2023',
        ],
        [
            'stars' => [
                ['star' => 1],
                ['star' => 2],
                ['star' => 3],
                ['star' => 4],
            ],
            'name' => 'Ethan R.',
            'subtext' => '"This t-shirt is a must-have for anyone who appreciates good design. The minimalistic yet stylish pattern caught my eye, and the fit is perfect. I can see the designers touch in every aspect of this shirt."',
            'data' => 'Posted on August 16, 2023',
        ],
        [
            'stars' => [
                ['star' => 1],
                ['star' => 2],
                ['star' => 3],
                ['star' => 4],
            ],
            'name' => 'Olivia P.',
            'subtext' => '"As a UI/UX enthusiast, I value simplicity and functionality. This t-shirt not only represents those principles but also feels great to wear. Its evident that the designer poured their creativity into making this t-shirt stand out."',
            'data' => 'Posted on August 17, 2023',
        ],
        [
            'stars' => [
                ['star' => 1],
                ['star' => 2],
                ['star' => 3],
                ['star' => 4],
            ],
            'name' => 'Liam K.',
            'subtext' => '"This t-shirt is a fusion of comfort and creativity. The fabric is soft, and the design speaks volumes about the designers skill. Its like wearing a piece of art that reflects my passion for both design and fashion."',
            'data' => 'Posted on August 18, 2023',
        ],
        [
            'stars' => [
                ['star' => 1],
                ['star' => 2],
                ['star' => 3],
                ['star' => 4],
                ['star' => 5],
            ],
            'name' => 'Ava H.',
            'subtext' => '"Im not just wearing a t-shirt; Im wearing a piece of design philosophy. The intricate details and thoughtful layout of the design make this shirt a conversation starter."',
            'data' => 'Posted on August 19, 2023',
        ],
    ],

    'titleButton' => 'Load More Reviews',
]

?>

<?php
$recommendations = [

    'title' => 'You might also like',

    'cards' => [
        [
            'image' => './local/assets/images/contrast-trims.png',
            'itemTitle' => 'Polo with Contrast Trims',
            'stars' => [
                ['star' => 1],
                ['star' => 2],
                ['star' => 3],
                ['star' => 4],
            ],
            'estimation' => '4.0/<span>5</span>',
            'price' => '$212 <span>$242</span>',
            'sale' => '-20%',
        ],
        [
            'image' => './local/assets/images/graphic-t-shirt.png',
            'itemTitle' => 'Gradient Graphic T-shirt',
            'stars' => [
                ['star' => 1],
                ['star' => 2],
                ['star' => 3],
            ],
            'estimation' => '3.5/<span>5</span>',
            'price' => '$145<span></span>',
        ],
        [
            'image' => './local/assets/images/tipping-details.png',
            'itemTitle' => 'Polo with Tipping Details',
            'stars' => [
                ['star' => 1],
                ['star' => 2],
                ['star' => 3],
                ['star' => 4],
            ],
            'estimation' => '4.5/<span>5</span>',
            'price' => '$180<span></span>',
        ],
        [
            'image' => './local/assets/images/striped-t-shirt.png',
            'itemTitle' => 'Black Striped T-shirt',
            'stars' => [
                ['star' => 1],
                ['star' => 2],
                ['star' => 3],
                ['star' => 4],
                ['star' => 5],
            ],
            'estimation' => '5.0/<span>5</span>',
            'price' => '$120<span>$150</span>',
            'sale' => '-30%',
        ],
    ],

    'newsletterTitle' => 'STAY UPTO DATE ABOUT OUR LATEST OFFERS',
    'formText' => 'Subscribe to Newsletter'

]

?>

<?php
$newsletter = [
    'newsletterTitle' => 'STAY UPTO DATE ABOUT OUR LATEST OFFERS',
    'formText' => 'Subscribe to Newsletter'
]
?>

<div class="wrapper">
    <?= $mustache->render('product', $product); ?>
    <?= $mustache->render('rating', $rating); ?>
    <?= $mustache->render('recommendations', $recommendations); ?>
    <?= $mustache->render('newsletter', $newsletter); ?>

</div>


<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/include/footer.php');
