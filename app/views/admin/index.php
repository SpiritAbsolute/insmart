<?php

?>
<div class="container personal_cont">
    <div class="toolbar">
        <a href="" class="add-project btn"><i class="fa fa-plus-square"></i> Создать проект</a>
    </div>
    <?php $this->widget('zii.widgets.grid.CGridView', array(
        'id'=>'status-project-grid',
        'dataProvider'=>$model->search(),
        'filter'=>$model,
        'columns'=>array(
            'name_project',
            'login',
            'password',
            'start',
            'stage_one',
            'stage_two',
            'stage_three',
            'end',
            array(
                'class'=>'CButtonColumn',
            ),
        ),
    )); ?>
</div>
