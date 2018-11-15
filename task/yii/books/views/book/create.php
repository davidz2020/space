<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model books\models\Book */

$this->title = '添加新图书';
$this->params['breadcrumbs'][] = ['label' => 'Book', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="book-create">

    <h1><?=Html::encode('添加新图书')?></h1>

    <?=$this->render('_form', [
	'model' => $model,
])?>
</div>
