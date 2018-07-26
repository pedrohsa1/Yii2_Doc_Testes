<?php

namespace app\models;

use Yii;
use yii\base\Model;

//O yii\db\ActiveRecord é normalmente usado como pai das 
//classes modelos que correspondem a tabelas do banco de dados
class EntryForm extends Model //Não são associadas com tabelas do banco de dados
{
    public $name;
    public $email;

    public function rules() //conjunto de regras para validação dos dados.
    {
        return [
            [['name', 'email'], 'required'], //campos obrigaórios
            ['email', 'email'], //deve ser um email valido
        ];
    }
}