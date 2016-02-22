<?php

use yii\db\Schema;
use yii\db\Migration;

class m150915_002906_tablas_country_city extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('country', [
            'code' => ' char(2) NOT NULL PRIMARY KEY',
            'name' => Schema::TYPE_STRING . ' NOT NULL',
            'population' => Schema::TYPE_INTEGER . '(11) NOT NULL',
            'created_at' => Schema::TYPE_INTEGER . ' NOT NULL',
            'updated_at' => Schema::TYPE_INTEGER . ' NOT NULL',
        ], $tableOptions);

        $this->createTable('cities', [
            'country_code' => ' char(2) NOT NULL',
            'city_code' => 'char(2) NOT NULL PRIMARY KEY',
            'city_name' => Schema::TYPE_STRING . ' NOT NULL',
            'created_at' => Schema::TYPE_INTEGER . ' NOT NULL',
            'updated_at' => Schema::TYPE_INTEGER . ' NOT NULL',
        ], $tableOptions);

        $this->addForeignKey('cities_country_country_code_fk', 'cities','country_code','country', 'code');
    }

    public function down()
    {
        $this->dropTable('cities');
        $this->dropTable('country');
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
