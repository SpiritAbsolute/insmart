<?php

class AdminController extends CController{
    
    public $layout='admin_main';
    
    public function actionIndex(){
        
        $file = Yii::app()->getClientScript();
        $file->registerScriptFile('/js/admin.js');
        $file->registerCssFile('/css/admin.css');
        
        $model=new StatusProject('search');
        
        $model->unsetAttributes();
        if(isset($_GET['StatusProject']))
            $model->attributes=$_GET['StatusProject'];

        $this->render('index',array(
            'model'=>$model,
        ));
        
    }
    
    public function actionView($id) {
        $model=$this->loadModel($id);
        // Изменение формата вывода даты
        $model=$this->transfer_date($model);
        $this->render('view',array(
            'model'=>$model,
        ));
    }
    
    public function actionUpdate($id){
        
        $model=$this->loadModel($id);
        
        if(isset($_POST['StatusProject'])){
            $model->attributes=$_POST['StatusProject'];
            if($model->save())
                $this->redirect(array('view','id'=>$model->id));
        }
        
        // Изменение формата вывода даты
        $model=$this->transfer_date($model);

        $this->render('update',array(
            'model'=>$model,
        ));
    }
    
    public function actionDelete($id){
        $this->loadModel($id)->delete();
        if(!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
    }
    
    public function loadModel($id){
        $model=StatusProject::model()->findByPk($id);
        if($model===null)
            throw new CHttpException(404,'The requested page does not exist.');
        return $model;
    }
    
    public function transfer_date($model){
        
        $model->start=date('d.m.Y', $model->start);
        $model->stage_one=date('d.m.Y', $model->stage_one);
        $model->stage_two=date('d.m.Y', $model->stage_two);
        $model->stage_three=date('d.m.Y', $model->stage_three);
        $model->end=date('d.m.Y', $model->end);
        
        return $model;
        
    }
    
}

