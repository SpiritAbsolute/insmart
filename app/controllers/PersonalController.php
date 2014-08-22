<?php

class PersonalController extends CController{
    
    public $layout='service'; 
    
    public function actionIndex(){
        
        $model=new LoginForm;
        
        if(isset($_POST['ajax']) && $_POST['ajax']==='login-form'){
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
        
        if(isset($_POST['LoginForm'])){
            $model->attributes=$_POST['LoginForm'];
            if($model->validate() && $model->login()){
                session_start();
                unset($_SESSION['check_login']);
                $_SESSION['check_login']=$model->login();
                $this->redirect('personal/view/id/'.$model->login().'');
            }else{
                $http = new CHttpRequest();
                $referrer_url = $http->getUrlReferrer();
                $this->redirect($referrer_url);
            }
        }else{
            $file = Yii::app()->getClientScript();
            $file->registerScriptFile('/js/personal.js');
            $file->registerCssFile('/css/personal.css');
            $this->render('index', array('model'=>$model));
        }
                 
    }
    
    public function actionView($id=false){
        session_start();
        if(isset($_SESSION['check_login']) and $_SESSION['check_login']==$id){
            $model = new StatusProject;
            $model = StatusProject::model()->findByPk($id);
            $file = Yii::app()->getClientScript();
            $file->registerScriptFile('/js/view.js');
            $file->registerCssFile('/css/view.css');
            $this->render('personal', array('model'=>$model));
        }else{
            $this->redirect('/personal');
        }
    }
    
    public function loadModel($id){
        $model=StatusProject::model()->findByPk($id);
        if($model===null)
            throw new CHttpException(404,'The requested page does not exist.');
        return $model;
    }
    
    public function actionError(){
        if($error=Yii::app()->errorHandler->error){
            if(Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }
}
