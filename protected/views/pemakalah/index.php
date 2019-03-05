<?php
/* @var $this PemakalahController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pemakalahs',
);

$this->menu=array(
	array('label'=>'Create Pemakalah', 'url'=>array('create')),
	array('label'=>'Manage Pemakalah', 'url'=>array('admin')),
);
?>

<h1>Pemakalahs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
