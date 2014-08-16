<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="#"></a>

            <div class="nav-collapse collapse">
                
            </div>
        </div>
    </div>
</div>
<div class="container personal_cont">
    <div class="row progress_bar">
        <h2>Форма входа</h2>
        <p>Чтобы увидеть статус своего проекта, войдите:</p>

        <div class="form">
        <?php $form=$this->beginWidget('CActiveForm', array('id'=>'login-form')); ?>

                <div class="row">
                    <?php echo $form->labelEx($model,'login'); ?>
                    <?php echo $form->textField($model,'login'); ?>
                    <?php echo $form->error($model,'login'); ?>
                </div>

                <div class="row">
                    <?php echo $form->labelEx($model,'password'); ?>
                    <?php echo $form->passwordField($model,'password'); ?>
                    <?php echo $form->error($model,'password'); ?>
                </div>

                <div class="row submit">
                        <?php echo CHtml::submitButton('Вход'); ?>
                </div>

        <?php $this->endWidget(); ?>
        </div>
    </div>
</div>
