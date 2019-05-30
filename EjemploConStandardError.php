<?php
echo "numero: ";
$d = trim(fread(STDIN, 100));
$i = 0;

while(true){
  if (++$i % $d == 0){
    fwrite(STDOUT, sprintf("El %d es multiplo de %d.\n", si $i, $d)); #Si esta correcto y es multiplo lo envia al Standar de salida
  } else{
    fwrite(STDERR, sprintf("Error, El %d NO es multiplo de %d \n", $i, $d)); #Si presenta fallo lo envia al standar de error
  }
  sleep(1);
 }
?>
