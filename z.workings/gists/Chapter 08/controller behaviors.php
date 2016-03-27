	public function behaviors()
	{
		return [
			'access' => [
				'class' => \yii\filters\AccessControl::className(),
				'only' => ['index', 'view','create', 'update', 'delete'],
				'rules' => [
						[
						'actions' => ['index', 'view','create', 'update', 'delete'],
						'allow' => true,
						'roles' => ['@'],
						],
					],
				],
			'verbs' => [
				'class' => VerbFilter::className(),
				'actions' => [
					'delete' => ['post'],
				],
			],
		];
	}
