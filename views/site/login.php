<h1>Логин</h1>

<?php

use yii\widgets\ActiveForm;


?>

<?php $form = ActiveForm::begin(); ?>


<?= $form->field($login_model,'login')->textInput(['maxlength' => 10]) ?>
<?= $form->field($login_model,'password')->passwordInput(['maxlength' => 30, 'placeholder' => 'Enter you oassword...'])?>

<div>

    <button type="submit" class="btn btn-success">Login</button>
</div>



<?php $form = ActiveForm::end(); ?>

