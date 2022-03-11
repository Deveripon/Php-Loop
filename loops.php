<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo "loops &  uses" ?> </title>
</head>
<body>

<?php

 ////////////////////// FOR LOOPS////////////////////////////////

    // for($i = 0; $i <= 10; $i++){

    //    echo " my name is ripon <br>";
    // }
 
    // for( $i = 51; $i <= 100; $i++ ){
    //     echo $i ." my name is ripon <br>";
    // }

    // for( $i = 1000; $i<= 1500; $i++){
    //     echo " loop val = {$i} <br>";

    // }

    // for( $i = 5000; $i >= 4500; $i--){
    //     echo " loop val = {$i} <hr>";

    // }

    // for($i = 1000; $i <= 1100; $i++){

    //     echo " i love php {$i} <br>";
    // }

    // echo "<hr>";
    // echo "<hr>";

    // for( $i = 1000; $i>= 900; $i--){
    //     echo " loop val = {$i} <hr>";
    // }


    // for( $i = 1; $i<=100; $i++){
    //     if( $i % 2 == 0){
    //         echo " loop val = {$i} <br>";
    //     }
        
    // }

    // for( $i = 1; $i <= 100; $i++){

    //     if($i >=50 && $i <=100){

    //         if( $i % 2 == 0){

    //             echo " loop val = {$i} <hr>";
    //         }
    //     }
        
    // }

    // for( $i = 1; $i <= 1000; $i++){
    //     if( $i >= 750 && $i <= 1000){
    //         if($i % 7 == 0){
    //             echo " loop val = {$i} <hr>";
    //         }

    //     }
    // }

    // for($i = 1; $i<= 1000; $i++){
    //     if($i >= 100 && $i<= 300 && $i % 11 == 0){
    //         echo " loop val = {$i} <hr>"; 
    //     }
 

    //     if($i >= 700 && $i<= 1000 && $i % 9 == 0){
    //         echo " loop val = {$i} <br>" ;
    //     }
    // }

    // for($i = 1; $i<= 50;  $i= $i+5){

    //     echo " Loop Val = {$i} <br>" ;

    //   if( $i % 10 == 0){

    //     break;

    //   }  
    // }



// ////////////////////////while loop/////////////////////////////
         
        $i = 4;
        while( $i<= 20){
            echo $i." ". "i love php <hr>" ;

            $i++;
        }



        
    // do while loop/////////////////////////////////

    $i = 1;
    do{
        echo " i love php <br>";
        $i++;
    }
    while( $i<= 40);
  


?>








    
</body>
</html>