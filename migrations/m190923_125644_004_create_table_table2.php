<?php

use yii\db\Migration;

class m190923_125644_004_create_table_table2 extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%table2}}', [
            'id' => $this->primaryKey(),
        ], $tableOptions);

    }

    public function down()
    {
        $this->dropTable('{{%table2}}');
    }
}
