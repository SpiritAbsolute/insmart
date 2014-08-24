<?php

?>
<div class="container personal_cont">
    <div class="toolbar">
        <a href="#" class="add-project btn" id="create_project"><i class="fa fa-plus-square"></i> Создать проект</a>
    </div>
    <?php $this->widget('zii.widgets.grid.CGridView', array(
        'template' => "{items}\n{pager}",
        'id'=>'status-project-grid',
        'dataProvider'=>$model->search(),
        'cssFile' => Yii::app()->baseUrl . '/css/gridview.css',
        'columns'=>array(
            array(
                'name'=>'name_project',
                'header'=>'Проект'
            ),
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
                'class' => 'CButtonColumn',
                'template' => '{update}&nbsp;{delete}',
                'buttons' => array(
                    'update' => array(
                        'options' => array('title' => 'Редактировать'),
                        'url' => 'Yii::app()->createUrl("admin/update/$data->id")',
                        'label' => '<i class="edite fa fa-pencil"></i>',
                        'imageUrl' => false,
                    ),
                    'delete' => array(
                        'options' => array('title' => 'Удалить'),
                        'url' => 'Yii::app()->createUrl("admin/delete/$data->id")',
                        'label' => '<i class="delete fa fa-times"></i>',
                        'imageUrl' => false,
                    ),
                ),
            ),
        ),
    )); ?>
</div>
<div id="dialog">
        
<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'create-project',
    'enableAjaxValidation'=>true,
    'action'=>$this->createUrl('admin/index'),
    'enableClientValidation'=>true,
)); ?>

    <div class="">
        <?php echo $form->textField($model,'name_project',array('size'=>40,'maxlength'=>40, 'placeholder'=>' Название проекта')); ?>
        <?php echo $form->error($model,'name_project'); ?>
    </div>

    <div class="">
        <?php echo $form->textField($model,'login',array('size'=>40,'maxlength'=>40, 'placeholder'=>' Логин')); ?>
        <?php echo $form->error($model,'login'); ?>
    </div>

    <div class="">
        <?php echo $form->textField($model,'password',array('size'=>40,'maxlength'=>40, 'placeholder'=>' Пароль')); ?>
        <?php echo $form->error($model,'password'); ?>
    </div>

    <div class="">
        <?php echo $form->textField($model,'start', array('placeholder'=>' Старт проекта')); ?>
        <?php echo $form->error($model,'start'); ?>
    </div>

    <div class="">
        <?php echo $form->textField($model,'stage_one', array('placeholder'=>' Конец 1 этапа')); ?>
        <?php echo $form->error($model,'stage_one'); ?>
    </div>

    <div class="">
        <?php echo $form->textField($model,'stage_two', array('placeholder'=>' Конец 2 этапа')); ?>
        <?php echo $form->error($model,'stage_two'); ?>
    </div>

    <div class="">
        <?php echo $form->textField($model,'stage_three', array('placeholder'=>' Конец 3 этапа')); ?>
        <?php echo $form->error($model,'stage_three'); ?>
    </div>

    <div class="">
        <?php echo $form->textField($model,'end', array('placeholder'=>' Финиш проекта')); ?>
        <?php echo $form->error($model,'end'); ?>
    </div>

    <div class="buttons">
        <?php echo CHtml::ajaxSubmitButton('Сохранить', CHtml::normalizeUrl(array('admin/index')),
            array(
                'dataType'=>'json',
                'type'=>'post',
                'success'=>'function(data){
                    $("div.errorMessage").text("");
                    $("div.errorMessage").hide();
                    if(data.status=="success"){
                        window.location.replace("http://insmart/admin");
                    }else{
                        $.each(data, function(key, val) {
                            $("#create-project #"+key+"_em_").text(val);
                            $("#create-project #"+key+"_em_").show();
                        });
                    }
                }'
            ), array('class'=>'save btn')); 
        ?>
        <?php echo CHtml::htmlButton('Отменить', array('id'=>'cancel', 'class'=>'cancel btn')); ?>
    </div>

<?php $this->endWidget(); ?>

</div>
