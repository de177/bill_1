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


<?= $form->field($model_datetime, 'startdate')->widget(DateTimePicker::classname(), [
                                                'options' => ['placeholder' => 'Enter event time ...'],
                                                'pluginOptions' => [
                                                    'autoclose' => true
                                                                    ]
]);
?>

<div>

    <button type="submit" class="btn btn-primary">OK-1</button>
</div>




<label class="control-label">Enter Date Range</label>

<div class="drp-container">

    <?= DateRangePicker::widget([
        'name'=>'date_range_2',
        'presetDropdown'=>true,
        //'startAttribute' => 'from_date',
        //'endAttribute' => 'to_date',
        'hideInput'=>true
            ]);
    ?>

</div>

<h1> ####################################### </h1>

<?=  $model_datetime->datetime_start = '2016-02-11'; ?>
<?=  $model_datetime->datetime_end = '2016-03-15';    ?>
<div class="input-group drp-container">

<?= DateRangePicker::widget([
    'model'=>$model_datetime,
    'attribute' => 'kvdate1',
    //'useWithAddon'=>true,
    'presetDropdown'=>true,
    'convertFormat'=>true,
    'startAttribute' => 'datetime_start',
    'endAttribute' => 'datetime_end',
    'hideInput'=>true,
    'pluginOptions'=>[

                'locale'=>['format' => 'Y-m-d'],
                    ]
    ]);
?>
    <button type="submit" class="btn btn-primary">OK-2</button>
</div>

<h1> ####################################### </h1>

<?=  DateRangePicker::widget([
'model'=>$model_datetime,
'attribute'=>'datetime_range',
'presetDropdown'=>true,
'convertFormat'=>true,
'startAttribute'=>'datetime_start',
'endAttribute'=>'datetime_end',
'hideInput'=>true,
'pluginOptions'=>[
//'timePicker'=>true,
//'timePickerIncrement'=>30,
'locale'=>[
'format'=>'Y-m-d'
]
]
]);
?>
<div>

    <button type="submit" class="btn btn-primary">OK-3</button>
</div>


<?php $form = ActiveForm::end(); ?>