<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "controleGastos".
 *
 * @property int $id
 * @property int $mes
 * @property float $entrada
 * @property float $saida
 * @property float $total
 * @property float $mete
 * @property string $ano
 * @property string $descricao
 */
class ControleGastos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'controleGastos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'mes', 'entrada', 'saida', 'total', 'mete', 'ano', 'descricao'], 'required'],
            [['id', 'mes'], 'integer'],
            [['entrada', 'saida', 'total', 'mete'], 'number'],
            [['ano'], 'safe'],
            [['descricao'], 'string', 'max' => 250],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'mes' => 'Mes',
            'entrada' => 'Entrada',
            'saida' => 'Saida',
            'total' => 'Total',
            'mete' => 'Mete',
            'ano' => 'Ano',
            'descricao' => 'Descricao',
        ];
    }
}
