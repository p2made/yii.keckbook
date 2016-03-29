<?php
/**
 * signup.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2016
 * @author Pedro Plowman
 * @package p2made/yii.keckbook
 * @license MIT
 */

/*
 * @var $this yii\web\View
 * @var $form yii\bootstrap\ActiveForm
 * @var $model \frontend\models\SignupForm
 */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Signup';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">

	<div class="container">
		<br><h2 class="text-center">Sign up for yii.keckbook</h2>

		<div class="col-md-4 col-md-offset-4">
			<div class="panel panel-info">
				<?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

					<?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

					<?= $form->field($model, 'email') ?>

					<?= $form->field($model, 'password')->passwordInput() ?>

					<div class="form-group">
						<?= Html::submitButton('Signup', [
							'class' => 'btn btn-primary',
							'name' => 'signup-button'
						]) ?>
					</div>

				<?php ActiveForm::end(); ?>
			</div>
		</div>
	</div>

</div>
