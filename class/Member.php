<?php

class Member
{
  private $_id;
  private $_pwd;
  private $_name;
  private $_lname;
  private $_type;
  private $_address;
  private $_email;

  public function setID($id){
    $this->_id = $id;
  }
  public function getID(){
    return $id;
  }
  public function setpwd($pwd){
    $this->_pwd =  $pwd;
  }
  public function getpwd(){
    return $pwd;
  }
  public function setname($name){
    $this->_name =  $name;
  }
  public function getname(){
    return $name;
  }public function setlname($lname){
    $this->_lname =  $lname;
  }
  public function getlname(){
    return $lname;
  }public function settype($type){
    $this->_type =  $type;
  }
  public function gettype(){
    return $type;
  }public function setaddress($address){
    $this->_address =  $address;
  }
  public function getaddress(){
    return $address;
  }public function setemail($email){
    $this->_email =  $email;
  }
  public function getemail(){
    return $email;
  }
  public function __construct($id,$pwd,$name,$lname,$type,$address,$email)
  {

      $this->_id = $id;
      $this->_name =$name;
      $this->_lname = $lname;
      $this->_pwd =  $pwd;
      $this->_type = $type;
      $this->_address = $address;
      $this->_email = $email;

  }

  public function register($conn)
  {

      $sql = "SELECT COUNT(mem_id) AS cData FROM member WHERE mem_id = '".$this->_id."'";
      $rs = $conn->query($sql) or die($sql."<br>".$conn->error);
      $data = $rs->fetch_array();

      if($data['cData'] != 0) {

          echo "<script>alert('username ถูกใช้แล้วจ้าาา');window.history.back()</script>";
          return -1;

      }

      $sql = "INSERT INTO member
                (mem_id, mem_name, mem_lname, mem_pass, mem_type, mem_add, mem_email)
                VALUES
                ('".$this->_id."','".$this->_name."','".$this->_lname."','".$this->_pwd."','".$this->_type."','".$this->_address."','".$this->_email."')";
      $conn->query($sql) or die($sql."<br>".$conn->error);
      echo "<script>alert('บักทึกแล้วจ้าาา');window.location='index.html'</script>";
  }

}

?>
