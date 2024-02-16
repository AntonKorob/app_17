<?php

// define("MYAPP") or die("Funniy");

function dump($data){
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
}
function dd($data){
    
    var_dump($data);
    die;
}