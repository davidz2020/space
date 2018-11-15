<?php

namespace books\models;

use yii\base\Model;

class EntryForm extends Model {
	public $booktitle;
	public $author;

	public function rules() {
		return [
			[['booktitle', 'author'], 'required'],

		];
	}
}
