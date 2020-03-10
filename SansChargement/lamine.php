
<?php
if( isset($_POST['n']) && isset($_POST['e']) && isset($_POST['m']) ){
  $n = $_POST['n']; // HINT: use preg_replace() to filter the data
  $e = $_POST['e'];
  $m = nl2br($_POST['m']);
  //Affichage
  echo " NOM: $n       <br/>";
  echo " MAIL: $e      <br/>";
  echo " MESSAGE:  $m  <br/>";
}
?>