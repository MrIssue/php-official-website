<?php


namespace app\models;


use yii\db\ActiveRecord;

class ProductImage extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%product_images}}';
    }
}