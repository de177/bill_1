<?php


namespace app\controllers;

use Yii;
use yii\base\Model;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\Gtel_Tariffs;
use app\models\Clients;


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

            $cl_array = Clients::getAll();

            $one = Gtel_tariffs::getOne();
            $one1 = Gtel_tariffs::getOne1();

            // $searchModel = new Clients();
            //$dataProvider = $searchModel->GetList(Yii::$app->request->queryParams);


            return $this->render('index', [
                'tr_var1InView' => $tr_var1,
                'arrayInView' => $array,
                'cl_array' => $cl_array,
                'one' => $one,
                'model'=>$one1,


              //  'dataProvider' => $dataProvider,
              //  'searchModel' => $searchModel,

            ]);

        }   else
        {

            return $this->redirect(['site/login']);
        }



    }

    /**
     * Finds the Clients model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Clients the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($ID)
    {
        if (($model = Gtel_Tariffs::findOne($ID)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }


}