<?php
/* @var $this PenggunaController */
/* @var $model Pengguna */

$this->breadcrumbs = array(
    'Penggunas' => array('index'),
    $model->idpengguna,
);

$this->menu = array(
    array('label' => 'List Pengguna', 'url' => array('index')),
    array('label' => 'Create Pengguna', 'url' => array('create')),
    array('label' => 'Update Pengguna', 'url' => array('update', 'id' => $model->idpengguna)),
    array('label' => 'Delete Pengguna', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->idpengguna), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage Pengguna', 'url' => array('admin')),
);
?>
<div class="row">
    <div class="col-md-12">
        <h1 class="page-head-line">View Pengguna #<?php echo $model->idpengguna; ?></h1>
    </div>
</div>
<div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-list"></i>  
        </div>
        <div class="panel-body">
            <?php
            $this->widget('zii.widgets.CDetailView', array(
                'data' => $model,
                'attributes' => array(
                    'idpengguna',
                    'namapengguna',
                    'username',
                    'password',
                    'statusaktiv',
                    'level',
                ),
            ));
            ?>                      
        </div>
    </div>
</div>