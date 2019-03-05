<?php
/* @var $this BuktipembayaranController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Buktipembayarans',
);

$this->menu=array(
	array('label'=>'Create Buktipembayaran', 'url'=>array('create')),
	array('label'=>'Manage Buktipembayaran', 'url'=>array('admin')),
);
?>

<h1>Buktipembayarans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
