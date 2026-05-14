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
$about = [
    'about__title' => 'О компании в цифрах',
    'about__list' => [
        [
            'about__item-title' => '8',
            'about__item-subtitle' => 'лет на рынке туристических услуг'
        ],
        [
            'about__item-title' => '4',
            'about__item-subtitle' => 'офиса продаж по России'
        ],
        [
            'about__item-title' => '28',
            'about__item-subtitle' => 'штатных сотрудников '
        ],
        [
            'about__item-title' => '17 000',
            'about__item-subtitle' => 'довольных клиентов'
        ],
        [
            'about__item-title' => '6',
            'about__item-subtitle' => 'лет — средний опыт работы специалистов'
        ],
        [
            'about__item-title' => '%',
            'about__item-subtitle' => 'Программа лояльности для постоянных клиентов'
        ],
    ]
]
?>

<section class="reviews">
    <div class="reviews__container container">
        <div class="reviews__top">
            <div class="reviews__top-title">{{reviews__top-title}}</div>

            <div class="reviews__navigation">
                <button class="reviews__navigation-button reviews__navigation-button--prev">
                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.75 10.59L5.11437 6L9.75 1.41L8.32287 0L2.25 6L8.32287 12L9.75 10.59Z" fill="currentColor" />
                    </svg>

                </button>
                <button class="reviews__navigation-button reviews__navigation-button--next">
                    <svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.00682e-08 10.59L4.63563 6L9.00682e-08 1.41L1.42713 0L7.5 6L1.42713 12L9.00682e-08 10.59Z" fill="currentColor" />
                    </svg>
                </button>
            </div>
        </div>

        <div class="reviews__slider swiper">
            <div class="reviews__wrapper swiper-wrapper">
                {{#reviews__slides}}
                    <div class="reviews__slide swiper-slide">
                        <div class="reviews__slide-top">
                            
                        </div>
                    </div>
                {{/reviews__slides}}
            </div>
        </div>
    </div>
</section>

<div class="wrapper">
    <?= $mustache->render('about', $about); ?>
</div>



<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/include/footer.php');
