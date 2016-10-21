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
<!---  <html lang="<?= Yii::$app->language ?>"> --->
<html lang="ru_RU">
<head>
    <!--- <meta charset="<?= Yii::$app->charset ?>"> --->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="language" content="ru" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>

    <!-- top navigation -->

    <div class="navbar-inverse">

        <?php $this->beginContent('@app/views/layouts/top_sidebar.php'); ?>

        <?php $this->endContent(); ?>

    </div>

    <!-- /top navigation -->

    <div id="content">

                <div id="container1">

                    <div id="container2">

                        <div id="container3">

                            <!-- page content -->

                            <div id="center">

                                <?= Breadcrumbs::widget(['links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],]) ?>

                                <?= $content ?>


                            </div>

                            <!-- /page content -->

                        </div>

                        <!-- left sidebar menu -->

                        <div id="left">

                            <?php if(!Yii::$app->user->isGuest)

                            {

                                $this->beginContent('@app/views/layouts/left_sidebar.php');
                                $this->endContent();
                            }

                                else {


                                }

                            ?>

                        </div>

                        <!-- / left sidebar menu -->

                    </div>
                </div>
            </div>




                <!-- menu profile quick info -->


                <!-- /menu profile quick info -->





















    <!-- footer content -->

    <div id="footer">
        <p class="pull-left" style="text-align: left; font-size: 9px; ">&copy; Copyright My Company <?= date('Y') ?>
    </div>

    <!-- /footer content -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
