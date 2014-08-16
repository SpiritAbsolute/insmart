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
       $res = StatusProject::model()->find('login=:login', array(':login'=>$this->login));
       if($res) return $res->id;
       else return false;
    }
 }

