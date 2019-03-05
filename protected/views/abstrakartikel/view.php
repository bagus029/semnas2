<?php
/* @var $this AbstrakartikelController */
/* @var $model Abstrakartikel */

$this->breadcrumbs=array(
	'Abstrakartikels'=>array('index'),
	$model->idabstrakartikel,
);

$this->menu=array(
	array('label'=>'List Abstrakartikel', 'url'=>array('index')),
	array('label'=>'Create Abstrakartikel', 'url'=>array('create')),
	array('label'=>'Update Abstrakartikel', 'url'=>array('update', 'id'=>$model->idabstrakartikel)),
	array('label'=>'Delete Abstrakartikel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idabstrakartikel),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Abstrakartikel', 'url'=>array('admin')),
);
?>
 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">View Abstrakartikel #<?php echo $model->idabstrakartikel; ?></h1>
                    </div>
                </div>
<div class="col-md-12">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                        <i class="fa fa-list"></i>  
                        </div>
                        <div class="panel-body">
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idabstrakartikel',
		'idpemakalah',
		'abstrak',
		'tglabstrak',
		'updateabstrak',
		'statusabstrak',
		'artikel',
		'statusartikel',
		'tglartikel',
		'updateartikel',
	),
)); ?>                      
</div>
</div>
                    </div>