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
    'hero__title' => 'Nexus for <br> <span>resume</span>'
]
?>

<?php
$resume = [
    'resume__title' => 'Создайте резюме прямо сейчас',
    'resume__items' => [
        [
            'resume__item-number' => '01',
            'resume__item-title' => 'Основная информация',
            'accrodion__items' => [
                [
                    'faccrodion__label' => 'Фамилия <span>*</span>',
                    'accrodion__input-type' => 'text',
                    'accrodion__input-placeholder' => 'Хмелёв'
                ],
                [
                    'faccrodion__label' => 'Имя <span>*</span>',
                    'accrodion__input-type' => 'text',
                    'accrodion__input-placeholder' => 'Владислав'
                ],
                [
                    'faccrodion__label' => 'Отчество <span>*</span>',
                    'accrodion__input-type' => 'text',
                    'accrodion__input-placeholder' => 'Алексеевич'
                ],
                [
                    'faccrodion__label' => 'Телефон <span>*</span>',
                    'accrodion__input-type' => 'tel',
                    'accrodion__input-placeholder' => 'Ваш номер'
                ],
                [
                    'faccrodion__label' => 'E-mail <span>*</span>',
                    'accrodion__input-type' => 'email',
                    'accrodion__input-placeholder' => 'example@gmail.com'
                ],
                [
                    'faccrodion__label' => 'Должность',
                    'accrodion__input-type' => 'text',
                    'accrodion__input-placeholder' => 'Программист'
                ],
                [
                    'faccrodion__label' => 'Желаемая зарплата',
                    'accrodion__input-type' => 'number',
                    'accrodion__input-placeholder' => 'Сумма'
                ],
                [
                    'faccrodion__label' => 'График работы',
                    'accrodion__input-type' => 'text',
                    'accrodion__input-placeholder' => 'Полный день'
                ],
                [
                    'faccrodion__label' => 'Готовность к командировкам',
                    'accrodion__input-type' => 'text',
                    'accrodion__input-placeholder' => 'Готов'
                ],
                [
                    'faccrodion__label' => 'Занятость',
                    'accrodion__input-type' => 'text',
                    'accrodion__input-placeholder' => 'Стажировка'
                ],
            ]
        ],
        [
            'resume__item-number' => '02',
            'resume__item-title' => 'Образование',
            'accrodion__items' => [
                [
                    'faccrodion__label' => 'Учебное заведение',
                    'accrodion__input-type' => 'text',
                    'accrodion__input-placeholder' => 'Введите название'
                ],
                [
                    'faccrodion__label' => 'Факультет',
                    'accrodion__input-type' => 'text',
                    'accrodion__input-placeholder' => 'Введите название'
                ],
                [
                    'faccrodion__label' => 'Специальность',
                    'accrodion__input-type' => 'text',
                    'accrodion__input-placeholder' => 'Введите название'
                ],
                [
                    'faccrodion__label' => 'Год окончания обучения',
                    'accrodion__input-type' => 'number',
                    'accrodion__input-placeholder' => '2023'
                ],
                [
                    'faccrodion__label' => 'Форма обучения',
                    'accrodion__input-type' => 'text',
                    'accrodion__input-placeholder' => 'Введите название'
                ],
            ]
        ],
        [
            'resume__item-number' => '03',
            'resume__item-title' => 'Навыки',
            'accrodion__items' => [
                [
                    'faccrodion__label' => 'Профессиональные навыки',
                    'accrodion__input-type' => 'text',
                    'accrodion__input-placeholder' => 'JavaScript, PHP, Figma'
                ],
                [
                    'faccrodion__label' => 'Языки программирования',
                    'accrodion__input-type' => 'text',
                    'accrodion__input-placeholder' => 'Python, Java, C++'
                ],
                [
                    'faccrodion__label' => 'Инструменты и технологии',
                    'accrodion__input-type' => 'text',
                    'accrodion__input-placeholder' => 'Git, Docker, Webpack'
                ],
                [
                    'faccrodion__label' => 'Иностранные языки',
                    'accrodion__input-type' => 'text',
                    'accrodion__input-placeholder' => 'Английский — B2'
                ],
                [
                    'faccrodion__label' => 'Дополнительные навыки',
                    'accrodion__input-type' => 'text',
                    'accrodion__input-placeholder' => 'Управление командой'
                ],
            ]
        ]
    ],

    'resume__consent-text' => ' Я соглашаюсь с <a href="#">политикой конфиденциальности</a> и даю согласие на обработку персональных данных',
    'resume__button-info' => 'Скачать резюме'
]
?>

<?php
$disclosure = [
    'disclosure__title' => 'Задаваемые вопросы',
    'disclosure__items' => [
        [
            'disclosure__item-number' => '01',
            'disclosure__item-title' => 'Сервис действительно бесплатный?',
            'disclosure__item-subtitle' => 'Да, создание и скачивание резюме полностью бесплатно. Без скрытых платежей и пробных периодов — вы можете создать сколько угодно резюме без ограничений.'
        ],
        [
            'disclosure__item-number' => '02',
            'disclosure__item-title' => 'В каком формате сохраняется файл?',
            'disclosure__item-subtitle' => 'Резюме сохраняется в формате PDF. Это универсальный формат, который корректно отображается на любом устройстве и принимается всеми работодателями и HR-системами.'
        ],
        [
            'disclosure__item-number' => '03',
            'disclosure__item-title' => 'Что писать если у меня нет опыта работы?',
            'disclosure__item-subtitle' => 'Сделайте акцент на образовании, курсах, стажировках, волонтёрстве и личных проектах. Расскажите о навыках, достижениях в учёбе и мотивации — работодатели ценят потенциал не меньше опыта.'
        ],
        [
            'disclosure__item-number' => '04',
            'disclosure__item-title' => 'Безопасно хранить у вас данные?',
            'disclosure__item-subtitle' => 'Абсолютно. Мы используем шифрование данных и не передаём вашу информацию третьим лицам. Вы можете удалить своё резюме и все данные из аккаунта в любой момент.'
        ],
    ]
]
?>

<div class="wrapper">
    <?= $mustache->render('hero', $hero); ?>
    <?= $mustache->render('resume', $resume); ?>
    <?= $mustache->render('disclosure', $disclosure); ?>
</div>


<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/include/footer.php');
