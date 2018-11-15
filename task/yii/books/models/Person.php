<?php

namespace books\models;

use Yii;

/**
 * This is the model class for table "person".
 *
 * @property int $userid
 * @property string $username
 * @property int $age
 */
class Person extends \yii\db\ActiveRecord {
	/**
	 * @inheritdoc
	 */
	public static function tableName() {
		return 'person';
	}

	/**
	 * @inheritdoc
	 */
	public function rules() {
		return [
			[['username', 'age'], 'required'],
			[['age'], 'integer'],
			[['username'], 'string', 'max' => 100],
		];
	}

	/**
	 * @inheritdoc
	 */
	public function attributeLabels() {
		return [
			'userid' => 'Userid',
			'username' => 'Username',
			'age' => 'Age',
		];
	}

	/**
	 * @inheritdoc
	 * @return PersonQuery the active query used by this AR class.
	 */
	public static function find() {
		return new PersonQuery(get_called_class());
	}
}
