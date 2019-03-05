<?php
/* @var $this AbstrakController */
/* @var $model Abstrak */

$this->breadcrumbs=array(
	'Abstraks'=>array('index'),
	$model->idabstrak=>array('view','id'=>$model->idabstrak),
	'Update',
);

$this->menu=array(
	array('label'=>'List Abstrak', 'url'=>array('index')),
	array('label'=>'Create Abstrak', 'url'=>array('create')),
	array('label'=>'View Abstrak', 'url'=>array('view', 'id'=>$model->idabstrak)),
	array('label'=>'Manage Abstrak', 'url'=>array('admin')),
);
?>
<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Update Abstrak <?php echo $model->idabstrak; ?></h1>
                    </div>
                </div>
<div class="panel panel-default">
                        <div class="panel-heading">
                           <i class="fa fa-list"></i>
                        </div>
                        <div class="panel-body">
<?php $this->renderPartial('_form', array('model'=>$model)); ?>                        </div>
</div>