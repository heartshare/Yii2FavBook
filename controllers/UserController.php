<?php

namespace app\controllers;
use yii\rest\ActiveController; //needed to take advantage of Yii REST services
class UserController extends ActiveController
{
	public $modelClass = 'app\models\User'; 
    public function actionIndex()
    {
        return $this->render('index');
    }

}
