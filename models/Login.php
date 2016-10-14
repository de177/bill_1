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
            [['login','password'],'required'],
            ['password', 'validatePassword']

        ];
    }

    public function validatePassword($attribute,$params)
    {

        $user = User::findOne(['login'=>$this->login]);

        if(!$user || ($user->password != sha1($this->password)))
        {
            //если мы НЕ нашли в базе такого пользователя
            //или введенный пароль и пароль пользователя в базе НЕ равны ТО,
            $this->addError($attribute,'Пароль или имейл введены неверно');
            //добавляем новую ошибку для атрибута password о том что пароль или имейл введены не верно
        }

    }

}




