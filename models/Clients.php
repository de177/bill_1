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

    public function rules()
    {
        return [
            [['id', 'tariff_id', 'service_id', 'service_flag', 'inn'], 'integer'],
            [['name', 'login', 'password', 'org_form', 'email', 'address', 'city', 'postal', 'country', 'status'], 'safe'],
        ];
    }


    public function getList ($params)
    {
        $query = Clients::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'forcePageParam' => false,
                'pageSizeParam' => false,
                'pageSize' => 11
                            ]
        ]);

        $this->load($params);


        $query->andFilterWhere([
            'id' => $this->id,
            'tariff_id' => $this->tariff_id,
            'service_id' => $this->service_id,
            'service_flag' => $this->service_flag,
            'inn' => $this->inn,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'login', $this->login])
            ->andFilterWhere(['like', 'password', $this->password])
            ->andFilterWhere(['like', 'org_form', $this->org_form])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'postal', $this->postal])
            ->andFilterWhere(['like', 'country', $this->country])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;

    }

    public function attributeLabels()
    {
        return [
            'id' => 'id',
            'name' => 'Наименование',
            'tariff_id' => 'Tariff ID',
            'service_id' => 'Service ID',
            'service_flag' => 'Service Flag',
            'login' => 'Login',
            'password' => 'Password',
            'org_form' => 'Форма',
            'inn' => 'ИНН',
            'email' => 'Email',
            'address' => 'Адрес',
            'city' => 'Город',
            'postal' => 'Индекс',
            'country' => 'Страна',
            'status' => 'Статус',
        ];
    }

}
