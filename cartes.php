<?php
$nombres_cartes = array(1,2,3,4,5,6,7,8,9,10,11,12,13);
$type_cartes = array("♦","♣","♥","♠");
$deck = array();
for ($i=0; $i < count($type_cartes); ++$i){
  for ($j=0; $j < count($nombres_cartes); ++$j){
    $deck[] = $nombres_cartes[$j] ."-". $type_cartes[$i]  ;
  }
}
$deck1 = array_slice($deck,0,26);
$deck2 = array_slice($deck,26);

$finaldeck = array();
for ($i=0; $i <= 25; $i++)
{
$finaldeck[] = $deck1[$i];
$finaldeck[] = $deck2[$i];
}
var_dump($finaldeck);
?>


<html><body>
<?php
echo '<table>';
$k = 0;
for ($i=1; $i<=4; $i++) {
   echo '<tr>';
   for ($j=1; $j<=13; $j++) {
         echo '<td>';
         echo $deck[$k].'<br>';
         $k += 1;
         echo '</td>';

   }
   echo '</tr>';
}
echo '</table>';
?>
</body></html> 