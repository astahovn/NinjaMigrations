<?php

use yii\db\Migration;

class m180314_200017_alter_table_users extends Migration
{
    public function safeUp()
    {
        $this->addColumn('users', 'private_key_check', $this->text());
    }

    public function safeDown()
    {
        return false;
    }
}
