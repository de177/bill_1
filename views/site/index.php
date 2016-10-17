<h1> Мы на главной странице</h1>


<?php
use yii\bootstrap\DatePicker;
?>


<?= DatePicker::widget([
    'model' => $model,
    'attribute' => 'from_date',
    'language' => 'ru',
    'clientOptions' => [
        'dateFormat' => 'yy-mm-dd',
    ],
])

?>


