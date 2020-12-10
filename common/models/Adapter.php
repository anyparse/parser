<?php

namespace common\models;

use yii\db\ActiveRecord;

class Adapter extends ActiveRecord
{
    public static function tableName()
    {
        return 'adapters';
    }
}