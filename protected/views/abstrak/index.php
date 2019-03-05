<?php
/* @var $this AbstrakController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Abstraks',
);

$this->menu=array(
	array('label'=>'Create Abstrak', 'url'=>array('create')),
	array('label'=>'Manage Abstrak', 'url'=>array('admin')),
);
?>

<h1>Abstraks</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
