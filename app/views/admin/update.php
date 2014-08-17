<?php

?>
<div class="container personal_cont">
    <h3>Изменение проекта <?php echo $model->name_project; ?></h3>

    <?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div>