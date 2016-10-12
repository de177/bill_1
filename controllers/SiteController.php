<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Signup;


class SiteController extends Controller
{

    public function actionIndex()

    {
        return $this->render('index');
    }

    public function actionSignup()

    {
        $model = new Signup();
        return $this->render('signup',['model'=>$model]);
    }

}
