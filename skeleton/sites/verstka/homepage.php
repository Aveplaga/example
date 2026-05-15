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
$hero = [
    'hero__content-title' => 'Nexus',
    'hero__content-subtitle' => 'Персональное онлайн-резюме',
]
?>

<?php
$form = [
    'form__title' => 'Создайте резюме прямо сейчас',
    'dropdown__list' => [
        [
            'dropdown__title' => 'Основная информация',
            'form__dropdown-list' => [
                [
                    'form__dropdown-label' => 'Фамилия <span>*</span>',
                    'form__dropdown-input--type' => 'text',
                    'form__dropdown-input--placeholder' => 'Хмелёв'
                ],
                [
                    'form__dropdown-label' => 'Имя <span>*</span>',
                    'form__dropdown-input--type' => 'text',
                    'form__dropdown-input--placeholder' => 'Владислав'
                ],
                [
                    'form__dropdown-label' => 'Отчество <span>*</span>',
                    'form__dropdown-input--type' => 'text',
                    'form__dropdown-input--placeholder' => 'Алексеевич'
                ],
                [
                    'form__dropdown-label' => 'Телефон <span>*</span>',
                    'form__dropdown-input--type' => 'tel',
                    'form__dropdown-input--placeholder' => 'Ваш номер'
                ],
                [
                    'form__dropdown-label' => 'E-mail <span>*</span>',
                    'form__dropdown-input--type' => 'email',
                    'form__dropdown-input--placeholder' => 'example@gmail.com'
                ],
                [
                    'form__dropdown-label' => 'Должность',
                    'form__dropdown-input--type' => 'text',
                    'form__dropdown-input--placeholder' => 'Программист'
                ],
                [
                    'form__dropdown-label' => 'Желаеммая зарплата',
                    'form__dropdown-input--type' => 'text',
                    'form__dropdown-input--placeholder' => 'Сумма'
                ],
                [
                    'form__dropdown-label' => 'График работы',
                    'form__dropdown-input--type' => 'text',
                    'form__dropdown-input--placeholder' => 'Полный день'
                ],
                [
                    'form__dropdown-label' => 'Готовность к командировкам',
                    'form__dropdown-input--type' => 'text',
                    'form__dropdown-input--placeholder' => 'Готов'
                ],
                [
                    'form__dropdown-label' => 'Занятость',
                    'form__dropdown-input--type' => 'text',
                    'form__dropdown-input--placeholder' => 'Стажировка'
                ],
            ]
        ],
        [
            'dropdown__title' => 'Образование',
            'form__dropdown-list' => [
                [
                    'form__dropdown-label' => 'Учебное заведение',
                    'form__dropdown-input--type' => 'text',
                    'form__dropdown-input--placeholder' => 'Введите название'
                ],
                [
                    'form__dropdown-label' => 'Факультет',
                    'form__dropdown-input--type' => 'text',
                    'form__dropdown-input--placeholder' => 'Введите название'
                ],
                [
                    'form__dropdown-label' => 'Специальность',
                    'form__dropdown-input--type' => 'text',
                    'form__dropdown-input--placeholder' => 'Введите название'
                ],
                [
                    'form__dropdown-label' => 'Год окончания обучения',
                    'form__dropdown-input--type' => 'number',
                    'form__dropdown-input--placeholder' => '2023'
                ],
                [
                    'form__dropdown-label' => 'Форма обучения',
                    'form__dropdown-input--type' => 'text',
                    'form__dropdown-input--placeholder' => 'Введите название'
                ],
            ]
        ],
        [
            'dropdown__title' => 'Опыт работы',
            'form__dropdown-list' => [
                [
                    'form__dropdown-label' => 'Организация',
                    'form__dropdown-input--type' => 'text',
                    'form__dropdown-input--placeholder' => 'Введите название'
                ],
                [
                    'form__dropdown-label' => 'Должность',
                    'form__dropdown-input--type' => 'text',
                    'form__dropdown-input--placeholder' => 'Введите название'
                ],
                [
                    'form__dropdown-label' => 'Устроился',
                    'form__dropdown-input--type' => 'text',
                    'form__dropdown-input--placeholder' => 'Введите год и месяц'
                ],
                [
                    'form__dropdown-label' => 'Уволился',
                    'form__dropdown-input--type' => 'text',
                    'form__dropdown-input--placeholder' => 'Введите год и месяц'
                ],
            ]
        ],
    ]
]
?>



<?= $mustache->render('hero', $hero); ?>
<?= $mustache->render('form', $form); ?>
<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/include/footer.php');
