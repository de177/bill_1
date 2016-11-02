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


<?= $form->field($model, 'ID')->textInput() ?>

<?= $form->field($model, 'name')->textInput() ?>


<div>
    <?php foreach ($cl_array as $item_cl): ?>
        <p>
            <a href ="/site/clients_detail/<?= $item_cl ->id?>"><?php echo $item_cl -> name ?></a>
        </p>


    <?php endforeach; ?>
</div>