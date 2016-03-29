<?php
/**
 * signup.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2016
 * @author Pedro Plowman
 * @package p2made/yii.keckbook
 * @license MIT
 */

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
	<h1><?= Html::encode($this->title) ?></h1>

	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">

			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title">Please fill out the following fields to signup...</h3>
				</div>

				<div class="panel-body">

					<?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

						<?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

						<?= $form->field($model, 'email') ?>

						<?= $form->field($model, 'password')->passwordInput() ?>

						<div class="form-group">
							<?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
						</div>

					<?php ActiveForm::end(); ?>

				</div>
			</div>

		</div>
	</div>
</div>
