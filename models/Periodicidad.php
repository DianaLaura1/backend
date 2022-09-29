<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "periodicidad".
 *
 * @property integer $idperiodicidad
 * @property string $fechaInicio
 * @property string $fechaFinal
 * @property integer $estatus_idestatus
 *
 * @property Indicadores[] $indicadores
 * @property Estatus $estatusIdestatus
 */
class Periodicidad extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'periodicidad';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fechaInicio', 'fechaFinal'], 'safe'],
            [['estatus_idestatus'], 'required'],
            [['estatus_idestatus'], 'integer'],
            [['estatus_idestatus'], 'exist', 'skipOnError' => true, 'targetClass' => Estatus::className(), 'targetAttribute' => ['estatus_idestatus' => 'idestatus']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idperiodicidad' => 'Idperiodicidad',
            'fechaInicio' => 'Fecha Inicio',
            'fechaFinal' => 'Fecha Final',
            'estatus_idestatus' => 'Estatus Idestatus',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIndicadores()
    {
        return $this->hasMany(Indicadores::className(), ['periodicidad_idperiodicidad' => 'idperiodicidad']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEstatusIdestatus()
    {
        return $this->hasOne(Estatus::className(), ['idestatus' => 'estatus_idestatus']);
    }
}
