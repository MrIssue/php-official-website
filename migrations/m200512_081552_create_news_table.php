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
            'subtitle' => $this->string()->comment('子标题'),
            'author' => $this->string()->comment('作者'),
            'keywords' => $this->text()->comment('关键字'),
            'summary' => $this->string()->comment('摘要'),
            'content' => $this->getDb()->getSchema()->createColumnSchemaBuilder('mediumtext'),
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
