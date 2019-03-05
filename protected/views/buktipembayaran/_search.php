<?php
/* @var $this BuktipembayaranController */
/* @var $model Buktipembayaran */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idbuktipembayaran'); ?>
		<?php echo $form->textField($model,'idbuktipembayaran'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idpendseminar'); ?>
		<?php echo $form->textField($model,'idpendseminar'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'buktipembayaran'); ?>
		<?php echo $form->textField($model,'buktipembayaran',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'statusbuktipembayaran'); ?>
		<?php echo $form->textField($model,'statusbuktipembayaran'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->