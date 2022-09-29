<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Indicadores;

/**
 * IndicadoresSearch represents the model behind the search form about `app\models\Indicadores`.
 */
class IndicadoresSearch extends Indicadores
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idindicadores', 'meta', 'periodicidad_idperiodicidad'], 'integer'],
            [['nombre', 'objetivo', 'nivelObjetivo', 'unidadMedida', 'variableB', 'medioVerificacionB', 'variableC', 'medioVerificacionC'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Indicadores::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'idindicadores' => $this->idindicadores,
            'meta' => $this->meta,
            'periodicidad_idperiodicidad' => $this->periodicidad_idperiodicidad,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'objetivo', $this->objetivo])
            ->andFilterWhere(['like', 'nivelObjetivo', $this->nivelObjetivo])
            ->andFilterWhere(['like', 'unidadMedida', $this->unidadMedida])
            ->andFilterWhere(['like', 'variableB', $this->variableB])
            ->andFilterWhere(['like', 'medioVerificacionB', $this->medioVerificacionB])
            ->andFilterWhere(['like', 'variableC', $this->variableC])
            ->andFilterWhere(['like', 'medioVerificacionC', $this->medioVerificacionC]);

        return $dataProvider;
    }
}
