<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Karya;

/**
 * KaryaSearch represents the model behind the search form about `backend\models\Karya`.
 */
class KaryaSearch extends Karya
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_karya', 'tahun_karya'], 'integer'],
            [['id_user', 'id_kelas', 'nama_karya', 'keterangan_karya'], 'safe'],
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
        $query = Karya::find();

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

        $query->joinWith('usersUser');
        $query->joinWith('kelasesKelas');

        // grid filtering conditions
        $query->andFilterWhere([
            'id_karya' => $this->id_karya,
            'tahun_karya' => $this->tahun_karya,
        ]);

        $query->andFilterWhere(['like', 'nama_karya', $this->nama_karya])
            ->andFilterWhere(['like', 'keterangan_karya', $this->keterangan_karya])
            ->andFilterWhere(['like', 'user.first_name', $this->id_user])
            ->andFilterWhere(['like', 'kelas.nama_kelas', $this->id_kelas]);

        return $dataProvider;
    }
}
