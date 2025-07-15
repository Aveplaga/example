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
        'bundle-test-task',
    ]),
    'inlineJs' => collect([]),
    'deferredCss' => collect([]),
    'deferredJs' => collect([
        'bundle-common',
        'bundle-homepage',
        'bundle-feedback-form',
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

<div class="wrapper">
    <?= $mustache->render('task-slider', $task); ?>
</div>

<script src="/local/assets/dev/bundle-test-task/bundle-test-task.js"></script>

<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/include/footer.php');
