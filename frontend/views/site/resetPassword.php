<?php
/**
 * resetPassword.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2016
 * @author Pedro Plowman
 * @package p2made/yii.keckbook
 * @license MIT
 */

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ResetPasswordForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Reset password';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-reset-password">
	<h1><?= Html::encode($this->title) ?></h1>

	<p>Please choose your new password:</p>

	<div class="row">
		<div class="col-lg-5">
			<?php $form = ActiveForm::begin(['id' => 'reset-password-form']); ?>

				<?= $form->field($model, 'password')->passwordInput(['autofocus' => true]) ?>

				<div class="form-group">
					<?= Html::submitButton('Save', ['class' => 'btn btn-primary']) ?>
				</div>

			<?php ActiveForm::end(); ?>
		</div>
	</div>
</div>
