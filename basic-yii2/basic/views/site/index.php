<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">
        <div class="row">
            <div class="col-lg-12">
                <hr>
                <h3><strong style="color:blue">Exemplos da Documentação:</strong></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <strong style="color:red"> -> Como fazer um Hellow World: </strong>
                <ul>
                    <li><strong>Forma de acesso:</strong> http://localhost/Yii2_Doc_Testes/basic-yii2/basic/web/index.php?r=site/say</li>
                    <li><strong>Controller:</strong> SiteController.php</li>
                    <li><strong>Ação: </strong>actionSay</li>
                    <li><strong>Visão: </strong>say.php</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <strong style="color:red"> -> Trabalhando com Formulários: </strong>
                <ul>
                    <li><strong>Forma de acesso:</strong> http://localhost/Yii2_Doc_Testes/basic-yii2/basic/web/index.php?r=site/entry</li>
                    <li><strong>Controller:</strong> SiteController.php</li>
                    <li><strong>Ação: </strong>entry</li>
                    <li><strong>Visão: </strong>entry.php; entry-confirm.php</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <strong style="color:red"> -> Trabalhando com Bancos de Dados: </strong>
                <ul>
                    <li><strong>Forma de acesso:</strong> http://localhost/Yii2_Doc_Testes/basic-yii2/basic/web/index.php?r=country/index</li>
                    <li><strong>Controller:</strong> CountryController.php</li>
                    <li><strong>Model:</strong> Country.php</li>
                    <li><strong>Ação: </strong>index</li>
                    <li><strong>Visão: </strong>country/index.php</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <strong style="color:red"> -> Gerando Código com Gii (CRUD): </strong>
                <ul>
                    <li><strong>Gii:</strong> http://localhost/Yii2_Doc_Testes/basic-yii2/basic/web/index.php?r=gii</li>
                    <li><strong>Model Generator:</strong>
                        <ol>
                            <li>Nome da tabela: <span style="background-color:yellow">country</span></li>
                            <li>Classe do modelo: <span style="background-color:yellow">Country</span></li>
                        </ol>
                    </li>
                    <li><strong>Crud Generator:</strong>
                        <ol>
                            <li>Classe do Modelo: <span style="background-color:yellow">app\models\Country</span></li>
                            <li>Classe da Busca: <span style="background-color:yellow">app\models\CountrySearch</span></li>
                            <li>Classe do Controller: <span style="background-color:yellow">app\controllers\CountryController</span></li>
                        </ol>
                    </li>
                    <li><strong>Forma de acesso:</strong> http://localhost/Yii2_Doc_Testes/basic-yii2/basic/web/index.php?r=country</li>
                    <li><strong>Controller:</strong> controllers/CountryController.php</li>
                    <li><strong>Model: </strong>models/Country.php; models/CountrySearch.php;</li>
                    <li><strong>Ações: </strong>index, view, create, update, delete, findeModel</li>
                    <li><strong>Visão: </strong>
                        <ol>
                            <li>country/index.php;</li>
                            <li>country/update.php;</li>
                            <li>country/view.php;</li>
                            <li>country/create.php;</li>
                            <li>country/_form.php;</li>
                            <li>country/search.php;</li>
                        </ol>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <strong style="color:red"> -> Trabalhando com Bancos de Dados: </strong>
                <ul>
                    <li><strong>Forma de acesso:</strong> http://localhost/Yii2_Doc_Testes/basic-yii2/basic/web/index.php?r=country/index</li>
                    <li><strong>Controller:</strong> CountryController.php</li>
                    <li><strong>Model:</strong> Country.php</li>
                    <li><strong>Ação: </strong>index</li>
                    <li><strong>Visão: </strong>country/index.php</li>
                </ul>
            </div>
        </div>


        <hr>
        <div class="row">
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <?php 
                    //Acessando a globalmente a conexão com o BD
                    //teste
                    var_dump(Yii::$app->db); 
                ?>
            </div>
        </div>
    </div>
</div>
