<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%types}}`.
 */
class m200519_095317_create_types_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%types}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'desc' => $this->string()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%types}}');
    }
}
