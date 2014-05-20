<?php

class SiteController extends Controller
{
    public $layout='//layouts/main';
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$model = Profile::model()->findAllByAttributes(array('is_missing' => true));
		$this->render('index',array(
			'model' => $model,
		));
	}

	/**
	 * This is the action to handle external exceptions.
	 */
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

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}

	public function actionPrijava()
	{
		$profileModel = new Profile();
		$contactModel = new Contact();

		if(isset($_POST['Contact']))
		{
			$contactModel->attributes=$_POST['Contact'];
			if($contactModel->save() and isset($_POST['Profile']))
			{
				$profileModel->attributes=$_POST['Profile'];
				$profileModel->contact_id = $contactModel->id;
				$profileModel->is_missing = 1;
				$profileModel->published_date = date("Y-m-d h:m:s");
				$profileModel->last_seen_date = date("Y-m-d h:m:s",strtotime($profileModel->last_seen_date));
				$picture_file = CUploadedFile::getInstanceByName('photo');
				if($picture_file)
				{
					$picture_name = $picture_file->name;
					$picture_file->SaveAs(Yii::getPathOfAlias('webroot').'/img/'. $picture_name);
				}
			    $profileModel->image = $picture_name;
				if($profileModel->save())
					$this->redirect(array('index'));
			}
		}



		$this->render('prijava',array('profileModel'=>$profileModel, 'contactModel'=>$contactModel));
	}

	public function actionPronadjeni()
	{
		$model = Profile::model()->findAllByAttributes(array('is_missing' => false, 'is_deleted'=> NULL));
		$this->render('pronadjeni',array('model'=>$model));
	}

	public function actionNisu_pronadjeni()
	{
		$model = Profile::model()->findAllByAttributes(array('is_missing' => true, 'is_deleted'=> NULL));
		$this->render('nisu_pronadjeni',array('model'=>$model));
	}

	public function actionInformacije()
	{
		$model = Page::model()->findAll();
		$this->render('index',array('model'=>$model));
	}

	public function actionEvakuisani()
	{
		$model=new Evacuees('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Evacuees']))
			$model->attributes=$_GET['Evacuees'];

		$this->render('evakuisani',array(
			'model'=>$model,
		));
	}

	public function actionPretraga()
	{
		if(isset($_POST['pretraga']))
		{
			$pretraga = $_POST['pretraga'];
			$model = Profile::model()->findAll(array(
				'condition' => 'name_surname LIKE :match AND is_deleted is NULL',
				'params'    => array(':match' => "%$pretraga%")));
			$this->render('pretraga',array('model'=>$model, 'searchTerm'=>$pretraga));
		}
		else{
			$this->redirect(array('index'));
		}
	}

	public function actionAdmin()
	{
		$this->redirect(array('login'));
	}
}