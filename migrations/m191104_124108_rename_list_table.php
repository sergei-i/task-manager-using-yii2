<?php

use yii\db\Migration;

/**
 * Class m191104_124108_rename_list_table
 */
class m191104_124108_rename_list_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->renameTable('taskslist', 'tasks');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%tasks}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191104_124108_rename_list_table cannot be reverted.\n";

        return false;
    }
    */
}
