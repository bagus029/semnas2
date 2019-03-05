<?php
/* @var $this PendaftaranController */
/* @var $data Pendaftaran */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idpendseminar')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idpendseminar), array('view', 'id'=>$data->idpendseminar)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idseminar')); ?>:</b>
	<?php echo CHtml::encode($data->idseminar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idpengguna')); ?>:</b>
	<?php echo CHtml::encode($data->idpengguna); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama')); ?>:</b>
	<?php echo CHtml::encode($data->nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gelarawal')); ?>:</b>
	<?php echo CHtml::encode($data->gelarawal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gelarakhir')); ?>:</b>
	<?php echo CHtml::encode($data->gelarakhir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tempatlahir')); ?>:</b>
	<?php echo CHtml::encode($data->tempatlahir); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggallahir')); ?>:</b>
	<?php echo CHtml::encode($data->tanggallahir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('institusi')); ?>:</b>
	<?php echo CHtml::encode($data->institusi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nohp')); ?>:</b>
	<?php echo CHtml::encode($data->nohp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telepon')); ?>:</b>
	<?php echo CHtml::encode($data->telepon); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('statuspend')); ?>:</b>
	<?php echo CHtml::encode($data->statuspend); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggaldaftar')); ?>:</b>
	<?php echo CHtml::encode($data->tanggaldaftar); ?>
	<br />

	*/ ?>

</div>