<?php
function fibonacci($number){
    $number-=2;
    $first_number = 0;
    $second_number = 1;
    // echo $first_number;
    // echo "\n";
    // echo $second_number;
    // echo "\n";
    for($i = 0; $i<$number; $i++){
        if($first_number == 0 && $second_number == 1){
            echo $first_number;
            echo "\n";
            echo $second_number;
            echo "\n";
        }
        $third_number = $first_number + $second_number;
        echo $third_number;
        echo "\n";
        $first_number = $second_number;
        $second_number = $third_number;
        
    }
}

echo "Fibonacci Series printing(first 15 numbers) using a Function.\n";
fibonacci(15);

?>