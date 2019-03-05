<?php
/* @var $this PemakalahController */
/* @var $model Pemakalah */

$this->breadcrumbs=array(
	'Pemakalahs'=>array('index'),
	$model->idpemakalah,
);

$this->menu=array(
	array('label'=>'List Pemakalah', 'url'=>array('index')),
	array('label'=>'Create Pemakalah', 'url'=>array('create')),
	array('label'=>'Update Pemakalah', 'url'=>array('update', 'id'=>$model->idpemakalah)),
	array('label'=>'Delete Pemakalah', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idpemakalah),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pemakalah', 'url'=>array('admin')),
);
?>
 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">View Pemakalah #<?php echo $model->idpemakalah; ?></h1>
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
		'idpemakalah',
		'idpendseminar',
		'penulis1',
		'penulis2',
		'penulis3',
		'judulartikel',
		'area',
		'statuspemakalah',
	),
)); ?>                      
</div>
</div>
                    </div>