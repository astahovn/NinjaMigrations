<?php

use yii\db\Migration;

class m171109_194857_alter_table_sessions extends Migration
{
    public function safeUp()
    {
        $this->addColumn('sessions', 'data', $this->text());
    }

    public function safeDown()
    {
        return false;
    }

}
