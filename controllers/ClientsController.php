<?php

namespace app\controllers;

use Yii;
use yii\base\Model;
use yii\web\Controller;
use app\models\Clients;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;


class ClientsController extends Controller
{

    public function actionIndex ()
    {

        $cl_var1 = 'Переменная cl_var1';

        $array = Clients::getAll();

        $searchModel = new Clients();
        $dataProvider = $searchModel->GetList(Yii::$app->request->queryParams);


        return $this->render('clients', ['cl_var1InView' => $cl_var1, 'arrayInView' => $array, 'dataProvider' => $dataProvider]);

    }


    public function actionClients_detail ($id)
    {

        $one = Clients::getOne($id);

        return $this->render('clients/clients_detail', [ 'one' => $one]);
    }



}