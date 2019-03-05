<?php
/* @var $this SeminarController */
/* @var $model Seminar */
/* @var $form CActiveForm */
?>
<div class="panel-body">    

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'seminar-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
        'htmlOptions'=>array('class'=>'form-horizontal'),
)); ?>
    <div class="form-group">

        <div class="col-md-6">                

                <?php echo $form->errorSummary($model, '', '', array('class'=>'alert alert-danger')); ?>
        </div>
    </div>        

	<div class="form-group">
		<label class="col-md-3 col-xs-12 control-label"><?php echo $form->labelEx($model,'idseminar'); ?>
</label>
                <div class="col-md-6 col-xs-12">
                    <div class="input-group">
                      <?php echo $form->textField($model,'idseminar'); ?>
  
                    </div>

                </div>		               
	</div>

	<div class="form-group">
		<label class="col-md-3 col-xs-12 control-label"><?php echo $form->labelEx($model,'namaseminar'); ?>
</label>
                <div class="col-md-6 col-xs-12">
                    <div class="input-group">
                      <?php echo $form->textField($model,'namaseminar',array('size'=>60,'maxlength'=>85)); ?>
  
                    </div>

                </div>		               
	</div>

	<div class="form-group">
		<label class="col-md-3 col-xs-12 control-label"><?php echo $form->labelEx($model,'tanggalpelaksanaan'); ?>
</label>
                <div class="col-md-6 col-xs-12">
                    <div class="input-group">
                      <?php echo $form->textField($model,'tanggalpelaksanaan'); ?>
  
                    </div>

                </div>		               
	</div>

	<div class="form-group">
		<label class="col-md-3 col-xs-12 control-label"><?php echo $form->labelEx($model,'statusseminar'); ?>
</label>
                <div class="col-md-6 col-xs-12">
                    <div class="input-group">
                      <?php echo $form->textField($model,'statusseminar'); ?>
  
                    </div>

                </div>		               
	</div>

        <div class="panel-footer form-group">  
			<div class="col-md-3 col-xs-12 control-label"></div>
				<div class="col-md-6 col-xs-12">
					<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Update', array('class'=>'btn btn-primary pull-right')); ?>
				</div>            
        </div>	

<?php $this->endWidget(); ?>
</div>