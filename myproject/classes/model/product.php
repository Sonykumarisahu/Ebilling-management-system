<?php
class product {
	private $serial_no;
	private $product_name;
	private $duration;
	private $price;
	function getSerial_no()
    {
      return $this->serial_no;
    }
    function getProduct_name()
    {
      return $this->product_name;
    }
	/*function getCaf_form_no()
    {
      return $this->caf_form_no;
    }
	function getCompany_name()
    {
      return $this->company_name;
    }*/
	function getDuration()
    {
      return $this->duration;
    }
	/*function getDate_arrival()
    {
      return $this->Date_arrival;
    }*/
	function getPrice()
    {
      return $this->price;
    }
	
    function setSerial_no($serial_no)
    {
      $this->serial_no = $serial_no;
    }
    function setProduct_name($product_name)
    {
      $this->product_name = $product_name;
    }
	/*function setCaf_form_no($caf_form_no)
    {
      $this->caf_form_no=$caf_form_no;
    }
	function setCompany_name($company_name)
    {
      $this->company_name=$company_name;
    }*/
	function setDuration($duration)
    {
      $this->duration = $duration;
    }
	/*function setDate_arrival($date_arrival)
    {
      $this->date_arrival=$date_arrival;
    }*/
    function setPrice($price)
    {
      $this->price = $price;
    }
}  
?>