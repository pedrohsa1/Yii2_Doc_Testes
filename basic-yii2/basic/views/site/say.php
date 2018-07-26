<?php
use yii\helpers\Html;
?>

<?= Html::encode($message) ?>
<br><br>
<p><strong>Exemplo URL: </strong><span style="background-color: yellow">?r=site/say&message=teste</span></p>

<!--Para acessar essa pagina basta digitar a URL
	http://localhost/aprendendo_yii2/basic-yii2/basic/web/index.php?r=site/say&message=Testando+Mensagem

	Esse trexo do códogo é usado para resolver a rota e acessarmos a view say.php

	index.php?r=site/say&message=Testando+Mensagem
	
	Nessa parte, é chamado controller/action&message=Envia+mensagem+nesse+parametro+da+action.

	Resultar=a na mensagem: Envia mensagem nesse parametro da action.
-->
