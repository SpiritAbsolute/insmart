<?php

?>
<div class="container personal_cont">
    <div class="toolbar">
        <a href="#" class="add-project btn" id="create_project"><i class="fa fa-plus-square"></i> Создать проект</a>
    </div>
    <?php $this->widget('zii.widgets.grid.CGridView', array(
        'id'=>'status-project-grid',
        'dataProvider'=>$model->search(),
        'filter'=>$model,
        'columns'=>array(
            'name_project',
            'login',
            'password',
            array(
                'name'=>'start',
                'value'=>'date("d.m.Y", $data->start)'
            ),
            array(
                'name'=>'stage_one',
                'value'=>'date("d.m.Y", $data->stage_one)'
            ),
            array(
                'name'=>'stage_two',
                'value'=>'date("d.m.Y", $data->stage_two)'
            ),
            array(
                'name'=>'stage_three',
                'value'=>'date("d.m.Y", $data->stage_three)'
            ),
            array(
                'name'=>'end',
                'value'=>'date("d.m.Y", $data->end)'
            ),
            array(
                'class'=>'CButtonColumn',
            ),
        ),
    )); ?>
</div>
<div id="dialog">
        
<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'create-project'
)); ?>

    <?php echo $form->errorSummary($model); ?>

    <div class="">
        <?php echo $form->labelEx($model,'name_project'); ?>
        <?php echo $form->textField($model,'name_project',array('size'=>40,'maxlength'=>40)); ?>
        <?php echo $form->error($model,'name_project'); ?>
    </div>

    <div class="">
        <?php echo $form->labelEx($model,'login'); ?>
        <?php echo $form->textField($model,'login',array('size'=>40,'maxlength'=>40)); ?>
        <?php echo $form->error($model,'login'); ?>
    </div>

    <div class="">
        <?php echo $form->labelEx($model,'password'); ?>
        <?php echo $form->passwordField($model,'password',array('size'=>40,'maxlength'=>40)); ?>
        <?php echo $form->error($model,'password'); ?>
    </div>

    <div class="">
        <?php echo $form->labelEx($model,'start'); ?>
        <?php echo $form->textField($model,'start'); ?>
        <?php echo $form->error($model,'start'); ?>
    </div>

    <div class="">
        <?php echo $form->labelEx($model,'stage_one'); ?>
        <?php echo $form->textField($model,'stage_one'); ?>
        <?php echo $form->error($model,'stage_one'); ?>
    </div>

    <div class="">
        <?php echo $form->labelEx($model,'stage_two'); ?>
        <?php echo $form->textField($model,'stage_two'); ?>
        <?php echo $form->error($model,'stage_two'); ?>
    </div>

    <div class="">
        <?php echo $form->labelEx($model,'stage_three'); ?>
        <?php echo $form->textField($model,'stage_three'); ?>
        <?php echo $form->error($model,'stage_three'); ?>
    </div>

    <div class="">
        <?php echo $form->labelEx($model,'end'); ?>
        <?php echo $form->textField($model,'end'); ?>
        <?php echo $form->error($model,'end'); ?>
    </div>

    <div class="buttons">
        <?php echo CHtml::submitButton('Cохранить', array('id'=>'save')); ?>
        <?php echo CHtml::htmlButton('Отменить', array('id'=>'cancel')); ?>
    </div>

<?php $this->endWidget(); ?>

</div>
