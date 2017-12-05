<?php

use yii\db\Migration;

class m171205_190528_alter_table_users extends Migration
{
    public function safeUp()
    {
        $this->addColumn('users', 'open_key', $this->text());
    }

    public function safeDown()
    {
        return false;
    }
}
