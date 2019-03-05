<?php
/* @var $this ArtikelController */
/* @var $data Artikel */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idartikel')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idartikel), array('view', 'id'=>$data->idartikel)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idpendseminar')); ?>:</b>
	<?php echo CHtml::encode($data->idpendseminar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('namaartikel')); ?>:</b>
	<?php echo CHtml::encode($data->namaartikel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fileartikel')); ?>:</b>
	<?php echo CHtml::encode($data->fileartikel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tgluploadartikel')); ?>:</b>
	<?php echo CHtml::encode($data->tgluploadartikel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('statusartikel')); ?>:</b>
	<?php echo CHtml::encode($data->statusartikel); ?>
	<br />


</div>