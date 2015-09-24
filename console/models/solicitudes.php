<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "solicitudes".
 *
 * @property integer $id
 * @property string $titulo
 * @property string $fecha
 * @property string $solicitante
 * @property string $monto
 * @property string $comentario
 * @property string $usuario
 * @property string $fecha_actualizacion
 */
class solicitudes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'solicitudes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['titulo', 'fecha', 'solicitante', 'monto', 'comentario', 'usuario', 'fecha_actualizacion'], 'required'],
            [['fecha', 'fecha_actualizacion'], 'safe'],
            [['titulo', 'solicitante'], 'string', 'max' => 50],
            [['monto', 'usuario'], 'string', 'max' => 10],
            [['comentario'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'titulo' => 'Titulo',
            'fecha' => 'Fecha',
            'solicitante' => 'Solicitante',
            'monto' => 'Monto',
            'comentario' => 'Comentario',
            'usuario' => 'Usuario',
            'fecha_actualizacion' => 'Fecha Actualizacion',
        ];
    }
}
