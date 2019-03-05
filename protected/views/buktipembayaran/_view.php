<?php
/* @var $this BuktipembayaranController */
/* @var $data Buktipembayaran */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idbuktipembayaran')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idbuktipembayaran), array('view', 'id'=>$data->idbuktipembayaran)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idpendseminar')); ?>:</b>
	<?php echo CHtml::encode($data->idpendseminar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('buktipembayaran')); ?>:</b>
	<?php echo CHtml::encode($data->buktipembayaran); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('statusbuktipembayaran')); ?>:</b>
	<?php echo CHtml::encode($data->statusbuktipembayaran); ?>
	<br />


</div>