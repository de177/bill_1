<h1>Логин</h1>

<?php

use yii\widgets\ActiveForm;


?>

<?php

    $form = ActiveForm::begin();

?>

<?= $form->field($login_model,'login')->textInput() ?>
<?= $form->field($login_model,'password')->passwordInput()?>

<?php

$form = ActiveForm::end();

?>

