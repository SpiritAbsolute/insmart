<?php

 class LoginForm extends CFormModel{
    public $login;
    public $password;
    
    public function rules(){
        return array(
            array('login, password', 'required'),
        );
    }
    
    public function attributeLabels(){
        return array(
            'login'=>'Логин',
            'password'=>'Пароль',
        );
    }
    
    public function login(){
        $criteria=new CDbCriteria;
        $criteria->select='id';
        $criteria->condition='login=:login AND password=:password';
        $criteria->params=array(':login'=>$this->login, ':password'=>$this->password);
        $res = StatusProject::model()->find($criteria);
        if($res) return $res->id;
        else return false;
    }
 }

