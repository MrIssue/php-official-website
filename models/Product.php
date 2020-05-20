<?php


namespace app\models;


use yii\db\ActiveRecord;

class Product extends ActiveRecord
{
    public function attributes()
    {
        return [
            'pid' => '产品ID',
            'name' => '产品名称',
            'type' => '产品规格',
            'desc' => '描述信息',
            'detail' => '产品介绍'
        ];
    }

    public function rules()
    {
        return [
            [['name', 'type', 'desc', 'detail'], 'required']
        ];
    }
}