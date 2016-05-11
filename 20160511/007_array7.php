<?php
$array = array(
    0 => array(
        0 => "AA",
        1 => "AB"
    ),
    1 => array(
        0 => "BA",
        1 => "BB"
    ),
    2 => array(
        0 => "CA",
        1 => "CB" 
    )
);

var_dump($array);

echo "<br /><br /><br />";

foreach ($array as $key => $value) {
    foreach ($value as $key1 => $value1) {
        echo $key . $key1 . $value1 . "<br />";
    }
}
?>
