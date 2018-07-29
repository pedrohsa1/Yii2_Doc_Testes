<?php

namespace app\controllers;

use yii\web\Controller;

class HelloController extends Controller
{
	public function actionSaySomething($message='Hello') //acessar na url assim hello/say-something
	{
		return $this->render('say-something', [
			'message' => $message
		]);
	}
}

?>