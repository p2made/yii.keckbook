<?php
	public function actionUpdate()
	{
		if($model =  Profile::find()->where(['user_id' => Yii::$app->user->identity->id])->one()) {
			if ($model->load(Yii::$app->request->post()) && $model->save()) {
				return $this->redirect(['view']);
			}

			return $this->render('update', ['model' => $model,]);
		}

		throw new NotFoundHttpException('No Such Profile.');
	}
