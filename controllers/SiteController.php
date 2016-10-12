<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Signup;
use app\models\Login;

class SiteController extends Controller
{

    public function actionIndex()
    {
        return $this->render('índex');
    }


}
