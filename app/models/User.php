<?php


class User extends Database {
 public function checkuser($email,$password){
    $sql = /** @lang text */
    'SELECT * FROM user WHERE email=:email';
$this->query($sql);
$this->bind(":email", $email, PDO::PARAM_STR);
$row = $this->fetch_as_obj();

if ($row) {
  
    if ($row->password == $password) {
        return $row;
        } else {
        return false;
        }
    } else {
    return false;
    }
    }   
}