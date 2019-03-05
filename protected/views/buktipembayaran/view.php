<?php
/* @var $this BuktipembayaranController */
/* @var $model Buktipembayaran */

$this->breadcrumbs=array(
	'Buktipembayarans'=>array('index'),
	$model->idbuktipembayaran,
);

$this->menu=array(
	array('label'=>'List Buktipembayaran', 'url'=>array('index')),
	array('label'=>'Create Buktipembayaran', 'url'=>array('create')),
	array('label'=>'Update Buktipembayaran', 'url'=>array('update', 'id'=>$model->idbuktipembayaran)),
	array('label'=>'Delete Buktipembayaran', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idbuktipembayaran),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Buktipembayaran', 'url'=>array('admin')),
);
?>
 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">View Buktipembayaran #<?php echo $model->idbuktipembayaran; ?></h1>
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
		'idbuktipembayaran',
		'idpendseminar',
		'buktipembayaran',
		'statusbuktipembayaran',
	),
)); ?>                      
</div>
</div>
                    </div>