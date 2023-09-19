<?php
function fibonacci($number){
    $number-=2;
    $first_number = 0;
    $second_number = 1;
    echo $first_number;
    echo "\n";
    echo $second_number;
    echo "\n";
    for($i = 0; $i<$number; $i++){
        $third_number = $first_number + $second_number;
        echo $third_number;
        echo "\n";
        $first_number = $second_number;
        $second_number = $third_number;
        
    }
}

echo "Fibonacci Series: First 15 Fibonacci numbers.\n";
fibonacci(15);

?>