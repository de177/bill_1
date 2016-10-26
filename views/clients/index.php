<?php

use yii\helpers\Html;
use yii\grid\GridView;


?>

<h1><?php echo $cl_var1InView; ?></h1>


<div>

    <?php foreach ($arrayInView as $item): ?>
        <p>
            <a href ="/site/clients_detail/<?= $item ->id?>"><?php echo $item -> name ?></a>
        </p>


    <?php endforeach; ?>


</div>

<div>
    <p>
        <h2>А тут начнеться GridView</h2>
    </p>

</div>


<?= GridView::widget(
    [
        /**
        * Экземпляр класса, который реализует \yii\data\DataProviderInterface. В нашем случае ActiveDataProvider
        */
        'dataProvider' => $dataProvider,
        // 'emptyCell' => '-',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'name',
            'inn',
            'email',
            [
                'attribute' => 'status',
                //'label'=>'Active22',
            ],

            [
                'class' => 'yii\grid\ActionColumn',
                'header'=>'Action',
                'headerOptions' => ['width' => '80'],
                'template' => '{view} {update} {delete}{link}',

            ],

        ],
    ]

);

?>

