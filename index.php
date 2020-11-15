<?php
    // while loop: 
    $i = 1;
    while($i < 101){
        if($i % 3 === 0 && $i % 5 === 0){
            echo "FizzBuzz\n"; 
        }elseif($i % 3 === 0){
            echo "Fizz\n"; 
        }elseif($i % 5 === 0){
            echo "Buzz"; 
        }else{
            echo "$i\n";
        }
        $i++;
    }
    


