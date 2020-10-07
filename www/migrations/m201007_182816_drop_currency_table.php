<?php

use yii\db\Migration;

/**
 * Handles the dropping of table `{{%currency}}`.
 */
class m201007_182816_drop_currency_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropTable('{{%currency}}');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->createTable('{{%currency}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(5)->notNull(),
            'rate' => $this->money(8, 2)->notNull(),
            'date' => $this->string(10)->notNull(),
            'created_at' => $this->dateTime()->notNull(),
        ]);
    }
}
