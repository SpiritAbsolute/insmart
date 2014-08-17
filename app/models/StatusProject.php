<?php

class StatusProject extends CActiveRecord{
    
    public function tableName(){
        return '{{status_project}}';
    }

    public function rules(){
        return array(
            array('name_project, login, password, start, stage_one, stage_two, stage_three, end', 'required'),
            array('start, stage_one, stage_two, stage_three, end', 'numerical', 'integerOnly'=>true),
            array('name_project, login, password', 'length', 'max'=>40),
            array('id, name_project, login, password, start, stage_one, stage_two, stage_three, end', 'safe', 'on'=>'search'),
        );
    }

    public function relations(){
        return array(
        );
    }

    public function attributeLabels(){
        return array(
            'id' => 'ID',
            'name_project' => 'Проект',
            'login' => 'Логин',
            'password' => 'Пароль',
            'start' => 'Старт проекта',
            'stage_one' => 'Конец 1 этапа',
            'stage_two' => 'Конец 2 этапа',
            'stage_three' => 'Конец 3 этапа',
            'end' => 'Финиш проекта',
        );
    }

    public function search(){
        $criteria=new CDbCriteria;

        $criteria->compare('id',$this->id);
        $criteria->compare('name_project',$this->name_project,true);
        $criteria->compare('login',$this->login,true);
        $criteria->compare('password',$this->password,true);
        $criteria->compare('start',$this->start,true);
        $criteria->compare('stage_one',$this->stage_one,true);
        $criteria->compare('stage_two',$this->stage_two,true);
        $criteria->compare('stage_three',$this->stage_three,true);
        $criteria->compare('end',$this->end,true);

        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
            'pagination'=>array(
                'pageSize'=>3,
            ),
        ));
    }

    public static function model($className=__CLASS__){
        return parent::model($className);
    }
}
