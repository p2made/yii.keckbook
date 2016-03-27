	public function actionDelete()
	{
		$model =  Profile::find()->where(['user_id' => Yii::$app->user->identity->id])->one();
		$this->findModel($model->id)->delete();

		return $this->redirect(['site/index']);
	}
