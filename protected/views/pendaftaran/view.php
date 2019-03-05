<?php
/* @var $this PendaftaranController */
/* @var $model Pendaftaran */

$this->breadcrumbs=array(
	'Pendaftarans'=>array('index'),
	$model->idpendseminar,
);

$this->menu=array(
	array('label'=>'List Pendaftaran', 'url'=>array('index')),
	array('label'=>'Create Pendaftaran', 'url'=>array('create')),
	array('label'=>'Update Pendaftaran', 'url'=>array('update', 'id'=>$model->idpendseminar)),
	array('label'=>'Delete Pendaftaran', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idpendseminar),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pendaftaran', 'url'=>array('admin')),
);
?>
 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">View Pendaftaran #<?php echo $model->idpendseminar; ?></h1>
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
		//'idpendseminar',
		//'idseminar',
		//'idpengguna',
		'nama',
		'gelarawal',
		'gelarakhir',
		'tempatlahir',
		'tanggallahir',
		'institusi',
		'email',
		'nohp',
		'telepon',
		'statuspend',
		//'tanggaldaftar',
	),
)); ?>                      
</div>
</div>
                    </div>