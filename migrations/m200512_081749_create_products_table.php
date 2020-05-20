<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%products}}`.
 */
class m200512_081749_create_products_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%products}}', [
            'id' => $this->primaryKey(),
            'pid' => $this->string(100)->unique()->comment('产品id'),
            'type_id' => $this->integer()->comment('类型id'),
            'name' => $this->string(100)->comment('产品名称'),
            'standard' => $this->string()->comment('产品类型|规格'),
            'desc' => $this->string()->comment('描述'),
            'detail' => $this->string()->comment('详细介绍'),
            'sort' => $this->integer()->defaultValue(0)->comment('排序比重'),
            'new' => $this->boolean()->defaultValue(false)->comment('是否为新品'),
            'view_num' => $this->integer()->defaultValue(0),
            'created_at' => $this->dateTime()->null(),
            'updated_at' => $this->dateTime()->null()
        ]);
//        $this->addPrimaryKey('pk-pid', '{{%products}}', 'pid');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%products}}');
    }
}
