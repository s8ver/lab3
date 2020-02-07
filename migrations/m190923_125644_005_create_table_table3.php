<?php

use yii\db\Migration;

class m190923_125644_005_create_table_table3 extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%table3}}', [
            'id' => $this->primaryKey(),
            'tbl1_id' => $this->integer(),
            'tbl2_id' => $this->integer(),
        ], $tableOptions);

        $this->addForeignKey('fk-post_tag-post_id1', '{{%table3}}', 'tbl1_id', '{{%table1}}', 'id', 'CASCADE', 'RESTRICT');
        $this->addForeignKey('fk-post_tag-post_id2', '{{%table3}}', 'tbl2_id', '{{%table2}}', 'id', 'CASCADE', 'RESTRICT');
    }

    public function down()
    {
        $this->dropTable('{{%table3}}');
    }
}
