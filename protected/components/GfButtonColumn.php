<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MyButtonColumn
 * Fungsi dari MyButtonColumn mengganti Class CButtonColumn pada CGridView. 
 * array('class'=>'MyButtonColumn')
 * 
 * Semua attribute dan properti dari CButtonColumn dapat digunakan oleh MyButtonColumn
 *
 * @author Nur Ichsan
 */
class GfButtonColumn extends CButtonColumn {

    public $evaluateID = true;

    public function init() {
        $this->viewButtonLabel = "<i class='fa fa-calendar'></i>";
        $this->viewButtonImageUrl = FALSE;
        $this->viewButtonOptions = array(
            'class' => 'btn btn-success btn-sm',
            'title' => 'Detail'
        );        
        $this->updateButtonLabel = "<i class='fa fa-pencil'></i>";
        $this->updateButtonOptions = array(
            'class' => 'btn btn-info btn-sm btn-condensed',
            'title' => 'Update'
        );
        $this->updateButtonImageUrl = FALSE;
        $this->deleteButtonLabel = "<i class='fa fa-times'></i>";
        $this->deleteButtonOptions = array(
            'class' => 'btn btn-danger btn-sm btn-condensed',
            'title' => 'Hapus'
        );
        $this->deleteButtonImageUrl = FALSE;
        $this->htmlOptions = array(
            'style' => 'width:130px',
        );
        return parent::init();
    }

    public function renderDataCellContent($row, $data) {
        $tr = array();
        ob_start();
        foreach ($this->buttons as $id => $button) {
            if ($this->evaluateID and isset($button['options']['id'])) {
                $button['options']['id'] = $this->evaluateExpression($button['options']['id'], array('row' => $row, 'data' => $data));
            }

            $this->renderButton($id, $button, $row, $data);
            $tr['{' . $id . '}'] = ob_get_contents();
            ob_clean();
        }
        ob_end_clean();
        echo strtr($this->template, $tr);
    }

}

?>