<?php



 include "reportingerror.php";

 abstract class car {
     protected $volume;

     public function __construct($volume){
         $this->volume=$volume;
     }

     abstract public function total_miles();
 }
 class toyota extends car{
     public function total_miles()
     {
         $miles=$this->volume*24;
         echo " volume is " . $miles ;
     }
 }
 $toyota=new toyota(45);
  $toyota->total_miles();
?>