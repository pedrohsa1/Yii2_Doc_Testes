<?php

namespace app\controllers;

use Yii;
use yii\base\Controller;
use app\models\CadastroForm;
use app\models\Pessoas;
use yii\data\Pagination;


class FormularioController extends Controller
{
	public function actionFormulario()
	{
		$cadastroForm = new CadastroForm();
		$post = Yii::$app->request->post();

		if($cadastroForm->load($post) && $cadastroForm->validate()){
			return $this->render('formulario-confirmacao',[
				'model' => $cadastroForm
			]);
		}else{
			return $this->render('formulario',[
				'model' => $cadastroForm
			]);			
		}
	}

	public function actionPessoas()
	{
		/*$pessoas = Pessoas::find()->orderBy('nome')->all();
		echo '<pre>'; 
		print_r($pessoas);
		echo '</pre>';*/

		/*$pessoa = Pessoas::findOne(5);
		echo $pessoa->nome . " - ". $pessoa->email;*/


		/*$pessoa = Pessoas::findOne(5);
		$pessoa->nome = 'Clovis Nogueira Brito'; //Atualizando valor (UPDATE)
		$pessoa->save();

		echo $pessoa->nome;*/


		$query = Pessoas::find();

		$pagination = new Pagination([
			'defaultPageSize' => 3,
			'totalCount' => $query->count()
		]);

		$pessoas = $query->orderBy('nome')
						 ->offset($pagination->offset)
						 ->limit($pagination->limit)
						 ->all();
		return $this->render('pessoas',[
			'pessoas' => $pessoas,
			'pagination' => $pagination
		]);

	}
}



?>