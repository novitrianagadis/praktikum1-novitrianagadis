<?php
    echo"<center>";
    echo"1. piramida bintang rata kanan";
    echo"<br/>";
    echo"<br/>";
    $star= 5;
    for($a=1;$a<=$star; $a++) {
        for($b=1; $b<=$a; $b++){
           echo " &nbsp";
        }
        for($c=$star; $c>=$a; $c-=1){
            echo "*";
        }
        echo "<br> ";
    }
    echo"<br/>";
    echo"<br/>";
    echo"<br/>";

    echo"2. piramida bintang";
    echo"<br/>";
    echo"<br/>";
    echo"<center>";
    $bintang=10;
        while($bintang > 1){
            $i = $bintang;
            while($i >= 1){
                echo"*";
                $i = $i - 1;
            }
            $bintang = $bintang - 2;
            echo "<br>";
           
        }
    echo"</center>";
    echo"<br/>";
    echo"<br/>";
    echo"<br/>";

    echo"3. piramida angka";
    echo"<br/>";
    echo"<br/>";
    for ($d=5; $d >= 1 ; $d--) { 
        for ($e=5; $e > $d ; $e--) { 
            echo "&nbsp ";
        }
        for ($f=1; $f < ($d * 2) ; $f++) { 
            echo $f;

        }
        echo "<br>";
        
    }
    
?>