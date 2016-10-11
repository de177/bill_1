<?php


namespace app\models;
use yii\base\Model;

class Login extends Model

{

    public $login;
    public $password;
    public $email;

    public function rules()
    {
        return [

            [['login','password'],'required'],
            ['password','validatePassword']


        ];
    }

        public function validatePassword($attribute,$params)
        {

            if(!$this->hasErrors()) // если нет ошибок в валидации
            {
                $user = $this->getUser(); // получаем пользователя для дальнейшего сравнения пароля
                if(!$user || !$user->validatePassword($this->password))
                {
                    //если мы НЕ нашли в базе такого пользователя
                    //или введенный пароль и пароль пользователя в базе НЕ равны ТО,
                    $this->addError($attribute,'Пароль или логин введены неверно');
                    //добавляем новую ошибку для атрибута password о том что пароль или имейл введены не верно
                }
            }

        }


    public function getUser()
    {
        return User::findOne(['login'=>$this->login]); // а получаем мы его по введенному login
    }
}