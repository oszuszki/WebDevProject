<?php

$myfile = fopen("../password/password.txt", "r") or die("Unable to open file!");


$key = [5,-14,31,-9,3];
$counter = 0;
$array = [];

while(!feof($myfile)) {
    $c = (fgetc($myfile));  //char
    $hex = bin2hex($c);
    if ($hex != "0a"){
        $dec = hexdec($hex);
        switch($counter){
            case 0: 
                array_push($array,chr($dec - $key[$counter]));
                $counter = $counter + 1;
            break;    
            case 1: 
                array_push($array,chr($dec - $key[$counter]));
                $counter = $counter + 1;
            break;
            case 2: 
                array_push($array,chr($dec - $key[$counter]));
                $counter = $counter + 1;
            break;
            case 3: 
                array_push($array,chr($dec - $key[$counter]));
                $counter = $counter + 1;
            break;
            case 4: 
                array_push($array,chr($dec - $key[$counter]));
                $counter = 0;
            break;
        }
    } else {
        $dec = hexdec($hex);
        array_push($array,chr($dec)); 
        $counter = 0;
    }
  }

$decoded = (implode("", $array));

fclose($myfile);

?>
