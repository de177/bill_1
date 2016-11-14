<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Clients */
/* @var $form yii\widgets\ActiveForm */
?>


<div class="clients-form">

    <?php $form = ActiveForm::begin();

    // получаем всех авторов
    $tariffs_all = \app\models\Gtel_tariffs::find()->all();
    // формируем массив, с ключем равным полю 'id' и значением равным полю 'name'
    $items_tariffs = ArrayHelper::map($tariffs_all,'ID','name');

    $items_status = [
        '0' => 'Inactive',
        '1' => 'Active'
            ];

    $params_status = [
        'prompt' => 'Выберите статус...'
    ];

    $params_tariffs = [
        'prompt' => 'Укажите автора записи'
    ];

    ?>

    <?= $form->field($model_tariffs, 'name')->dropDownList($items_tariffs,$params_tariffs) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tariff_id')->dropDownList(ArrayHelper::map($tariffs_all,'ID','name')) ?>

    <?= $form->field($model, 'service_id')->textInput() ?>

    <?= $form->field($model, 'service_flag')->textInput() ?>

    <?= $form->field($model, 'login')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'org_form')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'inn')->textInput() ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'postal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'country')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList($items_status,$params_status) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
