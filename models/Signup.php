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
            [['login','password','email'],'required'],
            ['email','email'],
            ['login','unique','targetClass'=>'app\models\User'],
            ['email','unique','targetClass'=>'app\models\User'],
            ['login','string','min'=>3,'max'=>10],
            ['password','string','min'=>4,'max'=>10]
        ];
    }

    public function signup()
    {
        $user = new Users();
        $user->login = $this->login;
        $user->setPassword($this->password);
        $user->email = $this->email;
        return $user->save(); //вернет true или false
    }

}