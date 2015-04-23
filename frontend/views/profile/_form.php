<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Profile */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="profile-form">

	<?php $form = ActiveForm::begin(); ?>

	<?= $form->field($model, 'user_id')->textInput() ?>

	<?= $form->field($model, 'first_name')->textInput(['maxlength' => 64]) ?>

	<?= $form->field($model, 'last_name')->textInput(['maxlength' => 64]) ?>

	<?= $form->field($model, 'birthdate')->textInput() ?>

	<?= $form->field($model, 'gender_id')->textInput() ?>

	<?= $form->field($model, 'about')->textarea(['rows' => 6]) ?>

	<?= $form->field($model, 'created_at')->textInput() ?>

	<?= $form->field($model, 'created_by')->textInput() ?>

	<?= $form->field($model, 'updated_at')->textInput() ?>

	<?= $form->field($model, 'updated_by')->textInput() ?>

	<div class="form-group">
		<?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	</div>

	<?php ActiveForm::end(); ?>

</div>
