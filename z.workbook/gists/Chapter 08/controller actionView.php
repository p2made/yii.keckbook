<?php
	public function actionView()
	{
		if ($already_exists = RecordHelpers::userHas('profile')) {
			return $this->render('view', [
				'model' => $this->findModel($already_exists),
			]);
		}

		return $this->redirect(['create']);
	}
