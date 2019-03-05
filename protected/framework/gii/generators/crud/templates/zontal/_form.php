<?php
/**
 * The following variables are available in this template:
 * - $this: the CrudCode object
 */
?>
<?php echo "<?php\n"; ?>
/* @var $this <?php echo $this->getControllerClass(); ?> */
/* @var $model <?php echo $this->getModelClass(); ?> */
/* @var $form CActiveForm */
?>
<div class="panel-body">    

<?php echo "<?php \$form=\$this->beginWidget('CActiveForm', array(
	'id'=>'".$this->class2id($this->modelClass)."-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
        'htmlOptions'=>array('class'=>'form-horizontal'),
)); ?>\n"; ?>
    <div class="form-group">

        <div class="col-md-6">                

                <?php echo "<?php echo \$form->errorSummary(\$model, '', '', array('class'=>'alert alert-danger')); ?>\n"; ?>
        </div>
    </div>        

<?php
foreach($this->tableSchema->columns as $column)
{
	if($column->autoIncrement)
		continue;
?>
	<div class="form-group">
		<label class="col-md-3 col-xs-12 control-label"><?php echo "<?php echo ".$this->generateActiveLabel($this->modelClass,$column)."; ?>\n"; ?></label>
                <div class="col-md-6 col-xs-12">
                    <div class="input-group">
                      <?php echo "<?php echo ".$this->generateActiveField($this->modelClass,$column)."; ?>\n"; ?>  
                    </div>

                </div>		               
	</div>

<?php
}
?>
        <div class="panel-footer form-group">  
			<div class="col-md-3 col-xs-12 control-label"></div>
				<div class="col-md-6 col-xs-12">
					<?php echo "<?php echo CHtml::submitButton(\$model->isNewRecord ? 'Simpan' : 'Update', array('class'=>'btn btn-primary pull-right')); ?>\n"; ?>
				</div>            
        </div>	

<?php echo "<?php \$this->endWidget(); ?>\n"; ?>
</div>