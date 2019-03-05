<?php
/* @var $this PemakalahController */
/* @var $model Pemakalah */
/* @var $form CActiveForm */
?>
<div class="panel-body">    

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'pemakalah-form',
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
        <label class="col-md-3 col-xs-12 control-label"><?php echo $form->labelEx($model, 'idpendseminar'); ?>
        </label>
        <div class="col-md-6 col-xs-12">
            <div class="input-group">
                <?php echo $form->textField($model, 'idpendseminar'); ?>

            </div>

        </div>		               
    </div>

    <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label"><?php echo $form->labelEx($model, 'penulis1'); ?>
        </label>
        <div class="col-md-6 col-xs-12">
            <div class="input-group">
                <?php echo $form->textField($model, 'penulis1', array('size' => 60, 'maxlength' => 75)); ?>

            </div>

        </div>		               
    </div>

    <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label"><?php echo $form->labelEx($model, 'penulis2'); ?>
        </label>
        <div class="col-md-6 col-xs-12">
            <div class="input-group">
                <?php echo $form->textField($model, 'penulis2', array('size' => 60, 'maxlength' => 75)); ?>

            </div>

        </div>		               
    </div>

    <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label"><?php echo $form->labelEx($model, 'penulis3'); ?>
        </label>
        <div class="col-md-6 col-xs-12">
            <div class="input-group">
                <?php echo $form->textField($model, 'penulis3', array('size' => 60, 'maxlength' => 75)); ?>

            </div>

        </div>		               
    </div>

    <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label"><?php echo $form->labelEx($model, 'penulis4'); ?>
        </label>
        <div class="col-md-6 col-xs-12">
            <div class="input-group">
                <?php echo $form->textField($model, 'penulis4', array('size' => 60, 'maxlength' => 75)); ?>

            </div>

        </div>		               
    </div>
    
    <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label"><?php echo $form->labelEx($model, 'penulis5'); ?>
        </label>
        <div class="col-md-6 col-xs-12">
            <div class="input-group">
                <?php echo $form->textField($model, 'penulis5', array('size' => 60, 'maxlength' => 75)); ?>

            </div>

        </div>		               
    </div>
    
    <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label"><?php echo $form->labelEx($model, 'judulartikel'); ?>
        </label>
        <div class="col-md-6 col-xs-12">
            <div class="input-group">
                <?php echo $form->textArea($model, 'judulartikel', array('rows' => 6, 'cols' => 50)); ?>

            </div>

        </div>		               
    </div>

    <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label"><?php echo $form->labelEx($model, 'area'); ?>
        </label>
        <div class="col-md-6 col-xs-12">
            <div class="input-group">
                <?php echo $form->textField($model, 'area', array('size' => 35, 'maxlength' => 35)); ?>

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