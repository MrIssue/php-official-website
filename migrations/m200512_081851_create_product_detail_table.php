<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%product_detail}}`.
 */
class m200512_081851_create_product_detail_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%product_detail}}', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%product_detail}}');
    }
}
