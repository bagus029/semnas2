<?php
/* @var $this SeminarController */
/* @var $model Seminar */

$this->breadcrumbs=array(
	'Seminars'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Seminar', 'url'=>array('index')),
	array('label'=>'Create Seminar', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#seminar-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->
<div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Manage Seminars</h4>

                </div>

            </div>
<div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-list"></i>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'seminar-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'itemsCssClass'=>'table table-striped table-bordered table-hover',
	'columns'=>array(
		'idseminar',
		'namaseminar',
		'tanggalpelaksanaan',
		'statusseminar',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
                            </div>
                        </div>
                    </div>