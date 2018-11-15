<?php
use yii\helpers\Html;
?>
<?=Html::encode($message)?>


<?php
$model = new EntryForm();
$model->booktitle = '张三的书';
$model->author = '张三';
if ($model->validate()) {
	// 验证成功！
} else {
	// 失败！
	// 使用 $model->getErrors() 获取错误详情
}

// // 获取 country 表的所有行并以 name 排序
// $books = Book::find()->orderBy('booktitle')->all();

// // 获取主键为 “US” 的行
// $book = Book::findOne('3');

// // 输出 “United States”
// echo $book->title;

// // 修改 name 为 “U.S.A.” 并在数据库中保存更改
// $book->title = 'U.S.A.';
// $book->save();