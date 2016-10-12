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


    //1. Проверить существует ли пользователь?
    //2. "Внести" пользователя в систему(в сессию)

    public function actionLogin()
    {
        $login_model = new Login();

        if( Yii::$app->request->post('Login'))
        {
            $login_model->attributes = Yii::$app->request ->post('Login');

            if($login_model->validate())
            {
               // Yii::$app->user->login($login_model->getUser());
               // return $this->goHome();
                var_dump('мы прошли валидациюэ'); die();


            }

        }

        return $this->render('login',['login_model' =>$login_model]);
    }

}
