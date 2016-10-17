<h1> Мы на главной странице</h1>


<?php

use yii\widgets\ActiveForm;
use kartik\field\FieldRange;
use kartik\date\DatePicker;

?>

$form = ActiveForm::begin();

// Simple string/text range validation configured with the Html::dropDownList.
echo FieldRange::widget([
'form' => $form,
'model' => $model,
'label' => 'Enter start and end place',
'attribute1' => 'start_place',
'attribute2' => 'end_place',
'type' => FieldRange::INPUT_DROPDOWN_LIST,
'items1' => [''=>'Select...', 1 => 'New York', 2 => 'London', 3 => 'Bangalore'],
'items2' => [''=>'Select...', 1 => 'New York', 2 => 'London', 3 => 'Bangalore'],
]);

// Simple numeric/amounts range validation using \kartik\widgets\Spinner widget.
FieldRange::widget([
'form' => $form,
'model' => $model,
'label' => 'Enter amount range',
'attribute1' => 'from_amount',
'attribute2' => 'to_amount',
'type' => FieldRange::INPUT_SPIN,
]);

// Simple text validation configured using Html::textInput with custom separator and
// addons. Use \kartik\widgets\ActiveField features to generate your own Bootstrap 3 addons.
echo FieldRange::widget([
'form' => $form,
'model' => $model,
'label' => 'Enter the two files',
'attribute1' => 'attachment_1',
'attribute2' => 'attachment_2',
'type' => FieldRange::INPUT_TEXT,
'separator' => 'and',
'fieldConfig1' => ['addon'=>[
'prepend' => ['content'=>'<i class="glyphicon glyphicon-paperclip"></i>'],
'append' => ['content'=>'.txt']
]],
'fieldConfig2' => ['addon'=>[
'prepend' => ['content'=>'<i class="glyphicon glyphicon-paperclip"></i>'],
'append' => ['content'=>'.txt']
]],
]);

// Date range validation using \kartik\widgets\DatePicker widget and special additional
// RANGE validation routine available within DatePicker plugin.
echo FieldRange::widget([
'form' => $form,
'model' => $model,
'label' => 'Enter date range',
'attribute1' => 'begin_date',
'attribute2' => 'end_date',
'type' => FieldRange::INPUT_DATE,
]);

// Advanced usage with the \kartik\datecontrol\DateControl extension, which in turn is configured to
// use \kartik\widgets\DatePicker for displaying date inputs. The saved formats are displayed below
// each field (for this example, the dates are saved as Unix Timestamp).
use kartik\datecontrol\DateControl;
FieldRange::widget([
'form' => $form,
'model' => $model,
'label' => 'Enter date range',
'attribute1' => 'from_date',
'attribute2' => 'to_date',
'type' => FieldRange::INPUT_WIDGET,
'widgetClass' => DateControl::classname(),
'widgetOptions1' => [
'saveFormat' => 'php:U'
],
'widgetOptions2' => [
'saveFormat' => 'php:U'
],
]);

// DateTime range validation using \kartik\widgets\DateTimePicker widget.
echo FieldRange::widget([
'form' => $form,
'model' => $model,
'label' => 'Enter time range',
'attribute1' => 'datetime_start',
'attribute2' => 'datetime_end',
'type' => FieldRange::INPUT_DATETIME,
]);

// Time range validation using \kartik\widgets\TimePicker widget.
echo FieldRange::widget([
'form' => $form,
'model' => $model,
'label' => 'Enter time range',
'attribute1' => 'datetime_start',
'attribute2' => 'datetime_end',
'type' => FieldRange::INPUT_DATETIME,
]); ?>

ActiveForm::end();