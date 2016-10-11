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
            $model ->attributes = Yii::$app->request ->post('Signup');  // получает все значения разом.
//          $model ->email = $_POST['Signup']['email'];  - можно писать такую конструкуию по всем переменным, вместо первой


            if($model->validate() && $model->signup())

            {

                return $this ->goHome();
            }


        }
        return $this->render('signup',[ 'model' =>$model] );
    }
}
