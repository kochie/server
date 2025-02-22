<?php

namespace DBA;

class RegVoucher extends AbstractModel {
  private $regVoucherId;
  private $voucher;
  private $time;
  private $trusted;
  
  function __construct($regVoucherId, $voucher, $time, $trusted) {
    $this->regVoucherId = $regVoucherId;
    $this->voucher = $voucher;
    $this->time = $time;
    $this->trusted = $trusted;
  }
  
  function getKeyValueDict() {
    $dict = array();
    $dict['regVoucherId'] = $this->regVoucherId;
    $dict['voucher'] = $this->voucher;
    $dict['time'] = $this->time;
    $dict['trusted'] = $this->trusted;
    
    return $dict;
  }
  
  function getPrimaryKey() {
    return "regVoucherId";
  }
  
  function getPrimaryKeyValue() {
    return $this->regVoucherId;
  }
  
  function getId() {
    return $this->regVoucherId;
  }
  
  function setId($id) {
    $this->regVoucherId = $id;
  }
  
  /**
   * Used to serialize the data contained in the model
   * @return array
   */
  public function expose() {
    return get_object_vars($this);
  }
  
  function getVoucher() {
    return $this->voucher;
  }
  
  function setVoucher($voucher) {
    $this->voucher = $voucher;
  }
  
  function getTime() {
    return $this->time;
  }
  
  function setTime($time) {
    $this->time = $time;
  }

  function getTrusted() {
    return $this->trusted;
  }

  function setTrusted($trusted) {
    $this->trusted = $trusted;
  }
  
  const REG_VOUCHER_ID = "regVoucherId";
  const VOUCHER = "voucher";
  const TIME = "time";
  const TRUSTED= "trusted";
}
