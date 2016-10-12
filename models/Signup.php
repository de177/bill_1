<?php

namespace app\models;

use yii\base\Model;

class Signup extends Model

{
    public $login;
    public $password;
    public $email;

    public function rules()
    {
        return [

            [['login','email','password'],'required'],
            ['login','string','min'=>3,'max'=>10],
            ['email','email'],
            ['email','unique','targetClass'=>'app\models\User'],
            ['password','string','min'=>3,'max'=>10]

        ];
    }

    public function signup()
    {

        $user = new Users();
        $user->login = $this->login;
        $user->email = $this->email;
        $user->setPassword($this->password);
        return $user->save(); //вернет true или false
    }

}
