<?php


namespace app\controllers;

use Yii;
use yii\base\Model;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\models\Gtel_Tariffs;


class TariffsController extends Controller
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

            $tr_var1 = 'Переменная TR_var1';

            $array = Gtel_Tariffs::getList();

            // $searchModel = new Clients();
            //$dataProvider = $searchModel->GetList(Yii::$app->request->queryParams);


            return $this->render('index', [
                'tr_var1InView' => $tr_var1,
                'arrayInView' => $array,
              //  'dataProvider' => $dataProvider,
              //  'searchModel' => $searchModel,

            ]);

        }   else
        {

            return $this->redirect(['site/login']);
        }



    }


}