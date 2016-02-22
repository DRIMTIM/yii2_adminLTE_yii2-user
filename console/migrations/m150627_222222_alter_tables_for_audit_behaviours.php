<?php

use yii\db\Schema;
use yii\db\Migration;

class m150627_222222_alter_tables_for_audit_behaviours extends Migration
{
    public function up()
    {
    	/*$this->addColumn('providers','created_at', Schema::TYPE_INTEGER.' NULL');
        $this->addColumn('providers','updated_at', Schema::TYPE_INTEGER.' NULL');
        $this->addColumn('providers','created_by', Schema::TYPE_INTEGER.' NULL');
        $this->addColumn('providers','updated_by', Schema::TYPE_INTEGER.' NULL');*/
    }

    public function down()
    {
/*        $this->dropColumn('providers','created_at');
        $this->dropColumn('providers','updated_at');
        $this->dropColumn('providers','created_by');
        $this->dropColumn('providers','updated_by');*/
    }
}
