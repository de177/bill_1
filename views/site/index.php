<h1> Мы на главной странице</h1>


<?php

use yii\widgets\ActiveForm;
use kartik\field\FieldRange;
use kartik\datetime\DateTimePicker;
use kartik\daterange\DateRangePicker;

?>

<?php $form = ActiveForm::begin(); ?>


<label>Start Date/Time</label>'

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

<label class="control-label">Enter Date Range</label>

<div class="drp-container">

    <?= DateRangePicker::widget([
        'name'=>'date_range_2',
        'presetDropdown'=>true,
        'hideInput'=>true
            ]);
    ?>

    <button type="submit" class="btn btn-primary">OK</button>
</div>


<?php $form = ActiveForm::end(); ?>