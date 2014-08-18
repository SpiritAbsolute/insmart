<?php

class AdminController extends CController{
    
    public $layout='admin_main';
    
    public function actionIndex(){
        
        if(isset($_POST['StatusProject'])) {
            $model=new StatusProject;
            $model->attributes=$_POST['StatusProject'];
            
            $start=explode('.',$model->start);
            $model->start=mktime (0, 0, 0, $start[1], $start[0], $start[2]);
            $stage_one=explode('.',$model->stage_one);
            $model->stage_one=mktime (0, 0, 0, $stage_one[1], $stage_one[0], $stage_one[2]);
            $stage_two=explode('.',$model->stage_two);
            $model->stage_two=mktime (0, 0, 0, $stage_two[1], $stage_two[0], $stage_two[2]);
            $stage_three=explode('.',$model->stage_three);
            $model->stage_three=mktime (0, 0, 0, $stage_three[1], $stage_three[0], $stage_three[2]);
            $end=explode('.',$model->end);
            $model->end=mktime (0, 0, 0, $end[1], $end[0], $end[2]);
            
            if($model->save())
                $this->redirect(array('view','id'=>$model->id));
        }
        
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

