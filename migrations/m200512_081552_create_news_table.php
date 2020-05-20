<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%news}}`.
 */
class m200512_081552_create_news_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%news}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->comment('标题'),
            'subtitle' => $this->string()->null()->comment('子标题'),
            'cover' => $this->string()->null()->comment('封面图'),
            'author' => $this->string()->defaultValue('河北圣天管件集团有限公司')->comment('作者'),
            'keywords' => $this->string()->comment('关键字'),
            'summary' => $this->string()->comment('摘要'),
            'content' => $this->getDb()->getSchema()->createColumnSchemaBuilder('mediumtext'),
            'view_num' => $this->integer()->defaultValue(0),
            'sort' => $this->integer()->defaultValue(0)->comment('排序比重'),
            'created_at' => $this->dateTime()->null(),
            'updated_at' => $this->dateTime()->null()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%news}}');
    }
}
