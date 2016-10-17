<h1> Мы на главной странице</h1>


<?php

use yii\bootstrap\Modal;
use yii\widgets\ActiveForm;
use kartik\field\FieldRange;
use kartik\datetime\DateTimePicker;
use kartik\daterange\DateRangePicker;

?>

<?php $form = ActiveForm::begin(); ?>

// Usage with model and Active Form (with no default initial value)

<?= $form->field($model_datetime, 'datetime_1')->widget(DateTimePicker::classname(), [
                                                'options' => ['placeholder' => 'Enter event time ...'],
                                                'pluginOptions' => [
                                                    'autoclose' => true
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