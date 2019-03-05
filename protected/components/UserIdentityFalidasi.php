<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity {

    /**
     * Authenticates a user.
     * The example implementation makes sure if the username and password
     * are both 'demo'.
     * In practical applications, this should be changed to authenticate
     * against some persistent user identity storage (e.g. database).
     * @return boolean whether authentication succeeds.
     */
    private $_id;

    public function authenticate() {
        $users = User::model()->find('username = :username', array(':username' => $this->username));
        $anggota = Anggota::model()->find('username = :username AND validasi = :validasi', array(':username' => $this->username, ':validasi' => 'Y'));
        if ($users === NULL) {
            $this->errorCode = self::ERROR_USERNAME_INVALID;
        } elseif ($users->id_level == 3 && $anggota === NULL) {
            $this->errorCode = self::ERROR_USERNAME_INVALID;
        } elseif ($users->password !== md5($this->password)) {
            $this->errorCode = self::ERROR_PASSWORD_INVALID;
        } else {
            $this->_id = $users->username;
            $anggota = Anggota::model()->findByAttributes(array('username' => $this->username));
            $this->setState('fullname', $anggota['nama_anggota']);
            $this->errorCode = self::ERROR_NONE;
        }
        return !$this->errorCode;
    }

    public function getId() {
        return $this->_id;
    }

}