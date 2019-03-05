<?php
/* @var $this BuktipembayaranController */
/* @var $model Buktipembayaran */
/* @var $form CActiveForm */
?>
<div class="panel-body">    

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'buktipembayaran-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => false,
        'htmlOptions' => array('class' => 'form-horizontal','enctype' => 'multipart/form-data'),
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
                <?php //echo $form->textField($model, 'idpendseminar',array('class'=>'form-control','disabled'=>true)); ?>
                <?php echo $form->dropDownList($model,'idpendseminar',CHtml::listData(Pendaftaran::model()->findAll(array('order'=>'idpendseminar')), 'idpendseminar','nama'),array('class'=>'form-control','disabled'=>true)); ?>
            </div>

        </div>		               
    </div>

    <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label"><?php echo $form->labelEx($model, 'buktipembayaran'); ?>
        </label>
        <div class="col-md-6 col-xs-12">
            <div class="input-group">
                <?php echo $form->fileField($model, 'buktipembayaran'); ?>

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