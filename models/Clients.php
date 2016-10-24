<?php


namespace app\models;


use yii\base\Model;

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
}
