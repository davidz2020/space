<?php
use yii\grid\GridView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel books\models\PersonSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Book';
$this->params['breadcrumbs'][] = $this->title;
?>

<h1>图书管理系统</h1>


<?php echo $this->render('_search', ['model' => $model]); ?>
<?=GridView::widget([
	'dataProvider' => $dataProvider,
	'columns' => [
		//['class' => 'yii\grid\SerialColumn'],
		'bookid:text:编号',
		'booktitle:text:书名',
		'author:text:作者',
		[
			'class' => 'yii\grid\ActionColumn',
			"header" => "操作",
			'template' => '{delete}',
		],
	],
]);?>
 <p>
        <?=Html::a('添加新图书', ['create'], ['class' => 'btn btn-success'])?>
    </p>

