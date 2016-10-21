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
        $array = [

            1 =>'Первый клиент',
            2 =>'Второй клиент',
            3 =>'Третий клиент'

        ];

        return $array;
    }


}
