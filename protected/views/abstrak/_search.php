<?php
/* @var $this AbstrakController */
/* @var $model Abstrak */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idabstrak'); ?>
		<?php echo $form->textField($model,'idabstrak'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idpendseminar'); ?>
		<?php echo $form->textField($model,'idpendseminar'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'namaabstrak'); ?>
		<?php echo $form->textField($model,'namaabstrak',array('size'=>60,'maxlength'=>85)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fileabstrak'); ?>
		<?php echo $form->textField($model,'fileabstrak',array('size'=>60,'maxlength'=>85)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tgluploadabstrak'); ?>
		<?php echo $form->textField($model,'tgluploadabstrak'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'statusabstrak'); ?>
		<?php echo $form->textField($model,'statusabstrak'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->