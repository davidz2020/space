<?php
use yii\helpers\Html;
?>


<ul>
    <li><label>书名</label>: <?=Html::encode($model->booktitle)?></li>
    <li><label>作者</label>: <?=Html::encode($model->author)?></li>
</ul>