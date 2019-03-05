<?php
/* @var $this PemakalahController */
/* @var $model Pemakalah */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idpemakalah'); ?>
		<?php echo $form->textField($model,'idpemakalah'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idpendseminar'); ?>
		<?php echo $form->textField($model,'idpendseminar'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'penulis1'); ?>
		<?php echo $form->textField($model,'penulis1',array('size'=>60,'maxlength'=>75)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'penulis2'); ?>
		<?php echo $form->textField($model,'penulis2',array('size'=>60,'maxlength'=>75)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'penulis3'); ?>
		<?php echo $form->textField($model,'penulis3',array('size'=>60,'maxlength'=>75)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'judulartikel'); ?>
		<?php echo $form->textArea($model,'judulartikel',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'area'); ?>
		<?php echo $form->textField($model,'area',array('size'=>35,'maxlength'=>35)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'statuspemakalah'); ?>
		<?php echo $form->textField($model,'statuspemakalah'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->