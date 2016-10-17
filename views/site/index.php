<h1> Мы на главной странице</h1>


<?php

use yii\widgets\ActiveForm;
use kartik\field\FieldRange;
use kartik\date\DatePicker;

?>

<?php $form = ActiveForm::begin(); ?>

echo 'Birth Date';
<?= DatePicker::widget([
'name' => 'dp_1',
'type' => DatePicker::TYPE_INPUT,
'value' => '23-Feb-1982',
'pluginOptions' => [
'autoclose'=>true,
'format' => 'dd-M-yyyy'
]
]);

?>



<?php $form = ActiveForm::end(); ?>