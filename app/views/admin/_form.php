<?php

?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'status-project-form'
)); ?>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model,'name_project'); ?>
        <?php echo $form->textField($model,'name_project',array('size'=>40,'maxlength'=>40)); ?>
        <?php echo $form->error($model,'name_project'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'login'); ?>
        <?php echo $form->textField($model,'login',array('size'=>40,'maxlength'=>40)); ?>
        <?php echo $form->error($model,'login'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'password'); ?>
        <?php echo $form->passwordField($model,'password',array('size'=>40,'maxlength'=>40)); ?>
        <?php echo $form->error($model,'password'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'start'); ?>
        <?php echo $form->textField($model,'start'); ?>
        <?php echo $form->error($model,'start'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'stage_one'); ?>
        <?php echo $form->textField($model,'stage_one'); ?>
        <?php echo $form->error($model,'stage_one'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'stage_two'); ?>
        <?php echo $form->textField($model,'stage_two'); ?>
        <?php echo $form->error($model,'stage_two'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'stage_three'); ?>
        <?php echo $form->textField($model,'stage_three'); ?>
        <?php echo $form->error($model,'stage_three'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'end'); ?>
        <?php echo $form->textField($model,'end'); ?>
        <?php echo $form->error($model,'end'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить'); ?>
    </div>

<?php $this->endWidget(); ?>

</div>

