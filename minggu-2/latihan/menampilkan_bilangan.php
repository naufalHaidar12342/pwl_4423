<?php
//perulangan for//

/*sumber : https://w3codeworld.com/article/330/write-a-program-to-draw-the-half-pyramid-pattern-in-php-language-of-stars-using-the-for-loop */

    // $angka=1;
    for ($angka=1; $angka<=5; ++$angka){ 
        for ($angka2=1; $angka2<=$angka ; ++$angka2) 
            echo "$angka";
        echo "<br>";
        // if ($angka=1) {
        //     echo "<br>";
        // }
        // else{
        //     echo $angka;
        // }
        // echo "<br>";
        # code...
    // echo "<br>";
    }
    echo "<br>";
    echo "====================="; echo "<br>";

    $patokan=1;
    $patokan2=1;
    // $baris=5;
    while ($patokan <= 5) {
        // echo "";
        // $patokan2=0;
        echo "$patokan";
        while ($patokan2<$patokan);
        
            echo "$patokan2";
            # code...
            ++$patokan2;
        ++$patokan;
        echo "<br>";
    }

?>