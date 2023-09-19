<?php
function fibonacci($number){
    //$number-=2;
    $first_number = 0;
    $second_number = 1;
    // echo $first_number;
    // echo "\n";
    // echo $second_number;
    // echo "\n";
    for($i = 0; $i<$number; $i++){
        $third_number = $first_number + $second_number;
        if($third_number > 100){
            break;
        }
        echo $third_number;
        echo "\n";
        $first_number = $second_number;
        $second_number = $third_number;
        
    }
}

echo "First 10 Fibonacci numbers.\n";
fibonacci(10);

?>