<div class="row">
    <div class="col-md-12">
        <h4 class="page-head-line">Halaman Utama</h4>
    </div>

</div>

<div class="panel panel-default">

    <div class="panel-heading">
        <i class="fa fa-list"></i>
        <?php
       /* $no = 1;
        foreach ($data as $x) :
            ?>
            <tr>
                <?php
                $criteria = new CDbCriteria();
                //$criteria->addColumnCondition(array('no_agenda' => $x['no_agenda']));
                $id = $x['idhalaman'];
                */?>
    <?php //if (Yii::app()->user->level == 1): ?>                   
               <!-- <div class="pull-right">
                    <a class="btn btn-success"href="<?php //echo Yii::app()->controller->createUrl("update&id=" . $id); ?>"><i class="fa fa-pencil"></i> Update Halaman</a>
                </div>
               -->
    <?php //endif; ?>
        </div>

        <div class="panel-body">
            <div class="col-md-4">
                <div class="table-responsive">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <img width="100%" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/sca9.jpg<?php //echo $x['gambar']; ?>" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="table-responsive">
                    <div class="panel panel-default">
                        <div class="panel-body">
    <?php //echo $x['isihalaman']; ?>
                            <p>Tata Cara Pendaftaran Seminar dan Kolokium SCA 9</p>
                            <p>1.</p>
                            <p>2.</p>
                            <p>3.</p>
                            <p>4.</p>
                            <p>5.</p>
                            <p>6.</p>
                            
                        </div>
                    </div>
<?php //endforeach; ?>
            </div>
        </div>
    </div>
</div>