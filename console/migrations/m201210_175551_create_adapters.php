<?php

use yii\db\Migration;

/**
 * Class m201210_175551_create_adapters
 */
class m201210_175551_create_adapters extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('adapters', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'class' => $this->string()->notNull()
        ]);

        $this->createIndex('unq_adapters_class', 'adapters', 'class', true);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m201210_175551_create_adapters cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201210_175551_create_adapters cannot be reverted.\n";

        return false;
    }
    */
}
