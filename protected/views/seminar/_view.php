<?php
/* @var $this SeminarController */
/* @var $data Seminar */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idseminar')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idseminar), array('view', 'id'=>$data->idseminar)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('namaseminar')); ?>:</b>
	<?php echo CHtml::encode($data->namaseminar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggalpelaksanaan')); ?>:</b>
	<?php echo CHtml::encode($data->tanggalpelaksanaan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('statusseminar')); ?>:</b>
	<?php echo CHtml::encode($data->statusseminar); ?>
	<br />


</div>