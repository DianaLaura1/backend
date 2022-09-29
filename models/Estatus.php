<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "estatus".
 *
 * @property integer $idestatus
 * @property string $tipoEstatus
 *
 * @property Periodicidad[] $periodicidads
 */
class Estatus extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'estatus';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tipoEstatus'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idestatus' => 'Idestatus',
            'tipoEstatus' => 'Tipo Estatus',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPeriodicidads()
    {
        return $this->hasMany(Periodicidad::className(), ['estatus_idestatus' => 'idestatus']);
    }
}
