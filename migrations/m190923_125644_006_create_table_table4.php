<?php

use yii\db\Migration;

class m190923_125644_006_create_table_table4 extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%table4}}', [
            'id' => $this->primaryKey(),
            'Other_tbl1_id' => $this->integer(),
            'Other_tbl2_id' => $this->integer(),
        ], $tableOptions);

        $this->addForeignKey('fk-post_tag-post_id3', '{{%table4}}', 'Other_tbl1_id', '{{%table1}}', 'id', 'CASCADE', 'RESTRICT');
        $this->addForeignKey('fk-post_tag-post_id4', '{{%table4}}', 'Other_tbl2_id', '{{%table2}}', 'id', 'CASCADE', 'RESTRICT');
    }

    public function down()
    {
        $this->dropTable('{{%table4}}');
    }
}
