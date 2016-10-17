<h1> Мы на главной странице</h1>


<?php

use yii\widgets\ActiveForm;
use kartik\field\FieldRange;
use kartik\datetime\DateTimePicker

?>

<?php $form = ActiveForm::begin(); ?>


echo '<label>Start Date/Time</label>';
<?= DateTimePicker::widget([
        'name' => 'datetime_10',
        'options' => ['placeholder' => 'Select operating time ...'],
        'convertFormat' => true,
        'pluginOptions' => [
        'format' => 'd-M-Y g:i A',
        'startDate' => '01-Mar-2014 12:00 AM',
        'todayHighlight' => true
                            ]
        ]);

?>



<?php $form = ActiveForm::end(); ?>