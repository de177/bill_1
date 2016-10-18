<?php

use yii\widgets\Menu;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
?>

<h1> Мы на главной странице</h1>


<?= Menu::widget([
    'items' => [
// Important: you need to specify url as 'controller/action',
// not just as 'controller' even if default action is used.
    ['label' => 'Home', 'url' => ['site/index']],
// 'Products' menu item will be selected as long as the route is 'product/index'
    ['label' => 'Products', 'url' => ['product/index'], 'items' => [
    ['label' => 'New Arrivals', 'url' => ['product/index', 'tag' => 'new']],
    ['label' => 'Most Popular', 'url' => ['product/index', 'tag' => 'popular']],
    ]],
    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
    ],

    'options' => ['tag' => 'div', 'class' => 'list-group'], // обертка вместо <ul>
    'itemOptions' => ['tag'=> 'a', 'class'=> 'list-group-item'],
    'linkTemplate' => '{label}'
]);

?>



<?php

    NavBar::begin([
        'brandLabel' => 'Yii Navbar',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
        'class' => 'navbar-default'
                    ],
    ]);

    Nav::widget([
    'options' => [
        'class' => 'navbar-nav navbar-right'
    ],
    'items' => [
        [
            'label' => 'Главная',
            'url' => [
                '#'
            ]
        ],
        [
            'label' => 'About',
            'url' => [
                '#'
            ]
        ],
        [
            'label' => 'Обратная связь',
            'url' => [
                '#'
            ]
        ],
        Yii::$app->user->isGuest ? [
            'label' => 'Войти',
            'url' => [
                '#'
            ]
        ] : [
            'label' => 'Выйти ('.Yii::$app->user->identity->username.')',
            'url' => [
                '#'
            ],
            'linkOptions' => [
                'data-method' => 'post'
            ]
        ]
    ],
]);
NavBar::end();
?>

