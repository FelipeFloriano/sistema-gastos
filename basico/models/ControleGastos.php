<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "controle_gastos".
 *
 * @property int $id
 * @property string $descricao
 * @property float $entrada
 * @property float $saida
 * @property float $total
 * @property float $mete
 * @property int $mes
 * @property int $ano
 */
class ControleGastos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'controle_gastos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['descricao', 'entrada', 'saida', 'total', 'mete', 'mes', 'ano'], 'required'],
            [['entrada', 'saida', 'total', 'mete'], 'number'],
            [['mes', 'ano'], 'integer'],
            [['descricao'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'descricao' => 'Descricao',
            'entrada' => 'Entrada',
            'saida' => 'Saida',
            'total' => 'Total',
            'mete' => 'Mete',
            'mes' => 'Mes',
            'ano' => 'Ano',
        ];
    }
}
