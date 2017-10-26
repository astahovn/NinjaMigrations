<?php

use yii\db\Migration;

class m171026_205215_create_users_table extends Migration
{
    public function up()
    {
        if ($this->db->schema->getTableSchema('users', true) === null) {
            $this->createTable('users', [
                'id' => $this->primaryKey(),
                'username' => $this->string(255),
                'password' => $this->string(255),
                'nick' => $this->string(255),
            ]);
        }
    }

    public function down()
    {
    }
}
