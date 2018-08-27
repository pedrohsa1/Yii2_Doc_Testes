<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=bd_teste_yii2',
    'username' => 'root',
    'password' => 'root',
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
/*
O arquivo config/db.php é uma ferramenta de configuração típica baseada em arquivos. Este arquivo de configuração em particular especifica os parâmetros necessários para criar e inicializar uma instância de yii\db\Connection através da qual você pode fazer consultas de SQL ao banco de dados subjacente.
*/

/////// -->>>> IMPORTANTE!!!!!!!  <<<<--
//A conexão de BD configurada acima pode ser acessada no código da aplicação através da expressão Yii::$app->db.

/*O arquivo config/db.php será incluso pela configuração principal da aplicação config/web.php, que especifica como a instância da aplicação deverá ser inicializada.
*/