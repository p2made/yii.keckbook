	public function actionCreate()
	{
		$model = new Profile;
		$model->user_id = \Yii::$app->user->identity->id;

		if ($already_exists = RecordHelpers::userHas('profile')) {
			return $this->render('view', [
				'model' => $this->findModel($already_exists),
			]);
		}

		if ($model->load(Yii::$app->request->post()) && $model->save()){
			return $this->redirect(['view']);
		}

		return $this->render('create', ['model' => $model,]);
	}
