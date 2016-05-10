<?php
$array = array( '!たのしい', 'ためになる', 'すばらしい', '!ずっとやりたい', '!現場で使える' );

foreach ( $array as $value ) {
  echo $value."<br />";
}

$array[5] = "研修";

echo "<br /><br />";

foreach ( $array as $key => $value ) {
  echo $key." ".$value."<br />";
}
?>
