<?php
/* @var $this PemakalahController */
/* @var $model Pemakalah */

$this->breadcrumbs=array(
	'Pemakalahs'=>array('index'),
	$model->idpemakalah=>array('view','id'=>$model->idpemakalah),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pemakalah', 'url'=>array('index')),
	array('label'=>'Create Pemakalah', 'url'=>array('create')),
	array('label'=>'View Pemakalah', 'url'=>array('view', 'id'=>$model->idpemakalah)),
	array('label'=>'Manage Pemakalah', 'url'=>array('admin')),
);
?>
<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Update Pemakalah <?php echo $model->idpemakalah; ?></h1>
                    </div>
                </div>
<div class="panel panel-default">
                        <div class="panel-heading">
                           <i class="fa fa-list"></i>
                        </div>
                        <div class="panel-body">
<?php $this->renderPartial('_form', array('model'=>$model)); ?>                        </div>
</div>