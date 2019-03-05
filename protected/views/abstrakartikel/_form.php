<?php
/* @var $this AbstrakartikelController */
/* @var $model Abstrakartikel */
/* @var $form CActiveForm */
?>
<div class="panel-body">    

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'abstrakartikel-form',
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
		<label class="col-md-3 col-xs-12 control-label"><?php echo $form->labelEx($model,'idpemakalah'); ?>
</label>
                <div class="col-md-6 col-xs-12">
                    <div class="input-group">
                      <?php echo $form->textField($model,'idpemakalah'); ?>
  
                    </div>

                </div>		               
	</div>

	<div class="form-group">
		<label class="col-md-3 col-xs-12 control-label"><?php echo $form->labelEx($model,'abstrak'); ?>
</label>
                <div class="col-md-6 col-xs-12">
                    <div class="input-group">
                      <?php echo $form->textField($model,'abstrak',array('size'=>60,'maxlength'=>100)); ?>
  
                    </div>

                </div>		               
	</div>

	<div class="form-group">
		<label class="col-md-3 col-xs-12 control-label"><?php echo $form->labelEx($model,'tglabstrak'); ?>
</label>
                <div class="col-md-6 col-xs-12">
                    <div class="input-group">
                      <?php echo $form->textField($model,'tglabstrak'); ?>
  
                    </div>

                </div>		               
	</div>

	<div class="form-group">
		<label class="col-md-3 col-xs-12 control-label"><?php echo $form->labelEx($model,'updateabstrak'); ?>
</label>
                <div class="col-md-6 col-xs-12">
                    <div class="input-group">
                      <?php echo $form->textField($model,'updateabstrak'); ?>
  
                    </div>

                </div>		               
	</div>

	<div class="form-group">
		<label class="col-md-3 col-xs-12 control-label"><?php echo $form->labelEx($model,'statusabstrak'); ?>
</label>
                <div class="col-md-6 col-xs-12">
                    <div class="input-group">
                      <?php echo $form->textField($model,'statusabstrak'); ?>
  
                    </div>

                </div>		               
	</div>

	<div class="form-group">
		<label class="col-md-3 col-xs-12 control-label"><?php echo $form->labelEx($model,'artikel'); ?>
</label>
                <div class="col-md-6 col-xs-12">
                    <div class="input-group">
                      <?php echo $form->textField($model,'artikel',array('size'=>60,'maxlength'=>100)); ?>
  
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

	<div class="form-group">
		<label class="col-md-3 col-xs-12 control-label"><?php echo $form->labelEx($model,'tglartikel'); ?>
</label>
                <div class="col-md-6 col-xs-12">
                    <div class="input-group">
                      <?php echo $form->textField($model,'tglartikel'); ?>
  
                    </div>

                </div>		               
	</div>

	<div class="form-group">
		<label class="col-md-3 col-xs-12 control-label"><?php echo $form->labelEx($model,'updateartikel'); ?>
</label>
                <div class="col-md-6 col-xs-12">
                    <div class="input-group">
                      <?php echo $form->textField($model,'updateartikel'); ?>
  
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