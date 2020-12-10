<?php

use yii\db\Migration;

/**
 * Class m201210_175605_create_categories
 */
class m201210_175605_create_categories extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable(
            'categories',
            [
                'id' => $this->primaryKey(),
                'adapter_id' => $this->integer(),
                'url' => $this->string()->notNull()->unique()
            ]
        );

        $this->createIndex('unq_categories_url', 'categories', 'url', true);

        $this->addForeignKey(
            'fk_categories_adapters',
            'categories',
            'adapter_id',
            'adapters',
            'id',
            'RESTRICT',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m201210_175605_create_categories cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201210_175605_create_categories cannot be reverted.\n";

        return false;
    }
    */
}
