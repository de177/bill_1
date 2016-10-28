<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ActiveForm;

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


<?php
    $form = ActiveForm::begin();

        // получаем всех авторов
        //$authors = \app\models\Clients::find()->all();
        // формируем массив, с ключем равным полю 'id' и значением равным полю 'name'
        $items1 = ArrayHelper::map($cl_array,'id','name');
        $params1 = [
            'prompt' => 'Укажите автора записи'
                ];

        echo $form->field($model, 'name')->dropDownList($items1,$params1);

        ActiveForm::end();
?>

<div>
    <?php foreach ($cl_array as $item_cl): ?>
        <p>
            <a href ="/site/clients_detail/<?= $item_cl ->id?>"><?php echo $item_cl -> name ?></a>
        </p>


    <?php endforeach; ?>
</div>