<?php
    $loop1 = $_GET['loop'];
    $start = 1;
    $loop2 = $_GET['loop2'];
    $getsub1 = $_GET['loop2'];
    $getsub2 =  $_GET['loop2'];
    // $i = $_Get['numberType']

    /*while($start <= $loop1){
        echo "พืมพ์ครั้งที่".$start;
        echo "<br>";
        $start +=1;
    }*/
    /*echo "สูตรคูณแม่ ".$loop1."<br>";
    while($start <= 12){
        echo $loop1."x".$start."=".$loop1*$start."<br>";
        $start++;
    }*/
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 2 != 0) {
            echo $i . " ";
        }
    }
    /*for ($i = 1; $i <= 100; $i++) {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
    }*/
   /* if ($i == 'even') {
        // ทำอะไรกับเลขคู่
        for ($i = 1; $i <= $inputNumber; $i++) {
            if ($i % 2 == 0) {
                echo $i . " ";
            }
        }
    } elseif ($i == 'odd') {
        // ทำอะไรกับเลขคี่
        for ($i = 1; $i <= $inputNumber; $i++) {
            if ($i % 2 != 0) {
                echo $i . " ";
            }
        }
    }
    if($i == 'even'){
        while
    }*/
    echo"<br>";

    echo "สูตรคูณแม่ ".$loop1."<br>";
    while($start <= 13 && $loop1 <= $loop2){
        echo $loop1."x".$start."=".$loop1*$start."<br>";
        $start++;
        if($start == 13){
            $start =1; 
            $loop1++;
            echo "สูตรคูณแม่ ".$loop1."<br>";
        }
        if($loop1 == $loop2){
            
        }
       
    }

?>