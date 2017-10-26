<?php

use yii\db\Migration;

/**
 * Handles the creation of table `sessions`.
 */
class m171026_214100_create_sessions_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        if ($this->db->schema->getTableSchema('sessions', true) === null) {
            $this->createTable('sessions', [
                'id' => $this->primaryKey(),
                'user_id' => $this->bigInteger(),
                'auth_token' => $this->string(128),
                'date_login' => $this->timestamp(),
                'user_agent' => $this->string(255),
            ]);
        }
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
    }
}
