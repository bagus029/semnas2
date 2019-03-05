<?php
/* @var $this ArtikelController */
/* @var $model Artikel */
/* @var $form CActiveForm */
?>
<div class="panel-body">    

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'artikel-form',
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
		<label class="col-md-3 col-xs-12 control-label"><?php echo $form->labelEx($model,'idpendseminar'); ?>
</label>
                <div class="col-md-6 col-xs-12">
                    <div class="input-group">
                      <?php echo $form->textField($model,'idpendseminar'); ?>
  
                    </div>

                </div>		               
	</div>

	<div class="form-group">
		<label class="col-md-3 col-xs-12 control-label"><?php echo $form->labelEx($model,'namaartikel'); ?>
</label>
                <div class="col-md-6 col-xs-12">
                    <div class="input-group">
                      <?php echo $form->textField($model,'namaartikel',array('size'=>60,'maxlength'=>85)); ?>
  
                    </div>

                </div>		               
	</div>

	<div class="form-group">
		<label class="col-md-3 col-xs-12 control-label"><?php echo $form->labelEx($model,'fileartikel'); ?>
</label>
                <div class="col-md-6 col-xs-12">
                    <div class="input-group">
                      <?php echo $form->textField($model,'fileartikel',array('size'=>60,'maxlength'=>85)); ?>
  
                    </div>

                </div>		               
	</div>

	<div class="form-group">
		<label class="col-md-3 col-xs-12 control-label"><?php echo $form->labelEx($model,'tgluploadartikel'); ?>
</label>
                <div class="col-md-6 col-xs-12">
                    <div class="input-group">
                      <?php echo $form->textField($model,'tgluploadartikel'); ?>
  
                    </div>

                </div>		               
	</div>

	<div class="form-group">
		<label class="col-md-3 col-xs-12 control-label"><?php echo $form->labelEx($model,'statusartikel'); ?>
</label>
                <div class="col-md-6 col-xs-12">
                    <div class="input-group">
                      <?php echo $form->textField($model,'statusartikel'); ?>
  
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