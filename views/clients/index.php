<?php

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Clients';
$this->params['breadcrumbs'][] = $this->title;

?>
<!---
<h1><?php //echo $cl_var1InView; ?></h1>


<div>

    <?php //foreach ($arrayInView as $item): ?>
        <p>
            <a href ="/site/clients_detail/<?= //$item ->id?>"><?php //echo $item -> name ?></a>
        </p>


    <?php //endforeach; ?>


</div>
--->

<div>
    <p>
        <h4>Управление клиентами</h4>
    </p>

</div>

<div class="category-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

<p>
    <?= Html::a('Добавить клиента', ['create'], ['class' => 'btn btn-success']) ?>
</p>

<?= GridView::widget(
    [
        /**
        * Экземпляр класса, который реализует \yii\data\DataProviderInterface. В нашем случае ActiveDataProvider
        */
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'showHeader' => true,
        'showFooter'=> false,
        // 'emptyCell' => '-',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'name',
            'inn',
            'email',
            [
                'attribute' => 'status',
                'format' => 'raw',
                'filter' => [
                    1 => 'Active',
                    0 => 'Inactive',
                ],

                'value' => function ($model, $key, $index, $column) {
                    $active = $model->{$column->attribute} == 1;
                    return \yii\helpers\Html::tag(
                        'span',
                        $active ? 'Active' : 'Inactive',
                        [
                            'class' => 'label label-' . ($active ? 'success' : 'danger'),
                        ]
                    );
                },

                /*
                 * Такой вариат
                'value' => function ($model) {
                    return $model->status == '1' ? 'Active' : 'Inactive';

                },
                */



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

</div>
