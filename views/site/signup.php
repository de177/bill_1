<h1>Страница для регистриции </h1>

<?php

use \yii\widgets\ActiveForm;

?>

<?php
$form = ActiveForm::begin(['class'=>'form-horizontal']);
?>

<?= $form->field($model,'login')->textInput(['autofocus'=>true]) ?>

<?= $form->field($model,'password')->passwordInput()?>

<?= $form->field($model,'email')->textInput(['autofocus'=>true]) ?>

<div>

    <button type="submit" class="btn btn-primary">Submit</button>
</div>

<?php
ActiveForm::end();
?>

