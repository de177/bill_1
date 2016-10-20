<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>

    <div id="header">Заголовок страницы</div>

            <div id="content">

                <div id="container1">

                    <div id="container2">

                        <div id="container3">

                            <div id="center">Центральная колонка</div>

                        </div>

                        <div id="left">Левая колонка</div>

                    </div>
                </div>
            </div>




                <!-- menu profile quick info -->


                <!-- /menu profile quick info -->



                <!-- sidebar menu -->

                <!-- /sidebar menu -->


        <!-- top navigation -->



        <!-- /top navigation -->

        <!-- page content -->



        <!-- /page content -->



    <div id="footer">
        <p class="pull-right" style="text-align: right;">&copy; Copyright My Company <?= date('Y') ?>
    </div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
