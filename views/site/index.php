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

     echo SideNav::widget([
    'type' => SideNav::TYPE_SUCCESS,
    heading' => '<i class="glyphicon glyphicon-cog"></i> 'Operations']);
    'items' => [
    ['label' => 'Home', 'icon' => 'home', 'url' => Url::to(['/site/home'])],

    ['label' => 'Profile', 'icon' => 'user', 'url' => Url::to(['/site/profile'])],
],
]);
?>

