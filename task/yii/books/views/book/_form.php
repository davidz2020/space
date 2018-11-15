<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model books\models\Book */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="book-form">

    <?php $form = ActiveForm::begin();?>

    <?=$form->field($model, 'booktitle')->textInput(['maxlength' => true])?>

    <?=$form->field($model, 'author')->textInput(['maxlength' => true])?>

    <div class="form-group">
        <?=Html::submitButton('添加', ['class' => 'btn btn-success'])?>
    </div>

    <?php ActiveForm::end();?>

</div>
