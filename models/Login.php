<?php

namespace app\models;

use yii\base\Model;

class Login extends Model

{

    public $login;
    public $password;

    public function rules()
    {
        return [
            [['login','password'],'required']

        ];
    }


}




