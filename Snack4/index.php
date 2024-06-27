<?php 
    $array = [];

    while(count($array) < 15){
        $numb = rand(1, 16);
        if(!in_array($numb, $array)){
            array_push($array, $numb);
        };
    };

    print_r($array);
?>
