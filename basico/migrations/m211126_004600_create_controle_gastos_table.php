<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%controle_gastos}}`.
 */
class m211126_004600_create_controle_gastos_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%controle_gastos}}', [
            'id' => $this->primaryKey(),
            'descricao' => $this->string()->notNull(),
            'entrada' => $this->double()->notNull(),
            'saida' => $this->double()->notNull(),
            'total' => $this->double()->notNull(),
            'mete' => $this->double()->notNull(),
            'mes' => $this->integer()->notNull(),
            'ano' => $this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%controle_gastos}}');
    }
}
