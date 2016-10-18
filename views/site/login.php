<h1>Логин</h1>

<?php

use yii\widgets\ActiveForm;


?>

<?php $form = ActiveForm::begin(); ?>


<?= $form->field($login_model,'login')->textInput(['maxlength' => 30]) ?>
<?= $form->field($login_model,'password')->passwordInput(['maxlength' => 30, 'style'=>'width:100px' ,'placeholder' => 'Enter you password...'])?>

<div>

    <button type="submit" class="btn btn-success">Login</button>
</div>



<?php $form = ActiveForm::end(); ?>

