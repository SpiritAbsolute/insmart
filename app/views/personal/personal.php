<?php

?>
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="#"><?= $model->name_project; ?></a>

            <div class="nav-collapse collapse">
                <ul class="nav">
                    <li><a class="exit" href="<?= $this->createUrl('/personal') ?>">Выход</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="container personal_cont">
    <div class="row progress_bar">
        <?php $form=$this->beginWidget('CActiveForm'); ?>
        <?php echo $form->hiddenField($model,'start',array('type'=>"hidden")); ?>
        <?php echo $form->hiddenField($model,'stage_one',array('type'=>"hidden")); ?>
        <?php echo $form->hiddenField($model,'stage_two',array('type'=>"hidden")); ?>
        <?php echo $form->hiddenField($model,'stage_three',array('type'=>"hidden")); ?>
        <?php echo $form->hiddenField($model,'end',array('type'=>"hidden")); ?>
        <?php $this->endWidget(); ?>
        <div class="wrapper">
            <br />
            <div class="strip_bar">
                <center class="strip_bar_center" id="interest">0 %</center>
            <img class="img_strip_bar" id="progress" src="http://sergey-oganesyan.ru/wp-content/uploads/2014/01/prograss.jpg" />
            </div>
        </div>
        
        <div class="legend">
            <ul>
                <li><div class="one"></div><span>Изготовление и согласование макета</span></li>
                <li><div class="two"></div><span>Разработка и утверждение проекта</span></li>
                <li><div class="three"></div><span>Согласование и внесение корректировок</span></li>
                <li><div class="four"></div><span>Сдача проекта</span></li>
            </ul>
    	</div>
        
    </div>
</div>
