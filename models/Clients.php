<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "clients".
 *
 * @property integer $ID
 * @property string $name
 * @property integer $tariff_id
 * @property integer $service_id
 * @property integer $service_flag
 * @property string $login
 * @property string $password
 * @property string $org_form
 * @property integer $inn
 * @property string $email
 * @property string $address
 * @property string $city
 * @property string $postal
 * @property string $country
 * @property string $status
 */
class Clients extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'clients';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tariff_id', 'service_id', 'service_flag', 'inn'], 'integer'],
            [['inn'], 'required'],
            [['name'], 'string', 'max' => 80],
            [['login'], 'string', 'max' => 50],
            [['password', 'email'], 'string', 'max' => 32],
            [['org_form', 'address', 'city', 'postal', 'country', 'status'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'name' => 'Name',
            'tariff_id' => 'Tariff ID',
            'service_id' => 'Service ID',
            'service_flag' => 'Service Flag',
            'login' => 'Login',
            'password' => 'Password',
            'org_form' => 'Org Form',
            'inn' => 'Inn',
            'email' => 'Email',
            'address' => 'Address',
            'city' => 'City',
            'postal' => 'Postal',
            'country' => 'Country',
            'status' => 'Status',
        ];
    }
}
