<?php
/* @var $this SeminarController */
/* @var $model Seminar */

$this->breadcrumbs=array(
	'Seminars'=>array('index'),
	$model->idseminar,
);

$this->menu=array(
	array('label'=>'List Seminar', 'url'=>array('index')),
	array('label'=>'Create Seminar', 'url'=>array('create')),
	array('label'=>'Update Seminar', 'url'=>array('update', 'id'=>$model->idseminar)),
	array('label'=>'Delete Seminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idseminar),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Seminar', 'url'=>array('admin')),
);
?>
 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">View Seminar #<?php echo $model->idseminar; ?></h1>
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
		'idseminar',
		'namaseminar',
		'tanggalpelaksanaan',
		'statusseminar',
	),
)); ?>                      
</div>
</div>
                    </div>