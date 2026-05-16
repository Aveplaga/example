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

<?php
$reviews = [
    'reviews__top-title' => 'Отзывы туристов',
    'reviews__slides' => [
        [
            'reviews__slide-image' => './local/assets/images/',
            'reviews__slide-title' => 'Анна Цуканова-Котт',
            'reviews__slide-contact--title' => '@anna_tsukanova_kott',

            'reviews__slide-subtitle' => 'Ура! Глава нашего семейства @akottttt наконец-то долетел до нас! Правда, всего лишь на 5 дней, но всё равно мы очень рады! Наши графики редко совпадают, чтобы вместе полноценно отдохнуть с детьми! Сейчас, когда у меня отпуск, у Саши как раз активный рабочий период... Хочу поблагодарить нашу знакомую @portnyagina_olesya и ее компанию @asiago.ru, которые смогли организовать приезд мужа быстро, комфортно и в срок! Ребята, занимаются всем! От покупобилетови трансфера до организации туристических необычных программ и Путешествий! А у вас как обстоят дела...',
            'reviews__slide-button--expand' => 'Отзыв полностью',
            'reviews__slide-button--screenshot' => 'Скриншот отзыва'
        ],
        [
            'reviews__slide-image' => './local/assets/images/',
            'reviews__slide-title' => 'Анна Цуканова-Котт',
            'reviews__slide-contact--title' => '@anna_tsukanova_kott',

            'reviews__slide-subtitle' => 'Ура! Глава нашего семейства @akottttt наконец-то долетел до нас! Правда, всего лишь на 5 дней, но всё равно мы очень рады! Наши графики редко совпадают, чтобы вместе полноценно отдохнуть с детьми! Сейчас, когда у меня отпуск, у Саши как раз активный рабочий период... Хочу поблагодарить нашу знакомую @portnyagina_olesya и ее компанию @asiago.ru, которые смогли организовать приезд мужа быстро, комфортно и в срок! Ребята, занимаются всем! От покупобилетови трансфера до организации туристических необычных программ и Путешествий! А у вас как обстоят дела...',
            'reviews__slide-button--expand' => 'Отзыв полностью',
            'reviews__slide-button--screenshot' => 'Скриншот отзыва'
        ],
        [
            'reviews__slide-image' => './local/assets/images/',
            'reviews__slide-title' => 'Анна Цуканова-Котт',
            'reviews__slide-contact--title' => '@anna_tsukanova_kott',

            'reviews__slide-subtitle' => 'Ура! Глава нашего семейства @akottttt наконец-то долетел до нас! Правда, всего лишь на 5 дней, но всё равно мы очень рады! Наши графики редко совпадают, чтобы вместе полноценно отдохнуть с детьми! Сейчас, когда у меня отпуск, у Саши как раз активный рабочий период... Хочу поблагодарить нашу знакомую @portnyagina_olesya и ее компанию @asiago.ru, которые смогли организовать приезд мужа быстро, комфортно и в срок! Ребята, занимаются всем! От покупобилетови трансфера до организации туристических необычных программ и Путешествий! А у вас как обстоят дела...',
            'reviews__slide-button--expand' => 'Отзыв полностью',
            'reviews__slide-button--screenshot' => 'Скриншот отзыва'
        ],
        [
            'reviews__slide-image' => './local/assets/images/',
            'reviews__slide-title' => 'Анна Цуканова-Котт',
            'reviews__slide-contact--title' => '@anna_tsukanova_kott',

            'reviews__slide-subtitle' => 'Ура! Глава нашего семейства @akottttt наконец-то долетел до нас! Правда, всего лишь на 5 дней, но всё равно мы очень рады! Наши графики редко совпадают, чтобы вместе полноценно отдохнуть с детьми! Сейчас, когда у меня отпуск, у Саши как раз активный рабочий период... Хочу поблагодарить нашу знакомую @portnyagina_olesya и ее компанию @asiago.ru, которые смогли организовать приезд мужа быстро, комфортно и в срок! Ребята, занимаются всем! От покупобилетови трансфера до организации туристических необычных программ и Путешествий! А у вас как обстоят дела...',
            'reviews__slide-button--expand' => 'Отзыв полностью',
            'reviews__slide-button--screenshot' => 'Скриншот отзыва'
        ],
    ]
]
?>

<div class="wrapper">
    <?= $mustache->render('about', $about); ?>
    <?= $mustache->render('reviews', $reviews); ?>
</div>



<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/include/footer.php');
