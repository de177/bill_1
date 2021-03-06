<?php

use yii\widgets\Menu;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use kartik\sidenav\SideNav;
use yii\helpers\Url;
?>


<?php

echo SideNav::widget([
    'type' => SideNav::TYPE_SUCCESS,
    'heading' => '<i class="glyphicon glyphicon-cog"></i> Operations',
    'items' => [

        ['label' => 'Управление аккаунтами', 'icon' => 'user', 'items' => [
            ['label' => 'Клиенты', 'url' => Url::to(['/clients/index'])],
            ['label' => 'Пользователи', 'url' => Url::to(['/site/user'])]
        ]],


        ['label' => 'Управление тарифами', 'icon' => 'rub', 'items' => [
            ['label' => 'Тарифы', 'url' => Url::to(['/tariffs/index'])],
            ['label' => 'Стоимость', 'url' => Url::to(['/tariffs/cost'])]
        ]],

    ],
]);
?>


