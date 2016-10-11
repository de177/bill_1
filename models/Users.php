<?php

namespace app\models;

use yii\db\ActiveRecord;


class Users extends ActiveRecord
{

    public function setPassword($password)
    {

        $this->password = sha1($password);

    }

}