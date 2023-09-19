<?php
function printEvenNumbersUsingFor($start, $end, $step) {
    // Make sure the start is an even number
    if ($start % 2 != 0) {
        $start++;
    }

    for($i=$start; $i<=$end; $i+=$step){
        echo $i;
        
        // Add a comma and space unless it's the last number
        if($i < $end){
            echo ", ";
        }

        // Add a fullstop when it's the last number
        if($i == $end){
            echo ".";
        }
    }    
}


function printEvenNumbersUsingWhile($start, $end, $step) {
    // Make sure the start is an even number
    if ($start % 2 != 0) {
        $start++;
    }

    $i=$start;
    while($i<=$end){
        echo $i;
        
        // Add a comma and space unless it's the last number
        if($i < $end){
            echo ", ";
        }

        // Add a fullstop when it's the last number
        if($i == $end){
            echo ".";
        }
        $i+=$step;
    }    
}



function printEvenNumbersUsingDoWhile($start, $end, $step) {
    // Make sure the start is an even number
    if ($start % 2 != 0) {
        $start++;
    }

    $i=$start;
    do{
        echo $i;
        
        // Add a comma and space unless it's the last number
        if($i < $end){
            echo ", ";
        }

        // Add a fullstop when it's the last number
        if($i == $end){
            echo ".";
        }
        $i+=$step;
    }while($i<=$end);

}

// Call the function to print even numbers from 1 to 20 with a step of 2
echo "For Loop \n";
printEvenNumbersUsingFor(1, 20, 2);
echo "\n";
echo "\n";

echo "While Loop \n";
printEvenNumbersUsingWhile(1, 20, 2);
echo "\n";
echo "\n";

echo "Do-While Loop \n";
printEvenNumbersUsingDoWhile(1, 20, 2);

?>