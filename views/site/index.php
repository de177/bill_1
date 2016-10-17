<h1> Мы на главной странице</h1>


<?php

use yii\widgets\ActiveForm;
use kartik\field\FieldRange;
use \kartik\datetime\DateTimePicker

?>

<?php $form = ActiveForm::begin(); ?>

echo 'Event Time';
<?=
    DateTimePicker::widget([
    'name' => 'dp_1',
    'type' => DateTimePicker::TYPE_INPUT,
    'value' => '23-Feb-1982 10:10',
    'pluginOptions' => [
        'autoclose'=>true,
        'format' => 'dd-M-yyyy hh:ii'
    ]
]);

?>



<?php $form = ActiveForm::end(); ?>