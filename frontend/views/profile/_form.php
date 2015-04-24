<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
//use yii\jui\DatePicker;
use kartik\datecontrol\DateControl;

/**
 * @var yii\web\View $this
 * @var app\models\Profile $model
 * @var yii\widgets\ActiveForm $form
 */
?>
<div class="profile-form">
	<?php $form = ActiveForm::begin(); ?>
	<div class="row">
		<div class="col-md-3 col-md-offset-3">
			<?= $form->field($model, 'first_name')->textInput(['maxlength' => 45]) ?>
		</div>
		<div class="col-md-3">
			<?= $form->field($model, 'last_name')->textInput(['maxlength' => 45]) ?>
		</div>
		<div class="col-md-3 col-md-offset-3">
			<?php echo $form->field($model, 'birthdate')->widget(DateControl::classname(), [
				'type'=>DateControl::FORMAT_DATE,
			]); ?>
			<p class="help-block">* please use YYYY-MM-DD format</p>
		</div>
		<div class="col-md-2 col-md-offset-1">
			<?= $form->field($model, 'gender_id')->dropDownList($model->genderList,
				['prompt' => 'Select...' ]
			);?>
		</div>
	</div>
	<div class="row">
		<div class="col-md-3 col-md-offset-3">
			<div class="form-group">
				<?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update',
					['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
			</div>
		</div>
	</div>
	<?php ActiveForm::end(); ?>
</div>
