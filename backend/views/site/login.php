<?php
/**
 * login.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2016
 * @author Pedro Plowman
 * @package p2made/yii.keckbook
 * @license MIT
 */

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">

	<div class="container">
		<br><h2 class="text-center">Sign in to yii.keckbook.hq</h2>

		<div class="col-md-4 col-md-offset-4">
			<div class="panel panel-info">
				<div class="panel-body">
					<?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

						<?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

						<?= $form->field($model, 'password')->passwordInput() ?>

						<?= $form->field($model, 'rememberMe')->checkbox() ?>

						<div style="color:#999;margin:1em 0">
							If you forgot your password you can
							<?= Html::a('reset it', ['site/request-password-reset']) ?>.
						</div>

						<div class="form-group">
							<?= Html::submitButton('Login', [
								'class' => 'btn btn-primary',
								'name' => 'login-button'
							]) ?>
						</div>

					<?php ActiveForm::end(); ?>
				</div>
			</div>
		 </div>
	</div>

</div>
