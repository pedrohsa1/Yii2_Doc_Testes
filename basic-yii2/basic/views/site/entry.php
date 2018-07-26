<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'email') ?>

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>

<div class="row">
	<div class="col lg 12">
		<h3>Como funciona a validação?</h3>
		<p>A validação dos dados inicialmente é feito no lado do cliente usando JavaScript e posteriormente realizada no lado do servidor via PHP. O yii\widgets\ActiveForm é inteligente o suficiente para extrair as regras de validação declaradas no model EntryForm, transformando-as em códigos JavaScript e utilizando o JavaScript para realizar as validações dos dados. <strong>No caso do JavaScript estiver desabilitado em seu navegador, a validação ainda será realizada pelo lado do servidor, como mostrado no método actionEntry().</strong> Isso garante que os dados serão validados em qualquer circunstância.</p>
	</div>
</div>