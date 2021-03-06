<?php

namespace app\controllers;

use Yii;
use yii\base\Model;
use yii\web\Controller;
use app\models\Clients;
use app\models\Gtel_Tariffs;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;


class ClientsController extends Controller
{

    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }


    public function actionIndex ()
    {


        if(!Yii::$app->user->isGuest) {

        $cl_var1 = 'Переменная cl_var1';

        $array = Clients::getAll();


        $searchModel = new Clients();
        $dataProvider = $searchModel->GetList(Yii::$app->request->queryParams);


        return $this->render('index', [
            'cl_var1InView' => $cl_var1,
            'arrayInView' => $array,
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,

        ]);

    }   else
        {

            return $this->redirect(['site/login']);
        }



    }


    public function actionClients_detail ($id)
    {

        $one = Clients::getOne($id);

        return $this->render('clients/clients_detail', [ 'one' => $one]);
    }


    public function actionView($id)
    {
        $model_tariffs = Gtel_tariffs::getTariffsOne();

        return $this->render('view', [
            'model' => $this->findModel($id),
            'model_tariffs' => $model_tariffs,
        ]);
    }

    public function actionCreate()
    {
        $model = new Clients();
        $model_tariffs = Gtel_tariffs::getTariffsOne();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'model_tariffs' => $model_tariffs,
            ]);
        }
    }

    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $model_tariffs = Gtel_tariffs::getTariffsOne();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
                'model_tariffs' => $model_tariffs,
            ]);
        }
    }

    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }



    /**
     * Finds the Clients model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Clients the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Clients::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}