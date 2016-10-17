<h1> Мы на главной странице</h1>


<?php

use yii\widgets\ActiveForm;
use kartik\field\FieldRange;
use kartik\datetime\DateTimePicker;
use kartik\daterange\DateRangePicker;

?>

<?php $form = ActiveForm::begin(); ?>




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