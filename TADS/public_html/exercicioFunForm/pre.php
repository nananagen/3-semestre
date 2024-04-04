<?php
   
    
    function funBaskara($a,$b,$c) {
      $delta = ($b*$b)-4*$a*$c;
    
      echo "Valor de delta é: ".$delta."<br>";
      if ($delta < 0){
        return "Raízes imaginárias (Erro NaN)";
      }else{
        $x1 = (-$b + sqrt($delta)) / (2*$a);
        $x2 = (-$b - sqrt($delta)) / (2*$a);
        return array($x1, $x2);
      }
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $b = $_POST['b'];
        $a = $_POST['a'];
        $c = $_POST['c'];
        
        $raizes = funBaskara($a,$b,$c);
    }

    if(isset($raizes)) {
        if(is_array($raizes)) {
            echo "Raiz 1: " . $raizes[0] . "<br>";
            echo "Raiz 2: " . $raizes[1] . "<br>";
        } else {
            echo $raizes;
        }
    }
?>