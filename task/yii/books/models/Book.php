<?php

namespace books\models;

use yii\db\ActiveRecord;

class Book extends ActiveRecord {
	/**
	 * @inheritdoc
	 */
	public function rules() {
		return [

			[['booktitle'], 'string', 'max' => 100],
			[['author'], 'string', 'max' => 100],
		];
	}
	public function attributeLabels() {

		return [

			'bookid' => 'ID',

			'booktitle' => '书名',

			'author' => '作者',

			'addtime' => '添加时间',

		];

	}
}
