<?php

namespace backend\controllers;

use yii\web\Controller;
use backend\models\Events;

class EventsController extends Controller
{
    public function actionIndex($lim = 10, $id = -1)
    {
    	if($id === -1)
    	{
        	$query = Events::find()->limit($lim)
        		->all();
    	}else 
    	{
    		$query = Events::find()
    		->where(['id_event' => $id])
    		->all();
    	}
    	
        return $this->render('index', [
            'events' => $query,
        ]);
    }
}