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
        ['label' => 'Управление клиентами', 'icon' => 'user', 'url' => Url::to(['/site/clients'])],

        ['label' => 'Управление тарифами', 'icon' => 'rub', 'items' => [
            ['label' => 'Создать', 'url' => Url::to(['/site/online-1'])],
            ['label' => 'Список', 'url' => Url::to(['/site/online-2'])]
        ]],
    ],
]);
?>


