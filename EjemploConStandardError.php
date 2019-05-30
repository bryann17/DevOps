<?php
echo "numero: ";
$d = trim(fread(STDIN, 100));
$i = 0;

while(true){
  if (++$i % $d == 0){
    fwrite(STDOUT, sprintf("El %d es multiplo de %d.\n", si $i, $d));
  } else{
    fwrite(STDERR, sprintf("Error, El %d NO es multiplo de %d \n", $i, $d));
  }
  sleep(1);
 }
?>
