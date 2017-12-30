<?php
/**
 * Created by PhpStorm.
 * User: shubhamnigam
 * Date: 30/12/17
 * Time: 12:20 PM
 */

class _User extends CActiveRecord
{
        public function validatePassword($password)
        {
                //return $this->hashPassword($password, $this->salt) === $this->password;
                
                return $password === $this->password;
        }
        
        public function hashPassword($password,$salt)
        {
                return md5($salt.$password);
        }
}