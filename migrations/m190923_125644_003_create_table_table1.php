<?php

use yii\db\Migration;

class m190923_125644_003_create_table_table1 extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%table1}}', [
            'id' => $this->primaryKey(),
        ], $tableOptions);

    }

    public function down()
    {
        $this->dropTable('{{%table1}}');
    }
}
