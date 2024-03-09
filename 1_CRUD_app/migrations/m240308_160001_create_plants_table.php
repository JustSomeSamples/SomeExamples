<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%plants}}`.
 */
class m240308_160001_create_plants_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp(): void
    {
        $this->createTable('{{%plants}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'height' => $this->integer(),
            'age' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown(): void
    {
        $this->dropTable('{{%plants}}');
    }
}
