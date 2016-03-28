<?php

namespace common\models;

class Gender extends \common\models\base\GenderBase
{
	/**
	 * @inheritdoc
	 */
	public function attributeLabels() {
		return [
			'id' => 'ID',
			'name' => 'Gender',
		];
	}
}
?>

<?php

namespace common\models\base;

use Yii;
use common\models\Profile;

/**
* This is the model class for table "p2m_gender".
*
 * @property integer $id
 * @property string $name
 *
		 * @property Profile[] $profiles
 */
class GenderBase extends \yii\db\ActiveRecord
{
/**
* @inheritdoc
*/
public static function tableName()
{
return '{{%gender}}';
}

/**
* @inheritdoc
*/
public function rules()
{
return [
			[['name'], 'required'],
			[['name'], 'string', 'max' => 64]
		];
}

/**
* @inheritdoc
*/
public function attributeLabels()
{
return [
	'id' => 'ID',
	'name' => 'Name',
];
}

	/**
 * @return \yii\db\ActiveQuery
 */
	public function getProfiles()
	{
	return $this->hasMany(Profile::className(), ['gender_id' => 'id']);
	}
}
