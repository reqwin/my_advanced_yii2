<?php

namespace backend\models;

use yii\db\ActiveRecord;

class Events extends ActiveRecord
{
	
	public static function tableName()
	{
		return '{{events}}';
	}
	
}