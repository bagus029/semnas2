<?php
/* @var $this AbstrakartikelController */
/* @var $model Abstrakartikel */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idabstrakartikel'); ?>
		<?php echo $form->textField($model,'idabstrakartikel'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idpemakalah'); ?>
		<?php echo $form->textField($model,'idpemakalah'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'abstrak'); ?>
		<?php echo $form->textField($model,'abstrak',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tglabstrak'); ?>
		<?php echo $form->textField($model,'tglabstrak'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'updateabstrak'); ?>
		<?php echo $form->textField($model,'updateabstrak'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'statusabstrak'); ?>
		<?php echo $form->textField($model,'statusabstrak'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'artikel'); ?>
		<?php echo $form->textField($model,'artikel',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'statusartikel'); ?>
		<?php echo $form->textField($model,'statusartikel'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tglartikel'); ?>
		<?php echo $form->textField($model,'tglartikel'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'updateartikel'); ?>
		<?php echo $form->textField($model,'updateartikel'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->