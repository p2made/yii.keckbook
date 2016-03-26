<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
	<h1><?= Html::encode($this->title) ?></h1>

	<div class="container">
		 <div class="col-lg-4 col-lg-offset-4">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title">Please fill out the following fields to login:</h3>
				</div>
				<div class="panel-body">
					<?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
						<?= $form->field($model, 'username') ?>
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
