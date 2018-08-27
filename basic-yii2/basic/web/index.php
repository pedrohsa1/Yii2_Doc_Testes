<?php

// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
//Abaixo é o ambiente de trabalho que a aplicação se encontra no momento 'dev'
//Ambientes: dev, prod, tests
// YII_ENV_PROD, YII_ENV_DEV, YII_ENV_TEST
defined('YII_ENV') or define('YII_ENV', 'dev'); //Gii habilitado!

// registra o autoloader do Composer
require __DIR__ . '/../vendor/autoload.php';

// inclui o arquivo da classe Yii
require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';

// carrega a configuração da aplicação
$config = require __DIR__ . '/../config/web.php';
// cria, configura e executa a aplicação
(new yii\web\Application($config))->run();
