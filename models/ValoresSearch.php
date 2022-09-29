<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Valores;

/**
 * ValoresSearch represents the model behind the search form about `app\models\Valores`.
 */
class ValoresSearch extends Valores
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idvalores', 'hombres', 'mujeres', 'pertenecenEtnia', 'HabitanEnElEstado', 'DiscapacidadMotriz', 'DiscapacidadMental', 'DiscapacidadSensorial', 'DiscapacidadPsicosocial', 'DiscapacidadComunicacion', 'indicadores_idindicadores'], 'integer'],
            [['tipo', 'ingenieria'], 'safe'],
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
        $query = Valores::find();

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
            'idvalores' => $this->idvalores,
            'hombres' => $this->hombres,
            'mujeres' => $this->mujeres,
            'pertenecenEtnia' => $this->pertenecenEtnia,
            'HabitanEnElEstado' => $this->HabitanEnElEstado,
            'DiscapacidadMotriz' => $this->DiscapacidadMotriz,
            'DiscapacidadMental' => $this->DiscapacidadMental,
            'DiscapacidadSensorial' => $this->DiscapacidadSensorial,
            'DiscapacidadPsicosocial' => $this->DiscapacidadPsicosocial,
            'DiscapacidadComunicacion' => $this->DiscapacidadComunicacion,
            'indicadores_idindicadores' => $this->indicadores_idindicadores,
        ]);

        $query->andFilterWhere(['like', 'tipo', $this->tipo])
            ->andFilterWhere(['like', 'ingenieria', $this->ingenieria]);

        return $dataProvider;
    }
}
