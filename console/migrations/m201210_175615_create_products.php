<?php

use yii\db\Migration;

/**
 * Class m201210_175615_create_products
 */
class m201210_175615_create_products extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable(
            'products',
            [
                'id' => $this->primaryKey(),
                'adapter_id' => $this->integer(),
                'url' => $this->string()->notNull()->unique()
            ]
        );

        $this->createIndex('unq_products_url', 'products', 'url', true);

        $this->addForeignKey(
            'fk_products_adapters',
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
        echo "m201210_175615_create_products cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201210_175615_create_products cannot be reverted.\n";

        return false;
    }
    */
}
