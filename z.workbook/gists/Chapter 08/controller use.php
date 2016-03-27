	namespace frontend\controllers;
	
	use Yii;
	use frontend\models\Profile;
	use frontend\models\search\ProfileSearch;
	use yii\web\Controller;
	use yii\web\NotFoundHttpException;
	use yii\filters\VerbFilter;
	use common\models\PermissionHelpers;
	use common\models\RecordHelpers;