<?php

use yii\widgets\Menu;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use kartik\sidenav\SideNav;
use yii\helpers\Url;
?>

<h1> Мы на главной странице</h1>


<?php

/*Menu::widget([
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

*/

?>



<?php

     SideNav::widget([
    'type' => SideNav::TYPE_SUCCESS,
    'encodeLabels' => false,
    'heading' => '<i class="glyphicon glyphicon-cog"></i> Operations',
    'items' => [
        // Important: you need to specify url as 'controller/action',
        // not just as 'controller' even if default action is used.
        ['label' => 'Home', 'icon' => 'home', 'url' => Url::to(['/site/home', 'type'=>SideNav::TYPE_SUCCESS]), 'active' => ($item == 'home')],
        ['label' => 'Books', 'icon' => 'book', 'items' => [
            ['label' => '<span class="pull-right badge">10</span> New Arrivals', 'url' => Url::to(['/site/new-arrivals', 'type'=>SideNav::TYPE_SUCCESS]), 'active' => ($item == 'new-arrivals')],
            ['label' => '<span class="pull-right badge">5</span> Most Popular', 'url' => Url::to(['/site/most-popular', 'type'=>SideNav::TYPE_SUCCESS]), 'active' => ($item == 'most-popular')],
            ['label' => 'Read Online', 'icon' => 'cloud', 'items' => [
                ['label' => 'Online 1', 'url' => Url::to(['/site/online-1', 'type'=>SideNav::TYPE_SUCCESS]), 'active' => ($item == 'online-1')],
                ['label' => 'Online 2', 'url' => Url::to(['/site/online-2', 'type'=>SideNav::TYPE_SUCCESS]), 'active' => ($item == 'online-2')]
            ]],
        ]],
        ['label' => '<span class="pull-right badge">3</span> Categories', 'icon' => 'tags', 'items' => [
            ['label' => 'Fiction', 'url' => Url::to(['/site/fiction', 'type'=>SideNav::TYPE_SUCCESS]), 'active' => ($item == 'fiction')],
            ['label' => 'Historical', 'url' => Url::to(['/site/historical', 'type'=>SideNav::TYPE_SUCCESS]), 'active' => ($item == 'historical')],
            ['label' => '<span class="pull-right badge">2</span> Announcements', 'icon' => 'bullhorn', 'items' => [
                ['label' => 'Event 1', 'url' => Url::to(['/site/event-1', 'type'=>SideNav::TYPE_SUCCESS]), 'active' => ($item == 'event-1')],
                ['label' => 'Event 2', 'url' => Url::to(['/site/event-2', 'type'=>SideNav::TYPE_SUCCESS]), 'active' => ($item == 'event-2')]
            ]],
        ]],
        ['label' => 'Profile', 'icon' => 'user', 'url' => Url::to(['/site/profile', 'type'=>SideNav::TYPE_SUCCESS]), 'active' => ($item == 'profile')],
    ],
]);
?>

