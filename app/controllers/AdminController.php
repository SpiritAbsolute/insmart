<?php

class AdminController extends CController{
    
    public $layout='admin_main';
    
    public function actionIndex(){
        
        if(isset($_POST['ajax']) && $_POST['ajax']==='create-project'){
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
  
        if(isset($_POST['StatusProject'])) {
            $model=new StatusProject;
            $model->attributes=$_POST['StatusProject'];
            
            if(!empty($model->start) && !empty($model->stage_one) && !empty($model->stage_two) && !empty($model->stage_three) && !empty($model->end)) {
                $start=explode('.',$model->start);
                if(count($start)==3) $model->start=mktime (0, 0, 0, $start[1], $start[0], $start[2]);
                $stage_one=explode('.',$model->stage_one);
                if(count($stage_one)==3) $model->stage_one=mktime (0, 0, 0, $stage_one[1], $stage_one[0], $stage_one[2]);
                $stage_two=explode('.',$model->stage_two);
                if(count($stage_two)==3) $model->stage_two=mktime (0, 0, 0, $stage_two[1], $stage_two[0], $stage_two[2]);
                $stage_three=explode('.',$model->stage_three);
                if(count($stage_three)==3) $model->stage_three=mktime (0, 0, 0, $stage_three[1], $stage_three[0], $stage_three[2]);
                $end=explode('.',$model->end);
                if(count($end)==3) $model->end=mktime (0, 0, 0, $end[1], $end[0], $end[2]);
                if($model->save()) {
                    echo CJSON::encode(array(
                        'status'=>'success'
                    ));
                    Yii::app()->end();
                }else{
                    $error = CActiveForm::validate($model);
                    if($error!='[]')
                        echo $error;
                    Yii::app()->end();
                }
            }else{
                $error = CActiveForm::validate($model);
                if($error!='[]')
                    echo $error;
                Yii::app()->end();
            }
            
        }else{
        
            
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
    }
    
    public function actionUpdate($id){
        
        $model=$this->loadModel($id);
        
        if(isset($_POST['StatusProject'])){
            $model->attributes=$_POST['StatusProject'];
            
            if(!empty($model->start) && !empty($model->stage_one) && !empty($model->stage_two) && !empty($model->stage_three) && !empty($model->end)) {
                $start=explode('.',$model->start);
                if(count($start)==3) $model->start=mktime (0, 0, 0, $start[1], $start[0], $start[2]);
                $stage_one=explode('.',$model->stage_one);
                if(count($stage_one)==3) $model->stage_one=mktime (0, 0, 0, $stage_one[1], $stage_one[0], $stage_one[2]);
                $stage_two=explode('.',$model->stage_two);
                if(count($stage_two)==3) $model->stage_two=mktime (0, 0, 0, $stage_two[1], $stage_two[0], $stage_two[2]);
                $stage_three=explode('.',$model->stage_three);
                if(count($stage_three)==3) $model->stage_three=mktime (0, 0, 0, $stage_three[1], $stage_three[0], $stage_three[2]);
                $end=explode('.',$model->end);
                if(count($end)==3) $model->end=mktime (0, 0, 0, $end[1], $end[0], $end[2]);
                if($model->save()) {
                    $this->redirect(array('admin/index'));
                }else{
                    $model=$this->transfer_date($model);
                    $this->render('update',array(
                        'model'=>$model,
                    ));
                }
            }else{
                $model->validate();
                $model=$this->transfer_date($model);
                $this->render('update',array(
                    'model'=>$model,
                ));
            }
        }else{
            // Изменение формата вывода даты
            $model=$this->transfer_date($model);

            $this->render('update',array(
                'model'=>$model,
            ));
        }
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
    
    public function actionError() {
        if($error=Yii::app()->errorHandler->error) {
            if(Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
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

