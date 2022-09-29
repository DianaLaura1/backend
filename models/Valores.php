<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "valores".
 *
 * @property integer $idvalores
 * @property string $tipo
 * @property integer $hombres
 * @property integer $mujeres
 * @property integer $pertenecenEtnia
 * @property integer $HabitanEnElEstado
 * @property string $ingenieria
 * @property integer $DiscapacidadMotriz
 * @property integer $DiscapacidadMental
 * @property integer $DiscapacidadSensorial
 * @property integer $DiscapacidadPsicosocial
 * @property integer $DiscapacidadComunicacion
 * @property integer $indicadores_idindicadores
 *
 * @property Indicadores $indicadoresIdindicadores
 */
class Valores extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'valores';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tipo', 'hombres', 'mujeres', 'pertenecenEtnia', 'HabitanEnElEstado', 'ingenieria', 'DiscapacidadMotriz', 'DiscapacidadMental', 'DiscapacidadSensorial', 'DiscapacidadPsicosocial', 'DiscapacidadComunicacion', 'indicadores_idindicadores'], 'required'],
            [['hombres', 'mujeres', 'pertenecenEtnia', 'HabitanEnElEstado', 'DiscapacidadMotriz', 'DiscapacidadMental', 'DiscapacidadSensorial', 'DiscapacidadPsicosocial', 'DiscapacidadComunicacion', 'indicadores_idindicadores'], 'integer'],
            [['tipo'], 'string', 'max' => 1],
            [['ingenieria'], 'string', 'max' => 45],
            [['indicadores_idindicadores'], 'exist', 'skipOnError' => true, 'targetClass' => Indicadores::className(), 'targetAttribute' => ['indicadores_idindicadores' => 'idindicadores']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idvalores' => '',
            'tipo' => 'Tipo',
            'hombres' => 'Hombres',
            'mujeres' => 'Mujeres',
            'pertenecenEtnia' => 'Pertenecen Etnia',
            'HabitanEnElEstado' => 'Habitan en el Estado',
            'ingenieria' => 'Ingeniería',
            'DiscapacidadMotriz' => 'Disc.Motríz',
            'DiscapacidadMental' => 'Disc.Mental',
            'DiscapacidadSensorial' => 'Disc.Sensorial',
            'DiscapacidadPsicosocial' => 'Disc.Psicosicial',
            'DiscapacidadComunicacion' => 'Disc.Comunicación',
            'indicadores_idindicadores' => 'Indicador',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIndicadoresIdindicadores()
    {
        return $this->hasOne(Indicadores::className(), ['idindicadores' => 'indicadores_idindicadores']);
    }
}
