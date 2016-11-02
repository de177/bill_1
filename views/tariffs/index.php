<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

$this->title = 'Tariffs';
$this->params['breadcrumbs'][] = $this->title;

?>

<div>
    <p>
    <h4>Список всех тарифов</h4>
    </p>

</div>


<h1><?php echo $tr_var1InView; ?></h1>



<div>

    <?php foreach ($arrayInView as $item): ?>
        <p>
            <a href ="/site/clients_detail/<?= $item ->ID?>"><?php echo $item -> name ?></a>
        </p>


    <?php endforeach; ?>


</div>

<div>

<h1>Детальная информация о тарифе</h1>

<h3><?= $one -> ID ?>&nbsp<?= $one -> name ?></h3>


</div>



<?php
$form = ActiveForm::begin();

// получаем всех авторов
$name_all = \app\models\Gtel_tariffs::find()->all();
// формируем массив, с ключем равным полю 'id' и значением равным полю 'name'
$items = ArrayHelper::map($name_all,'ID','name');
$params = [
    'prompt' => 'Укажите автора записи'
];
echo $form->field($model, 'name')->dropDownList($items, [

    'data' => [
        'style' => 'btn-success',
        'live-search' => 'false',
        'size' => 7,
        'title' => 'Ничего не выбрано'
    ]

]);

ActiveForm::end();
?>