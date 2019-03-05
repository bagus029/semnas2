<?php
/* @var $this AbstrakartikelController */
/* @var $data Abstrakartikel */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idabstrakartikel')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idabstrakartikel), array('view', 'id'=>$data->idabstrakartikel)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idpemakalah')); ?>:</b>
	<?php echo CHtml::encode($data->idpemakalah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('abstrak')); ?>:</b>
	<?php echo CHtml::encode($data->abstrak); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tglabstrak')); ?>:</b>
	<?php echo CHtml::encode($data->tglabstrak); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updateabstrak')); ?>:</b>
	<?php echo CHtml::encode($data->updateabstrak); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('statusabstrak')); ?>:</b>
	<?php echo CHtml::encode($data->statusabstrak); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('artikel')); ?>:</b>
	<?php echo CHtml::encode($data->artikel); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('statusartikel')); ?>:</b>
	<?php echo CHtml::encode($data->statusartikel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tglartikel')); ?>:</b>
	<?php echo CHtml::encode($data->tglartikel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updateartikel')); ?>:</b>
	<?php echo CHtml::encode($data->updateartikel); ?>
	<br />

	*/ ?>

</div>