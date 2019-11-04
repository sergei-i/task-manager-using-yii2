<?php

namespace app\models;

use yii\db\ActiveRecord;

class MyList extends ActiveRecord
{
    public function rules()
    {
        return [
            [['title', 'description'], 'required']
        ];
    }

    public static function tableName()
    {
        return 'tasks';
    }

    public static function getAll()
    {
        return self::find()->all();
    }

    public static function getOne($id)
    {
        return self::find()->where(['id' => $id])->one();
    }
}