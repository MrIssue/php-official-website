<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%certificates}}`.
 */
class m200519_093342_create_certificates_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%certificates}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'image' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%certificates}}');
    }
}
