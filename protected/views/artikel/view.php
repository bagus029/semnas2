<?php
/* @var $this ArtikelController */
/* @var $model Artikel */

$this->breadcrumbs=array(
	'Artikels'=>array('index'),
	$model->idartikel,
);

$this->menu=array(
	array('label'=>'List Artikel', 'url'=>array('index')),
	array('label'=>'Create Artikel', 'url'=>array('create')),
	array('label'=>'Update Artikel', 'url'=>array('update', 'id'=>$model->idartikel)),
	array('label'=>'Delete Artikel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idartikel),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Artikel', 'url'=>array('admin')),
);
?>
 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">View Artikel #<?php echo $model->idartikel; ?></h1>
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
		'idartikel',
		'idpendseminar',
		'namaartikel',
		'fileartikel',
		'tgluploadartikel',
		'statusartikel',
	),
)); ?>                      
</div>
</div>
                    </div>