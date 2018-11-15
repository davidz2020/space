<?php

namespace books\models;

use books\models\Person;
use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * PersonSearch represents the model behind the search form of `books\models\Person`.
 */
class PersonSearch extends Person {
	/**
	 * @inheritdoc
	 */
	public function rules() {
		return [
			[['userid', 'age'], 'integer'],
			[['username'], 'safe'],
		];
	}

	/**
	 * @inheritdoc
	 */
	public function scenarios() {
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
	public function search($params) {

		$query = Person::find();

		// add conditions that should always apply here

		$this->load($params);

		if (!$this->validate()) {
			// uncomment the following line if you do not want to return any records when validation fails
			// $query->where('0=1');
			return $dataProvider;
		}

		// grid filtering conditions
		$query->andFilterWhere([
			'userid' => $this->userid,
			'age' => $this->age,
		]);

		$query->andFilterWhere(['like', 'username', $this->username]);

		$dataProvider = new ActiveDataProvider([
			'query' => $query,
			'pagination' => ['pageSize' => 10],

		]);
		return $dataProvider;
	}
}
