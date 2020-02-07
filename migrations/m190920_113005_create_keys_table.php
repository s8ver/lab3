<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%keys}}`.
 */
class m190920_113005_create_keys_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('table4', [
            'id' => $this->primaryKey(),
            'Other_tbl1_id' => $this->integer(),
            'Other_tbl2_id' => $this->integer(),

        ]);
		
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
    public function safeDown()
    {
        $this->dropTable('{{%keys}}');
    }
}
