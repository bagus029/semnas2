<?php
/* @var $this SeminarController */
/* @var $model Seminar */

$this->breadcrumbs=array(
	'Seminars'=>array('index'),
	$model->idseminar=>array('view','id'=>$model->idseminar),
	'Update',
);

$this->menu=array(
	array('label'=>'List Seminar', 'url'=>array('index')),
	array('label'=>'Create Seminar', 'url'=>array('create')),
	array('label'=>'View Seminar', 'url'=>array('view', 'id'=>$model->idseminar)),
	array('label'=>'Manage Seminar', 'url'=>array('admin')),
);
?>
<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Update Seminar <?php echo $model->idseminar; ?></h1>
                    </div>
                </div>
<div class="panel panel-default">
                        <div class="panel-heading">
                           <i class="fa fa-list"></i>
                        </div>
                        <div class="panel-body">
<?php $this->renderPartial('_form', array('model'=>$model)); ?>                        </div>
</div>