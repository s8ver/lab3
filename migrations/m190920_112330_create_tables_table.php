<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%tables}}`.
 */
class m190920_112330_create_tables_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function Up()
    {
         $this->createTable('table1', [
            'id' => $this->primaryKey(),
        ]);

        $this->createTable('table2', [
            'id' => $this->primaryKey(),
        ]);

        $this->createTable('table3', [
            'id' => $this->primaryKey(),
            'tbl1_id' => $this->integer(),
            'tbl2_id' => $this->integer(),
        ]);

        $this->createTable('table4', [
            'id' => $this->primaryKey(),
            'Other_tbl1_id' => $this->integer(),
            'Other_tbl2_id' => $this->integer(),

        ]);

        $this->addForeignKey(
            'fk-post_tag-post_id1',
            'table3',
            'tbl1_id',
            'table1',
            'id',
            'CASCADE'
        );

        $this->addForeignKey(
            'fk-post_tag-post_id2',
            'table3',
            'tbl2_id',
            'table2',
            'id',
            'CASCADE'
        );

        $this->addForeignKey(
            'fk-post_tag-post_id3',
            'table4',
            'Other_tbl1_id',
            'table1',
            'id',
            'CASCADE'
        );

        $this->addForeignKey(
            'fk-post_tag-post_id4',
            'table4',
            'Other_tbl2_id',
            'table2',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function Down()
    {
        $this->dropTable('{{%tables}}');
    }
}
