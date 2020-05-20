<?php


namespace app\models;


use yii\db\ActiveRecord;

class News extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%news}}';
    }

    public function attributes()
    {
        return [
            'title' => '标题',
            'subtitle' => '子标题',
            'author' => '作者',
            'keywords' => '关键词',
            'summary' => '摘要',
            'content' => '内容',
        ];
    }

    public function rules()
    {
        return [
            [['title', 'summary', 'content'], 'required']
        ];
    }
}