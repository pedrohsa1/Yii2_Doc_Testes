<?php 

namespace app\models;

use yii\base\Model;

class CadastroForm extends Model
{
	public $nome;
	public $email;
	public $idade;

	public function rules()
	{
		return [
			[['nome', 'email', 'idade'],'required'],
			['email', 'email'],
			['idade', 'number', 'integerOnly' => true]
		];
	}

	public function attributesLabels()
	{
		return [
			'nome' => 'Nome Completo',
			'email' => 'E-mail',
			'idade' => 'Idade'
		];
	}

}



 ?>