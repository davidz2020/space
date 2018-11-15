<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="book-search">

    <?php $form = ActiveForm::begin([
	'action' => ['index'],
	'method' => 'get',
]);?>


     <?=$form->field($model, 'booktitle')?>

    <div class="form-group">
        <?=Html::submitButton('查找', ['class' => 'btn btn-primary'])?>
        <?=Html::resetButton('重置', ['class' => 'btn btn-default'])?>
    </div>

    <?php ActiveForm::end();?>

</div>
