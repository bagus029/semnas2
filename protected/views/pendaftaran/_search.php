<?php
/* @var $this PendaftaranController */
/* @var $model Pendaftaran */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idpendseminar'); ?>
		<?php echo $form->textField($model,'idpendseminar'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idseminar'); ?>
		<?php echo $form->textField($model,'idseminar'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idpengguna'); ?>
		<?php echo $form->textField($model,'idpengguna'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama'); ?>
		<?php echo $form->textField($model,'nama',array('size'=>60,'maxlength'=>75)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gelarawal'); ?>
		<?php echo $form->textField($model,'gelarawal',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gelarakhir'); ?>
		<?php echo $form->textField($model,'gelarakhir',array('size'=>60,'maxlength'=>75)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tempatlahir'); ?>
		<?php echo $form->textField($model,'tempatlahir',array('size'=>60,'maxlength'=>75)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tanggallahir'); ?>
		<?php echo $form->textField($model,'tanggallahir'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'institusi'); ?>
		<?php echo $form->textArea($model,'institusi',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nohp'); ?>
		<?php echo $form->textField($model,'nohp',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telepon'); ?>
		<?php echo $form->textField($model,'telepon',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'statuspend'); ?>
		<?php echo $form->textField($model,'statuspend'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tanggaldaftar'); ?>
		<?php echo $form->textField($model,'tanggaldaftar'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->