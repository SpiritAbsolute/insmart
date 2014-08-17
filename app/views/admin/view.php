<?php

?>

<div class="container personal_cont">
    <h3>Просмотр информации проекта - <?php echo $model->name_project; ?></h3>

    <?php $this->widget('zii.widgets.CDetailView', array(
        'data'=>$model,
        'attributes'=>array(
            'id',
            'name_project',
            'login',
            'password',
            'start',
            'stage_one',
            'stage_two',
            'stage_three',
            'end',
        ),
    )); ?>
</div>
