<?php
  $var = $_GET['txtTabuada'];
  $i=0;
  $resposta="";
  while($i<=10){
      $r = $i*$var;
      $resposta= $resposta."$var x $i = $r <br>";
      $i++;
  }
  header("Location: ExTaboada_form.php?txtResposta=$resposta&txtTabuada=$var");
?>