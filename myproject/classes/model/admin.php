<?php
class admin
{
  private $email_id;
  private $password;
  function getEmail_id()
  {
     return $this->email_id;
  }
  function getPassword()
  {
     return $this->password;
  }
  function setEmail_id($email_id)
  {
     $this->email_id=$email_id;
  }
  function setPassword($password)
  {
     $this->password=$password;
  }
  }  
?>