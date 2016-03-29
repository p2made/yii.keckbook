<?php
/**
 * _form.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2016
 * @author Pedro Plowman
 * @package p2made/yii.keckbook
 * @license MIT
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;

/**
 * @var yii\web\View $this
 * @var app\models\Profile $model
 * @var yii\widgets\ActiveForm $form
 */
?>
<div class="profile-form">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">

			<div class="panel panel-info">
				<div class="panel-body">

					<?php $form = ActiveForm::begin(); ?>

					<div class="col-md-12">
						<?= $form->field($model, 'first_name')->textInput(['maxlength' => 45]) ?>
					</div>
					<div class="col-md-12">
						<?= $form->field($model, 'last_name')->textInput(['maxlength' => 45]) ?>
					</div>

					<div class="col-md-6">
						<?php echo $form->field(
							$model,'birthdate'
						)->widget(DatePicker::className(), [
							'dateFormat' => 'yyyy-MM-dd',
							'clientOptions' => [
								'yearRange' => '-115:+0',
								'changeYear' => true,
							],
						]); ?>
					</div>
					<div class="col-md-6">
						<?= $form->field(
							$model, 'gender_id'
						)->dropDownList(
							$model->genderList, ['prompt' => 'Select...' ]
						);?>
					</div>

					<div class="col-md-12">
						<div class="form-group pull-right">
							<?= Html::submitButton(
								$model->isNewRecord ?
									'Create' : 'Update',
								['class' => $model->isNewRecord ?
									'btn btn-success' : 'btn btn-primary']
							) ?>
						</div>
					</div>

					<?php ActiveForm::end(); ?>

				</div>
			</div>

		</div>
	</div>
</div>
