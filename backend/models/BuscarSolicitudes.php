<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Solicitudes;

/**
 * BuscarSolicitudes represents the model behind the search form about `backend\models\Solicitudes`.
 */
class BuscarSolicitudes extends Solicitudes
{
    /**
     * @inheritdoc
     */
    public $solicitanteName;

    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['solicitanteName'],'safe'],
            [['titulo', 'fecha', 'solicitante', 'monto', 'comentario', 'usuario', 'fecha_actualizacion'], 'safe'],
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
        $query = Solicitudes::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'fecha' => $this->fecha,
            'fecha_actualizacion' => $this->fecha_actualizacion,
        ]);

        $query->andFilterWhere(['like', 'titulo', $this->titulo])
            ->andFilterWhere(['like', 'solicitante', $this->solicitante])
            ->andFilterWhere(['like', 'monto', $this->monto])
            ->andFilterWhere(['like', 'comentario', $this->comentario])
            ->andFilterWhere(['like', 'usuario', $this->usuario]);

        return $dataProvider;
    }
}
