<?php
class ErrorController extends Controller{

		public function actionError()
		{
			if($error=Yii::app()->errorHandler->error)
			{
				if(Yii::app()->request->isAjaxRequest)
					echo $error['message'];
				else
					$this->render('error', $error);
			}
		}
	}
