<?php

namespace books\controllers;
use books\models\Book;
use Yii;
use yii\data\ActiveDataProvider;
use yii\web\Controller;

class BookController extends Controller {

	public function actionIndex() {

		$query = Book::find();

		$model = new Book();

		$model->load(Yii::$app->request->queryParams);

		if (!$model->validate()) {

			return $dataProvider;
		}

		$query->orFilterWhere(['like', 'booktitle', $model->booktitle]);
		$query->orFilterWhere(['like', 'author', $model->booktitle]);

		$dataProvider = new ActiveDataProvider([
			'query' => $query,
			'pagination' => ['pagesize' => 5],
			'sort' => [ // sort 用于排序
				'defaultOrder' => [
					'bookid' => SORT_DESC, // defaultOrder 指定默认排序字段
				],

			],
		]);

		$model = new Book();

		return $this->render('index', [
			'dataProvider' => $dataProvider,
			'model' => $model,

		]);
	}
	/**
	 * 增加
	 */
	public function actionCreate() {
		$model = new Book();
		if ($model->load(Yii::$app->request->post()) && $model->save()) {
			return $this->redirect(['index']);
		};

		return $this->render('create', [
			'model' => $model,
		]);
	}

	/**
	 * 删除
	 */
	public function actionDelete($id) {
		$this->findModel($id)->delete();
		return $this->redirect(['index']);
	}

	protected function findModel($id) {
		if (($model = Book::findOne($id)) !== null) {
			return $model;
		}

		throw new NotFoundHttpException('The requested page does not exist.');
	}
	public function actionSearch($params) {

		$query = Book::find();
		$query->orderBy(['bookid' => SORT_DESC])->all();

		$this->load($params);
		$query->andFilterWhere([
			'bookid' => $this->bookid,
			'author' => $this->author,
		]);

		$query->andFilterWhere(['like', 'booktitle', $this->booktitle]);

		$dataProvider = new ActiveDataProvider([
			'query' => $query,
			'pagination' => ['pagesize' => 5],
		]);

		$this->redirect('index', [
			'dataProvider' => $dataProvider,
		]);
		return false;

	}
}