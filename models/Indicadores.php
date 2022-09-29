<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "indicadores".
 *
 * @property integer $idindicadores
 * @property string $nombre
 * @property string $objetivo
 * @property string $nivelObjetivo
 * @property string $unidadMedida
 * @property integer $meta
 * @property string $variableB
 * @property string $medioVerificacionB
 * @property string $variableC
 * @property string $medioVerificacionC
 * @property integer $periodicidad_idperiodicidad
 *
 * @property Periodicidad $periodicidadIdperiodicidad
 * @property ProgramasHasIndicadores[] $programasHasIndicadores
 * @property Programas[] $programasIdprogramas
 * @property Valores[] $valores
 */
class Indicadores extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'indicadores';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['meta', 'periodicidad_idperiodicidad'], 'integer'],
            [['periodicidad_idperiodicidad'], 'required'],
            [['nombre'], 'string', 'max' => 100],
            [['objetivo', 'variableB', 'variableC'], 'string', 'max' => 70],
            [['nivelObjetivo', 'unidadMedida', 'medioVerificacionB', 'medioVerificacionC'], 'string', 'max' => 45],
            [['periodicidad_idperiodicidad'], 'exist', 'skipOnError' => true, 'targetClass' => Periodicidad::className(), 'targetAttribute' => ['periodicidad_idperiodicidad' => 'idperiodicidad']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idindicadores' => 'Idindicadores',
            'nombre' => 'Nombre',
            'objetivo' => 'Objetivo',
            'nivelObjetivo' => 'Nivel Objetivo',
            'unidadMedida' => 'Unidad Medida',
            'meta' => 'Meta',
            'variableB' => 'Variable B',
            'medioVerificacionB' => 'Medio Verificacion B',
            'variableC' => 'Variable C',
            'medioVerificacionC' => 'Medio Verificacion C',
            'periodicidad_idperiodicidad' => 'Periodicidad Idperiodicidad',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPeriodicidadIdperiodicidad()
    {
        return $this->hasOne(Periodicidad::className(), ['idperiodicidad' => 'periodicidad_idperiodicidad']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProgramasHasIndicadores()
    {
        return $this->hasMany(ProgramasHasIndicadores::className(), ['indicadores_idindicadores' => 'idindicadores']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProgramasIdprogramas()
    {
        return $this->hasMany(Programas::className(), ['idprogramas' => 'programas_idprogramas'])->viaTable('programas_has_indicadores', ['indicadores_idindicadores' => 'idindicadores']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getValores()
    {
        return $this->hasMany(Valores::className(), ['indicadores_idindicadores' => 'idindicadores']);
    }
}
