<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%product_images}}`.
 */
class m200519_075025_create_product_images_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%product_images}}', [
            'product_pid' => $this->string()->comment('产品id'),
            'cover' => $this->boolean()->comment('是否为首图'),
            'url' => $this->string()->comment('图片链接'),
            'alt' => $this->string()->null()->comment('图片描述')
        ]);
        $this->createIndex('idx-product-image-pid', 'product_images', 'product_pid,cover');
        $this->addForeignKey('fx-product-image-pid', '{{%product_images}}', 'product_pid', '{{%products}}', 'pid', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%product_images}}');
    }
}
