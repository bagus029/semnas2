<?php
/* @var $this AbstrakartikelController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Abstrakartikels',
);

$this->menu=array(
	array('label'=>'Create Abstrakartikel', 'url'=>array('create')),
	array('label'=>'Manage Abstrakartikel', 'url'=>array('admin')),
);
?>

<h1>Abstrakartikels</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
