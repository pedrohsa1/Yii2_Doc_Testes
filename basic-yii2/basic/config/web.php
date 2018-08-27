<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';
$config = [
    // ID único que diferencia uma aplicação das outras
    'id' => 'basic',

    //A propriedade basePath especifica o diretório raiz de um sistema.
    'basePath' => dirname(__DIR__),

    //Permite que você especifique um array de componentes que devem ser executados durante o processo de inicialização da aplicação.
    'bootstrap' => ['log'],
    /**/
    //Define o conjunto de aliases para as path sem precisar usar Yii::setAlias()
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'language' => 'pt',
    'sourceLanguage' => 'pt-BR',
    'timeZone' => 'America/Fortaleza',
    'charset' => 'UTF-8',
    //Todas as requisições que forem feitas será redirecinada para esta página
    //Estamos temporariamente fora do ar, Estamos em manutenção...
    /*'catchAll' => [
        'site' => 'pagManutencao',
        //'param1' => 'testando parametros',
        //'param2' => 'testando parametros 2',
    ],*/
    /*São aplicações service locators. Elas hospedam um conjunto de assim chamados componentes de aplicação que
    fornecem diferentes serviços para o processamento de requisições
    */
    'components' => [
        'testeMyComponent' => [
            'class' => 'app\classes\componentes\MyComponent',
            'string' => 'Yii2 Videos Academy Testando Componentes'
        ],
        'request' => [
// !!! inserir uma chave secreta no seguinte (se estiver vazia) - isso é requerido pela validação do cookie
            'cookieValidationKey' => 'chave_aprendendo_yii2',
            //'enableCookieValidation' => false //caso não queira validar por coockie
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            /*
            enviar todos os emails para um arquivo por padrão.
            Você precisa definir 'useFileTransport' como false e configurar um transporte
            para o mailer para enviar emails reais
            */
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,
        /*
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        */
    ],
    'params' => $params,
];

//Dependendo de como está setado o ambiente em "/basic/web/index.php"
//Irá execultar esse bloco de codigo:
if (YII_ENV_DEV) {
    // ajustes de configuração para o ambiente 'dev'
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // descomente o seguinte para adicionar seu IP se você não estiver se conectando a partir do host local.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // descomente o seguinte para adicionar seu IP se você não estiver se conectando a partir do host local.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}
/*
A configuração acima declara que quando se está em ambiente de desenvolvimento, a aplicação deve incluir um módulo chamado gii, da classe yii\gii\Module.
*/

return $config;
