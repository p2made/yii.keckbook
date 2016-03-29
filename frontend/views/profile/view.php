<?php
/**
 * view.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2016
 * @author Pedro Plowman
 * @package p2made/yii.keckbook
 * @license MIT
 */

use yii\helpers\Html;
use yii\widgets\DetailView;

use common\models\PermissionHelpers;

/* @var $this yii\web\View */
/* @var $model common\models\Profile */

$this->title = $model->user->username . "'s Profile";
$this->params['breadcrumbs'][] = ['label' => 'Profiles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profile-view">

	<h1><?= Html::encode($this->title) ?></h1>

	<p>
		<?Php
			//this is not necessary but in here as example
			if (PermissionHelpers::userMustBeOwner('profile', $model->id)) {
				echo Html::a('Update',
					['update', 'id' => $model->id],
					['class' => 'btn btn-primary']
				);
			}
		?>

		<?= Html::a('Delete', ['delete', 'id' => $model->id], [
			'class' => 'btn btn-danger',
			'data' => [
				'confirm' => Yii::t('app', 'Are you sure to delete this item?'),
				'method' => 'post',
			],
		]) ?>
	</p>

	<?= DetailView::widget([
		'model' => $model,
		'attributes' => [
			//'id',
			'user.username',
			'first_name',
			'last_name',
			'birthdate',
			'gender.gender_name',
			'created_at',
			'updated_at',
			//'user_id',
		],
	]) ?>

</div>
