<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of WebUser
 *
 * @author Nur Ichsan
 */
class WebUser extends CWebUser {

    public function getLevel() {
        $level = NULL;
        $model = $this->loadModel(Yii::app()->user->id);
        if ($model !== NULL)
            $level = $model->level;
        return $level;
    }

    public function loadModel($id) {
        return User::model()->findByPk($id);
    }

}

?>
