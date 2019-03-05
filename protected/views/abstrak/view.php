<?php
/* @var $this AbstrakController */
/* @var $model Abstrak */

$this->breadcrumbs=array(
	'Abstraks'=>array('index'),
	$model->idabstrak,
);

$this->menu=array(
	array('label'=>'List Abstrak', 'url'=>array('index')),
	array('label'=>'Create Abstrak', 'url'=>array('create')),
	array('label'=>'Update Abstrak', 'url'=>array('update', 'id'=>$model->idabstrak)),
	array('label'=>'Delete Abstrak', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idabstrak),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Abstrak', 'url'=>array('admin')),
);
?>
 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">View Abstrak #<?php echo $model->idabstrak; ?></h1>
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
		'idabstrak',
		'idpendseminar',
		'namaabstrak',
		'fileabstrak',
		'tgluploadabstrak',
		'statusabstrak',
	),
)); ?>                      
</div>
</div>
                    </div>