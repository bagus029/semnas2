<?php
/* @var $this PenggunaController */
/* @var $model Pengguna */

$this->breadcrumbs=array(
	'Penggunas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Pengguna', 'url'=>array('index')),
	array('label'=>'Manage Pengguna', 'url'=>array('admin')),
);
?>
<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Create Pengguna</h1>
                    </div>
                </div>
<div class="panel panel-default">
                        <div class="panel-heading">
                           <i class="fa fa-list"></i>
                        </div>
                        <div class="panel-body">
<?php $this->renderPartial('_form', array('model'=>$model)); ?>                        </div>
</div>
