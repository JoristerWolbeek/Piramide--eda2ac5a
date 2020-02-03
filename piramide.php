<?php
$hoog = readline("hoe hoog moet de piramide zijn?");
$tegel = "*";

for($x=0; $x<$hoog;$x++){
    echo($tegel).PHP_EOL;
    $tegel .= "*";
}