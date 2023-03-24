<?php
class Employer {

  public $name;
  public $sttaf_no;
  public $sector;
  public $no_branches;

  function __construct($name,$sttaf_no,$sector,$no_branches){
    $this->name =$name;
    $this->sttaf_no =$sttaf_no;
    $this->sector =$sector;
    $this->no_branches =$no_branches;

  }

  // function intro(){
  //   echo ''
  // }
  
}

class corrohealth extends Employer{
  
  public function do_medical_coding(){
   echo 'Past 4 years we are a Revenu cycle Management Institution';
  }
}

$corrochenai =new corrohealth();
?>