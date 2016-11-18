<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Clients', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="clients-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?php

    // получаем всех авторов
    $tariffs_all = \app\models\Gtel_tariffs::find()->all();
    // формируем массив, с ключем равным полю 'id' и значением равным полю 'name'
    $items_tariffs = ArrayHelper::map($tariffs_all,'ID','name');

    ?>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            [
                'attribute'=>'tariff_id',
                'value'=>$model->$items_tariffs,
            ],
            'tariff_id',
            'service_id',
            'service_flag',
            'login',
            'password',
            'org_form',
            'inn',
            'email:email',
            'address',
            'city',
            'postal',
            'country',
            'status',
        ],
    ]) ?>

</div>