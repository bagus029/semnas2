<?php
/* @var $this ArtikelController */
/* @var $model Artikel */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idartikel'); ?>
		<?php echo $form->textField($model,'idartikel'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idpendseminar'); ?>
		<?php echo $form->textField($model,'idpendseminar'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'namaartikel'); ?>
		<?php echo $form->textField($model,'namaartikel',array('size'=>60,'maxlength'=>85)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fileartikel'); ?>
		<?php echo $form->textField($model,'fileartikel',array('size'=>60,'maxlength'=>85)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tgluploadartikel'); ?>
		<?php echo $form->textField($model,'tgluploadartikel'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'statusartikel'); ?>
		<?php echo $form->textField($model,'statusartikel'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->