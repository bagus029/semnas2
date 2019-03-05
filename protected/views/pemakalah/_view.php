<?php
/* @var $this PemakalahController */
/* @var $data Pemakalah */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idpemakalah')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idpemakalah), array('view', 'id'=>$data->idpemakalah)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idpendseminar')); ?>:</b>
	<?php echo CHtml::encode($data->idpendseminar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('penulis1')); ?>:</b>
	<?php echo CHtml::encode($data->penulis1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('penulis2')); ?>:</b>
	<?php echo CHtml::encode($data->penulis2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('penulis3')); ?>:</b>
	<?php echo CHtml::encode($data->penulis3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('judulartikel')); ?>:</b>
	<?php echo CHtml::encode($data->judulartikel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('area')); ?>:</b>
	<?php echo CHtml::encode($data->area); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('statuspemakalah')); ?>:</b>
	<?php echo CHtml::encode($data->statuspemakalah); ?>
	<br />

	*/ ?>

</div>