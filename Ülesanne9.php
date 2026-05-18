<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        Sisesta nimi <input type="text" name="nimi"><br>
        <input type="submit" value=saada>
    </form>
    <?php
    /*
    09 - PHP - Tekstifunktsioonid
    Andre Pook
    Haapsalu Kutsehariduskeskus
    15.05.2026
    */
    $nimi = $_GET["nimi"];
    $nimi = strtolower($nimi);
    $nimi = ucfirst($nimi);
    echo"Tere, ".$nimi."!";
    ?>
    <form action="">
        Tükelda tekst <input type="text" name="tykeldus"><br>
        <input type="submit" value=saada>
    </form>
    <?php
    $tykeldus = $_GET["tykeldus"];
    $tykeldus = strtoupper($tykeldus);
    $len = strlen($tykeldus);
    foreach (range(0, $len -1) as $i) {
        echo $tykeldus[$i].".";
    }

    $tekst = 'Sa oled täielik noob';
    $otsi = 'noob';
    $asenda = '****';
    echo "<br>".str_replace($otsi, $asenda, $tekst)."<br>"; 
    ?>
    <form action="">
        Emaili nimi <input type="text" name="enimi"><br>
        <input type="submit" value=saada>
    </form>
    <?php
    $tekst = 'Sa oled täielik noob';
    $otsi = 'noob';
    $asenda = '****';
    echo "<br>".str_replace($otsi, $asenda, $tekst)."<br>"; 

    $enimi = $_GET["enimi"];
    $enimi = strtolower($enimi);
    $elen = strlen($enimi);


    $enimi = str_replace('ä', 'a', $enimi);
    $enimi = str_replace('ü', 'y', $enimi);
    $enimi = str_replace('õ', 'o', $enimi);
    $enimi = str_replace('ö', 'o', $enimi);
    echo $enimi."<br>";
    $enimi = explode(' ', $enimi);
    echo $enimi[0].".".$enimi[1]."@hkhk.edu.ee";
    
    
    
    
    ?>
</body>
</html>