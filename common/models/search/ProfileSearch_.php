<?php
/**
 * ProfileSearch.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2016
 * @author Pedro Plowman
 * @package p2made/yii.keckbook
 * @license MIT
 */

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Profile;

/**
 * ProfileSearch represents the model behind the search form about `common\models\Profile`.
 */
class ProfileSearch extends Profile
{
	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['id', 'user_id', 'gender_id', 'created_at', 'created_by', 'updated_at', 'updated_by'], 'integer'],
			[['first_name', 'last_name', 'birthdate', 'about'], 'safe'],
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
		$query = Profile::find();

		$dataProvider = new ActiveDataProvider([
			'query' => $query,
		]);

		$this->load($params);

		if (!$this->validate()) {
			// uncomment the following line if you do not want to any records when validation fails
			// $query->where('0=1');
			return $dataProvider;
		}

		$query->andFilterWhere([
			'id' => $this->id,
			'user_id' => $this->user_id,
			'birthdate' => $this->birthdate,
			'gender_id' => $this->gender_id,
			'created_at' => $this->created_at,
			'updated_at' => $this->updated_at,
		]);

		$query->andFilterWhere(['like', 'first_name', $this->first_name])
			->andFilterWhere(['like', 'last_name', $this->last_name])
			->andFilterWhere(['like', 'about', $this->about]);

		return $dataProvider;
	}
}
