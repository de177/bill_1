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

        if(isset($_POST['Signup']))
        {
            var_dump($_POST['Signup']); die();

        }
        return $this->render('signup',[ 'model' =>$model] );
    }
}
