<?php
/* @var $this PenggunaController */
/* @var $model Pengguna */
/* @var $form CActiveForm */
?>
<div class="panel-body">    

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'pengguna-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => false,
        'htmlOptions' => array('class' => 'form-horizontal'),
    ));
    ?>
    <div class="form-group">
        <div class="col-md-6">                
            <?php echo $form->errorSummary($model, '', '', array('class' => 'alert alert-danger')); ?>
        </div>
    </div>        

    <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label"><?php echo $form->labelEx($model, 'idpengguna'); ?>
        </label>
        <div class="col-md-6 col-xs-12">
            <div class="input-group">
                <?php echo $form->textField($model, 'idpengguna'); ?>
            </div>
        </div>		               
    </div>

    <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label"><?php echo $form->labelEx($model, 'namapengguna'); ?>
        </label>
        <div class="col-md-6 col-xs-12">
            <div class="input-group">
                <?php echo $form->textField($model, 'namapengguna', array('size' => 60, 'maxlength' => 75)); ?>

            </div>

        </div>		               
    </div>

    <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label"><?php echo $form->labelEx($model, 'username'); ?>
        </label>
        <div class="col-md-6 col-xs-12">
            <div class="input-group">
                <?php echo $form->textField($model, 'username', array('size' => 15, 'maxlength' => 15)); ?>

            </div>

        </div>		               
    </div>

    <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label"><?php echo $form->labelEx($model, 'password'); ?>
        </label>
        <div class="col-md-6 col-xs-12">
            <div class="input-group">
                <?php echo $form->passwordField($model, 'password', array('size' => 60, 'maxlength' => 100)); ?>

            </div>

        </div>		               
    </div>

    <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label"><?php echo $form->labelEx($model, 'statusaktiv'); ?>
        </label>
        <div class="col-md-6 col-xs-12">
            <div class="input-group">
                <?php echo $form->textField($model, 'statusaktiv'); ?>

            </div>

        </div>		               
    </div>

    <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label"><?php echo $form->labelEx($model, 'level'); ?>
        </label>
        <div class="col-md-6 col-xs-12">
            <div class="input-group">
                <?php echo $form->textField($model, 'level'); ?>
            </div>
        </div>		               
    </div>

    <div class="panel-footer form-group">  
        <div class="col-md-3 col-xs-12 control-label"></div>
        <div class="col-md-6 col-xs-12">
            <?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Update', array('class' => 'btn btn-primary pull-right')); ?>
        </div>            
    </div>	

    <?php $this->endWidget(); ?>
</div>