<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*
    08 - PHP - Ajafunktsioonid
    Andre Pook
    Haapsalu Kutsehariduskeskus
    15.05.2026
    */
    $time = date('d.m.y G:i', time());
    $kasutaja1_vanus = 15;
    $kasutaja1_birthday = date('16.05.26 12:00', time());
    if ( $time < $kasutaja1_birthday) {
        echo "kasutaja on veel $kasutaja1_vanus"."<br>";
    }
    else {
        echo "kasutaja on saanud ".$kasutaja1_vanus+1,"<br>";
    }

    echo "sünnipäev: ".$kasutaja1_birthday."<br>";
    echo "praegu: ".$time."<br>";


    $kooliaasta_lopp = strtotime('21.06.26 00:00');
    $praegu = strtotime(date('d.m.y G:i', time())); 
    $test = $kooliaasta_lopp;
    $test = $praegu;
    echo $test.'<br>';

    ?>
</body>
</html>