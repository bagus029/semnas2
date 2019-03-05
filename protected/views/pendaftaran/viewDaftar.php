<?php
/* @var $this PendaftaranController */
/* @var $model Pendaftaran */

$this->breadcrumbs = array(
    'Pendaftarans' => array('index'),
    $model->idpendseminar,
);
?>
<div class="row">
    <div class="col-md-6">
        <h1 class="page-head-line">View Pendaftaran #<?php echo $model->idpendseminar; ?></h1>
    </div>
</div>
<div class="col-md-6">
    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-list"></i>
        </div>
        <div class="panel-body">
            <?php
            $this->widget('zii.widgets.CDetailView', array(
                'data' => $model,
                'attributes' => array(
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
            ));
            ?>
        </div>
    </div>
</div>
<!--pemakalah-->
<div class="col-md-6">
    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-list"></i>
            <div class="pull-right">
                <a class="btn btn-success"href="<?php echo Yii::app()->createUrl("pemakalah/create"); ?>"><i class="fa fa-pencil"></i> Pemakalah</a>
            </div>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <?php
                $this->widget('zii.widgets.grid.CGridView', array(
                    'id' => 'pemakalah-grid',
                    'dataProvider' => $pemakalah,
                    //'filter' => $model,
                    'itemsCssClass' => 'table table-striped table-bordered table-hover',
                    'columns' => array(
                        // 'idpemakalah',
                        //'idpendseminar',
                        'penulis1',
                        'penulis2',
                        'penulis3',
                        'penulis4',
                        'penulis5',
                        'judulartikel',
                        /*
                          'area',
                          'statuspemakalah',
                         */
                       /*array(
                                'class' => 'CButtonColumn',
                            ),*/
                    ),
                ));
                ?>
            </div>
        </div>
    </div>
</div>
<!--endpemakalah-->
<!--abstrak -->
<div class="col-md-6">
    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-list"></i>
            <div class="pull-right">
                <a class="btn btn-success"href="<?php echo Yii::app()->createUrl("abstrak/create"); ?>"><i class="fa fa-pencil"></i> Upload Abstrak</a>
            </div>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <?php
                $this->widget('zii.widgets.grid.CGridView', array(
                    'id' => 'abstrak-grid',
                    'dataProvider' => $abstrak,
                    //'filter' => $model,
                    'itemsCssClass' => 'table table-striped table-bordered table-hover',
                    'columns' => array(
                        // 'idabstrak',
                        'idpendseminar',
                        'namaabstrak',
                        'fileabstrak',
                        //'tgluploadabstrak',
                        'statusabstrak',
                      /*array(
                                'class' => 'CButtonColumn',
                            ),*/
                    ),
                ));
                ?>
            </div>
        </div>
    </div>
</div>
<!--end abstrak-->
<div class="col-lg-12">
    <!---Bukti Bayar-->
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-list"></i>
                <div class="pull-right">
                    <a class="btn btn-success"href="<?php echo Yii::app()->createUrl("buktipembayaran/create"); ?>"><i class="fa fa-pencil"></i> Bukti Bayar</a>
                </div>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <?php
                    $this->widget('zii.widgets.grid.CGridView', array(
                        'id' => 'buktipembayaran-grid',
                        'dataProvider' => $uploadbukti,
                        //'filter'=>$model,
                        'itemsCssClass' => 'table table-striped table-bordered table-hover',
                        'columns' => array(
                            //'idbuktipembayaran',
                            'idpendseminar',
                            'buktipembayaran',
                            'statusbuktipembayaran',
                           /*array(
                                'class' => 'CButtonColumn',
                            ),*/
                        ),
                    ));
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!--selesai bukti bayar-->
    <!-- upload artikel -->
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-list"></i>
                <div class="pull-right">
                    <a class="btn btn-success"href="<?php echo Yii::app()->createUrl("artikel/create"); ?>"><i class="fa fa-pencil"></i> Upload Artikel</a>
                </div>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <?php
                    $this->widget('zii.widgets.grid.CGridView', array(
                        'id' => 'artikel-grid',
                        'dataProvider' => $artikel,
                        //'filter' => $model,
                        'itemsCssClass' => 'table table-striped table-bordered table-hover',
                        'columns' => array(
                            //'idartikel',
                            //'idpendseminar',
                            'namaartikel',
                            'fileartikel',
                            //'tgluploadartikel',
                            'statusartikel',
                            /*array(
                                'class' => 'CButtonColumn',
                            ),*/
                        ),
                    ));
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!--selesai artikel-->
</div>