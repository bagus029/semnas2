<?php
/* @var $this AbstrakController */
/* @var $data Abstrak */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idabstrak')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idabstrak), array('view', 'id'=>$data->idabstrak)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idpendseminar')); ?>:</b>
	<?php echo CHtml::encode($data->idpendseminar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('namaabstrak')); ?>:</b>
	<?php echo CHtml::encode($data->namaabstrak); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fileabstrak')); ?>:</b>
	<?php echo CHtml::encode($data->fileabstrak); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tgluploadabstrak')); ?>:</b>
	<?php echo CHtml::encode($data->tgluploadabstrak); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('statusabstrak')); ?>:</b>
	<?php echo CHtml::encode($data->statusabstrak); ?>
	<br />


</div>