<?php
/* @var $this AbstrakController */
/* @var $model Abstrak */

$this->breadcrumbs = array(
    'Abstraks' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List Abstrak', 'url' => array('index')),
    array('label' => 'Create Abstrak', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#abstrak-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<?php echo CHtml::link('Advanced Search', '#', array('class' => 'search-button')); ?>
<div class="search-form" style="display:none">
    <?php
    $this->renderPartial('_search', array(
        'model' => $model,
    ));
    ?>
</div><!-- search-form -->
<div class="row">
    <div class="col-md-12">
        <h4 class="page-head-line">Manage Abstraks</h4>

    </div>

</div>
<div class="panel panel-default">
    <div class="panel-heading">
        <i class="fa fa-list"></i>
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <?php
            $this->widget('zii.widgets.grid.CGridView', array(
                'id' => 'abstrak-grid',
                'dataProvider' => $model->search(),
                'filter' => $model,
                'itemsCssClass' => 'table table-striped table-bordered table-hover',
                'columns' => array(
                    'idabstrak',
                    'idpendseminar',
                    'namaabstrak',
                    'fileabstrak',
                    'tgluploadabstrak',
                    'statusabstrak',
                    array(
                        'class' => 'CButtonColumn',
                    ),
                ),
            ));
            ?>
        </div>
    </div>
</div>