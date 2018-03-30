<?php
class users
{
  private $caf_form_no;
  private $email_id;
  private $password;
  private $first_name;
  private $last_name;
  private $address;
  private $phone_no;
  private $id_proof;
  function getCaf_form_no()
  {
     return $this->caf_form_no;
  }
  function getEmail_id()
  {
     return $this->email_id;
  }
  function getPassword()
  {
     return $this->password;
  }
  function getFirst_name()
  {
     return $this->first_name;
  }
  function getLast_name()
  {
     return $this->last_name;
  }
  function getAddress()
  {
     return $this->address;
  }
  function getPhone_no()
  {
     return $this->phone_no;
  }
  function getImage()
  {
     return $this->image;
  }  
  function setCaf_form_no($caf_form_no)
  {
     $this->caf_form_no = $caf_form_no;
  }
  function setEmail_id($email_id)
  {
     $this->email_id=$email_id;
  }
  function setPassword($password)
  {
     $this->password=$password;
  }
  function setFirst_name($first_name)
  {
     $this->first_name=$first_name;
  }
  function setLast_name($last_name)
  {
     $this->last_name=$last_name;
  }
  function setAddress($address)
  {
     $this->address=$address;
  }
  function setPhone_no($phone_no)
  {
     $this->phone_no=$phone_no;
  }
  function setImage($image)
  {
     $this->image=$image;
  }
}
?>