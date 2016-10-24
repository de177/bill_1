<?php

namespace app\controllers;


use Yii;
use yii\base\Model;
use yii\web\Controller;
use app\models\Signup;
use app\models\Login;
use app\models\DateTime;
use app\models\Clients;

class SiteController extends Controller
{

    public function actionIndex()

    {

       if(Yii::$app->user->isGuest)
        {

            return $this->redirect(['login']);

        }


        // var_dump(Yii::$app->user->identity);die();
        return $this->render('index');
    }

    public function actionDatetime()
    {

        if(Yii::$app->user->isGuest)
        {

            return $this->redirect(['login']);

        }

        $model_datetime = new DateTime();

        if(isset($_POST['DateTime']))
        {

            var_dump($_POST['DateTime']); die();

        }


        // var_dump(Yii::$app->user->identity);die();
        return $this->render('datetime',['model_datetime'=>$model_datetime]);

    }

    public function actionLogout()
    {
        if(!Yii::$app->user->isGuest)
        {
            Yii::$app->user->logout();
            return $this->redirect(['login']);
        }
    }

    public function actionSignup()

    {
        $model = new Signup();

        if(isset($_POST['Signup']))
        {

            // $model -> login = $_POST['Signup']['login']; //Вариант получения данных

            $model->attributes = Yii::$app->request->post('Signup');
            if($model->validate() && $model->signup())
            {
                return $this->goHome();
            }


            //var_dump($_POST['Signup']); die();
        }

        return $this->render('signup',['model'=>$model]);
    }

    public function actionLogin()

    {

        if(!Yii::$app->user->isGuest)
        {

            return $this->goHome();
        }

        $login_model = new Login();

        if(isset($_POST['Login']))
        {
            $login_model->attributes = Yii::$app->request->post('Login');

            if($login_model->validate())
            {
            Yii::$app->user->login($login_model->getUser());
            return $this->goHome();
            //var_dump('Мы прошли валидацию'); die();

            }


        }
        return $this->render('login',['login_model' => $login_model]);

    }

    public function actionClients ()
    {

        $cl_var1 = 'Переменная cl_var1';

        $array = Clients::getAll();


        return $this->render('clients', ['cl_var1InView' => $cl_var1, 'arrayInView' => $array]);

    }


    public function actionClients_detail ($id)
    {

        $one = Clients::getOne();

        return $this->render('clients/clients_detail', [ 'one' => $one]);
    }

}
