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
            <div style="width: 500px; border: 1px solid #666; margin: 0 auto;">
                <center style="color: #666; position: absolute; margin: 15px 0 0 235px;" id="interest">
                        0 %
                </center>
            <img id="progress" style="width: 0; height: 50px;" src="http://sergey-oganesyan.ru/wp-content/uploads/2014/01/prograss.jpg" />
            </div>
        </div>
    </div>
</div>
