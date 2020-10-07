<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%pdf}}`.
 */
class m201007_183134_create_pdf_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%pdf}}', [
            'id' => $this->primaryKey(),
            'language' => $this->string(5)->notNull(),
            'text' => $this->text()->notNull(),
            'created_at' => $this->datetime()->notNull(),
            'updated_at' => $this->datetime(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%pdf}}');
    }
}
