<?php

use yii\db\Schema;
use yii\db\Migration;

class m150820_003019_add_timestamp_support extends Migration
{
    public function up()
    {
        $this->addColumn('country','created_at', Schema::TYPE_INTEGER.' NULL');
        $this->addColumn('country','updated_at', Schema::TYPE_INTEGER.' NULL');
    }

    public function down()
    {
        $this->dropColumn('country','created_at');
        $this->dropColumn('country','updated_at');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }
    
    public function safeDown()
    {
    }
    */
}
