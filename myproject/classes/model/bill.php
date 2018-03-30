<?php
class bill {
	private $transaction_id;
	private $caf_form_no;
	private $serial_no;
	private $email_id;
	function getTransaction_id()
    {
      return $this->transaction_id;
    }
    function getCaf_form_no()
    {
      return $this->caf_form_no;
	}
	function getSerial_no()
    {
      return $this->serial_no;
    } 
	function getEmail_id()
    {
      return $this->email_id;
    }
	function setTransaction_id($transaction_id)
    {
      $this->transaction_id = $transaction_id;
    }
    function setSerial_no($serial_no)
    {
      $this->serial_no = $serial_no;
    }
   	function setCaf_form_no($caf_form_no)
    {
      $this->caf_form_no=$caf_form_no;
    }
	function setEmail_id($email_id)
    {
      $this->email_id = $email_id;
    }
}  
?>