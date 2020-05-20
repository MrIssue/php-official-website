<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%about}}`.
 */
class m200519_081457_create_about_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%about}}', [
            'title' => $this->string(),
            'content' => $this->text(),
            'address' => $this->string()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%about}}');
    }
}
