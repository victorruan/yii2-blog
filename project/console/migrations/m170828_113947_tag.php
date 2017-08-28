<?php

use yii\db\Migration;

class m170828_113947_tag extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tag}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'status' => $this->integer(1)->notNull()->defaultValue(1),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->createTable('{{%tag_blog}}', [
            'id' => $this->primaryKey(),
            'tag_id' => $this->integer()->notNull(),
            'tag_name' => $this->string()->notNull(),
            'blog_id' => $this->integer()->notNull(),
            'blog_name'=> $this->string()->notNull(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%tag}}');
        $this->dropTable('{{%tag_blog}}');
    }
}
