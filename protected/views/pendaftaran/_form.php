<?php
/* @var $this PendaftaranController */
/* @var $model Pendaftaran */
/* @var $form CActiveForm */
?>
<script>
    $(function(){
        $('.datepicker').datepicker({
            format: 'yyyy-mm-dd',
            //startDate: '-3d'
        })
    });    
</script>
<div class="panel-body">    

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'pendaftaran-form',
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
        <label class="col-md-3 col-xs-12 control-label">
            <?php echo $form->labelEx($model, 'nama'); ?>
        </label>
        <div class="col-md-6 col-xs-12">
            <div class="input-group">
                <?php echo $form->textField($model, 'nama', array('class'=>'form-control','size' => 60, 'maxlength' => 75)); ?>
            </div>
        </div>		               
    </div>

    <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label">
            <?php echo $form->labelEx($model, 'gelarawal'); ?>
        </label>
        <div class="col-md-6 col-xs-12">
            <div class="input-group">
                <?php echo $form->textField($model, 'gelarawal', array('class'=>'form-control','size' => 15, 'maxlength' => 15)); ?>
            </div>
        </div>		               
    </div>

    <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label">
            <?php echo $form->labelEx($model, 'gelarakhir'); ?>
        </label>
        <div class="col-md-6 col-xs-12">
            <div class="input-group">
                <?php echo $form->textField($model, 'gelarakhir', array('class'=>'form-control','size' => 15, 'maxlength' => 75)); ?>
            </div>
        </div>		               
    </div>

    <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label">
            <?php echo $form->labelEx($model, 'tempatlahir'); ?>
        </label>
        <div class="col-md-6 col-xs-12">
            <div class="input-group">
                <?php echo $form->textField($model, 'tempatlahir', array('class'=>'form-control','size' => 60, 'maxlength' => 75)); ?>
            </div>
        </div>		               
    </div>

    <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label">
            <?php echo $form->labelEx($model, 'tanggallahir'); ?>
        </label>
        <div class="col-md-6 col-xs-12">
            <div class="input-group">
                <?php echo $form->textField($model, 'tanggallahir',array('class'=>'form-control datepicker')); ?>
            </div>
        </div>		               
    </div>

    <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label">
            <?php echo $form->labelEx($model, 'institusi'); ?>
        </label>
        <div class="col-md-6 col-xs-12">
            <div class="input-group">
                <?php echo $form->textArea($model, 'institusi', array('class'=>'form-control','rows' => 6, 'cols' => 50)); ?>
            </div>
        </div>		               
    </div>

    <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label">
            <?php echo $form->labelEx($model, 'email'); ?>
        </label>
        <div class="col-md-6 col-xs-12">
            <div class="input-group">
                <?php echo $form->textField($model, 'email', array('class'=>'form-control','size' => 45, 'maxlength' => 45)); ?>
            </div>
        </div>		               
    </div>

    <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label">
            <?php echo $form->labelEx($model, 'nohp'); ?>
        </label>
        <div class="col-md-6 col-xs-12">
            <div class="input-group">
                <?php echo $form->textField($model, 'nohp', array('class'=>'form-control','size' => 45, 'maxlength' => 45)); ?>
            </div>
        </div>		               
    </div>

    <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label">
            <?php echo $form->labelEx($model, 'telepon'); ?>
        </label>
        <div class="col-md-6 col-xs-12">
            <div class="input-group">
                <?php echo $form->textField($model, 'telepon', array('class'=>'form-control','size' => 45, 'maxlength' => 45)); ?>
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