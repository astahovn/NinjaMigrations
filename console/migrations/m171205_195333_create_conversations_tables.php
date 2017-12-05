<?php

use yii\db\Migration;

class m171205_195333_create_conversations_tables extends Migration
{
    public function safeUp()
    {
        if ($this->db->schema->getTableSchema('conversations', true) === null) {
            $this->createTable('conversations', [
                'id' => $this->primaryKey(),
                'theme' => $this->string(255),
            ]);
        }

        if ($this->db->schema->getTableSchema('conversation_users', true) === null) {
            $this->createTable('conversation_users', [
                'id' => $this->primaryKey(),
                'conversation_id' => $this->bigInteger(),
                'user_id' => $this->bigInteger(),
                'key' => $this->string(255),
            ]);
        }

        if ($this->db->schema->getTableSchema('conversation_messages', true) === null) {
            $this->createTable('conversation_messages', [
                'id' => $this->primaryKey(),
                'message' => $this->text(),
                'user_id' => $this->bigInteger(),
            ]);
        }

    }

    public function safeDown()
    {
        return false;
    }
}
