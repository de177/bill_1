<?php


namespace app\models;


use yii\base\Model;
use yii\data\ActiveDataProvider;


class Gtel_tariffs extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'gtel_tariffs';
    }

    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['name'], 'safe'],
        ];
    }


    public static function getList()

    {
        $data = self::find() ->all();
        return $data;


    }



    public function attributeLabels()
    {
        return [
            'id' => 'Tariff ID',
            'name' => 'Наименование',

        ];
    }
}