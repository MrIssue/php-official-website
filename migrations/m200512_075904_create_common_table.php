<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%common}}`.
 */
class m200512_075904_create_common_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%common}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->comment('站点名称'),
            'keywords' => $this->text()->comment('站点关键字'),
            'description' => $this->text()->comment('站点描述'),
            'favicon' => $this->string()->comment('favicon'),
            'copyright' => $this->string(50)->comment('备案信息'),
            'enable' => $this->boolean()->comment('站点状态'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%common}}');
    }
}
