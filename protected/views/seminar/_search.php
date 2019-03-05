<?php
/* @var $this SeminarController */
/* @var $model Seminar */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idseminar'); ?>
		<?php echo $form->textField($model,'idseminar'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'namaseminar'); ?>
		<?php echo $form->textField($model,'namaseminar',array('size'=>60,'maxlength'=>85)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tanggalpelaksanaan'); ?>
		<?php echo $form->textField($model,'tanggalpelaksanaan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'statusseminar'); ?>
		<?php echo $form->textField($model,'statusseminar'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->