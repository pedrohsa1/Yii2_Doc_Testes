<?php

?>
<!--Encode evita ataques XSS, enviar scripts por parametro -->
<h2>O valor da variável $message é: <?= \yii\helpers\Html::encode($message); ?></h2>
