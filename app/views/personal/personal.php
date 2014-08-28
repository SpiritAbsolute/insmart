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
        <input type="hidden" id="start" value='<?= $date["start"];?>' />
        <input type="hidden" id="stage_one" value='<?= $date["stage_one"];?>' />
        <input type="hidden" id="stage_two" value='<?= $date["stage_two"];?>' />
        <input type="hidden" id="stage_three" value='<?= $date["stage_three"];?>' />
        <input type="hidden" id="end" value='<?= $date["end"];?>' />
        <div class="progress_bar_main">
            <br />
            
            <div class="strip_bar_new">
                <span class="strip_bar_span" id="interest1"></span>
                <span class="strip_bar_span" id="interest2"></span>
                <span class="strip_bar_span" id="interest3"></span>
                <span class="strip_bar_span" id="interest4"></span>
                <span class="strip_bar_span" id="interest5"></span>
                
                <span class="strip_bar_span" id="interest6"></span>
            <img class="img_strip_bar" id="progress1" src="/img/step1.jpg" />
            <img class="img_strip_bar" id="progress2" src="/img/step2.jpg" />
            <img class="img_strip_bar" id="progress3" src="/img/step3.jpg" />
            <img class="img_strip_bar" id="progress4" src="/img/step4.jpg" />
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
