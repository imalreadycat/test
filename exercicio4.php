<?php

$vnum = array($_GET["v1"], $_GET["v2"], $_GET["v3"], $_GET["v4"], $_GET["v5"]);
echo "<pre>";
print_r($vnum);

$maior = 0;

for($i=0; $i<count($vnum); $i++){
    if($vnum[$i] > $maior){
       $maior = $vnum[$i]; 
    }
    
    if($vnum[$i] % 2 == 0){
      echo $vnum[$i]." é par <br>";  
    }
    
    if($vnum[$i] % 3 == 0 && $vnum[$i] % 5 == 0){
      echo $vnum[$i]." é multiplo de 3 e 5 <br>";  
    }
}

echo "maior valor: ". $maior;

?>

