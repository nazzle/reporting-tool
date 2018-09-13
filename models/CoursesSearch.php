<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Courses;

/**
 * CoursesSearch represents the model behind the search form of `app\models\Courses`.
 */
class CoursesSearch extends Courses
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'sector_id', 'sponsorship_id', 'budget_id', 'course_status'], 'integer'],
            [['course_name', 'category', 'duration', 'start_date', 'finish_date', 'venue', 'objective', 'facilitator'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Courses::find();

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
            'id' => $this->id,
            'sector_id' => $this->sector_id,
            'start_date' => $this->start_date,
            'finish_date' => $this->finish_date,
            'sponsorship_id' => $this->sponsorship_id,
            'budget_id' => $this->budget_id,
            'course_status' => $this->course_status,
        ]);

        $query->andFilterWhere(['like', 'course_name', $this->course_name])
            ->andFilterWhere(['like', 'category', $this->category])
            ->andFilterWhere(['like', 'duration', $this->duration])
            ->andFilterWhere(['like', 'venue', $this->venue])
            ->andFilterWhere(['like', 'objective', $this->objective])
            ->andFilterWhere(['like', 'facilitator', $this->facilitator]);

        return $dataProvider;
    }
}
