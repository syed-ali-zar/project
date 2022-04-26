<?php

use A as GlobalA;

include "reportingerror.php";

class A{
    public $a;
    public static $v=3.14;
    public function __construct($a){
        $this->a=$a;
    }
    public function mult(){
        return $this->a*self::$v;
    }
    
}
$A=new A(5);
 echo $A->mult();
 $A=new A(15);
 echo "<br>" . $A->mult();
 echo  "<br>"  . $A->a;

?>