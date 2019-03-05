<?php
/* @var $this PenggunaController */
/* @var $data Pengguna */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idpengguna')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idpengguna), array('view', 'id'=>$data->idpengguna)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('namapengguna')); ?>:</b>
	<?php echo CHtml::encode($data->namapengguna); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('statusaktiv')); ?>:</b>
	<?php echo CHtml::encode($data->statusaktiv); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('level')); ?>:</b>
	<?php echo CHtml::encode($data->level); ?>
	<br />


</div>