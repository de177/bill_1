<h1> Мы на главной странице</h1>


<?php
use kartik\date\DatePicker;
?>


<?= $form->field($model, 'date_1')->widget(DatePicker::classname(), [
    'options' => ['placeholder' => 'Enter birth date ...'],
    'pluginOptions' => [
        'autoclose'=>true
    ]
]);

?>


