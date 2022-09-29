<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "programas_has_indicadores".
 *
 * @property integer $programas_idprogramas
 * @property integer $indicadores_idindicadores
 *
 * @property Indicadores $indicadoresIdindicadores
 * @property Programas $programasIdprogramas
 */
class ProgramasHasIndicadores extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'programas_has_indicadores';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['programas_idprogramas', 'indicadores_idindicadores'], 'required'],
            [['programas_idprogramas', 'indicadores_idindicadores'], 'integer'],
            [['indicadores_idindicadores'], 'exist', 'skipOnError' => true, 'targetClass' => Indicadores::className(), 'targetAttribute' => ['indicadores_idindicadores' => 'idindicadores']],
            [['programas_idprogramas'], 'exist', 'skipOnError' => true, 'targetClass' => Programas::className(), 'targetAttribute' => ['programas_idprogramas' => 'idprogramas']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'programas_idprogramas' => 'Programas Idprogramas',
            'indicadores_idindicadores' => 'Indicadores Idindicadores',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIndicadoresIdindicadores()
    {
        return $this->hasOne(Indicadores::className(), ['idindicadores' => 'indicadores_idindicadores']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProgramasIdprogramas()
    {
        return $this->hasOne(Programas::className(), ['idprogramas' => 'programas_idprogramas']);
    }
}
