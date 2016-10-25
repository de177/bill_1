<?php


namespace app\models;


use yii\base\Model;
use yii\data\ActiveDataProvider;


class Clients extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'clients';
    }

    public static function getAll()

    {
        $data = self::find() ->all();
        return $data;
    }

    public static function getOne($id)
    {
        $query = self::find()

            ->where(['id' => $id])
            ->one();

         return $query;
    }

    public function getList ()
    {
        $query = Clients::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        return $dataProvider;

    }



}
