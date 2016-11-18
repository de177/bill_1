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
            [['ID'], 'integer'],
            [['name'], 'safe'],
            [['created_date'], 'date'],
        ];
    }


    public static function getList()

    {
        $data = self::find() ->all();
        return $data;


    }

    public static function getTariffsOne()
    {
        $query = self::find()

            ->one();

        return $query;
    }

    public static function getOne()
    {
        $query = self::find()

            ->where(['ID' => 14])
            ->one();

        return $query;
    }



    public function attributeLabels()
    {
        return [
            'ID' => 'Tariff ID',
            'name' => 'Наименование',
            'created_date' => 'Дата создания',

        ];
    }
}