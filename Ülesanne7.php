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
    07 - PHP - Funkstioonid
    Andre Pook
    Haapsalu Kutsehariduskeskus
    14.05.2026
    */
    function tervitus(){
        return "Tere Peeter<br><hr>";
    }
    echo tervitus();
    function bootstrap_news(){
            return 'liitu bootstrap uudistega <form action="">
        Email <input type="email" name="var1"><br>
        <input type="submit" value=saada>
    </form>';
    }
    echo bootstrap_news();
    
    echo'<br><form action="">
        Kasutajanimi <input type="text" name="test"><br>
        <input type="submit" value=saada>
    </form>';
    function kasutajanimi_email($nimi){
    $lowercase_name = strtolower($nimi);
    echo $lowercase_name."<br>";
    $lowercase_name_email = $lowercase_name."@hkhk.edu.ee";
    echo $lowercase_name_email;
    }
    $var1 = $_GET["test"];
    function assign_rand_value($num) {

    // accepts 1 - 36
    switch($num) {
        case "1"  : $rand_value = "a"; break;
        case "2"  : $rand_value = "b"; break;
        case "3"  : $rand_value = "c"; break;
        case "4"  : $rand_value = "d"; break;
        case "5"  : $rand_value = "e"; break;
        case "6"  : $rand_value = "f"; break;
        case "7"  : $rand_value = "g"; break;
        case "8"  : $rand_value = "h"; break;
        case "9"  : $rand_value = "i"; break;
        case "10" : $rand_value = "j"; break;
        case "11" : $rand_value = "k"; break;
        case "12" : $rand_value = "l"; break;
        case "13" : $rand_value = "m"; break;
        case "14" : $rand_value = "n"; break;
        case "15" : $rand_value = "o"; break;
        case "16" : $rand_value = "p"; break;
        case "17" : $rand_value = "q"; break;
        case "18" : $rand_value = "r"; break;
        case "19" : $rand_value = "s"; break;
        case "20" : $rand_value = "t"; break;
        case "21" : $rand_value = "u"; break;
        case "22" : $rand_value = "v"; break;
        case "23" : $rand_value = "w"; break;
        case "24" : $rand_value = "x"; break;
        case "25" : $rand_value = "y"; break;
        case "26" : $rand_value = "z"; break;
        case "27" : $rand_value = "0"; break;
        case "28" : $rand_value = "1"; break;
        case "29" : $rand_value = "2"; break;
        case "30" : $rand_value = "3"; break;
        case "31" : $rand_value = "4"; break;
        case "32" : $rand_value = "5"; break;
        case "33" : $rand_value = "6"; break;
        case "34" : $rand_value = "7"; break;
        case "35" : $rand_value = "8"; break;
        case "36" : $rand_value = "9"; break;
    }
    return $rand_value;
    }
    kasutajanimi_email("$var1");
    echo "<br>Suvaline 7-kohaline kood:";
    for ( $i = 0; $i < 7; $i++ ){
        $sel = rand(1,2);
        if ($sel == 1){
        
        echo rand(0,9);
        }
        else {
            $num = rand(1,36);
            echo assign_rand_value($num);
        }
    }

    echo'<br>Vahemik x-z <form action="">
        x <input type="number" name="vahemik1"><br>
        z <input type="number" name="vahemik2"><br>
        step <input type="number" name="step"><br>
        <input type="submit" value=saada>
    </form>';
    $vahemik1 = $_GET["vahemik1"];
    $vahemik2 = $_GET["vahemik2"];
    $step = $_GET["step"];
    function linear_steps($vahemik1_t,$vahemik2_t,$step_t) {
        foreach (range($vahemik1_t,$vahemik2_t) as $i){
            if ($i % $step_t == 0){
                echo "$i ";
            }
        }
    }
    if (!$vahemik1 || !$vahemik2 || !$step) {

    }
    else {
        linear_steps($vahemik1,$vahemik2,$step);
    }


    echo'<br>Ristküliku pindala <form action="">
        a <input type="number" name="side_a"><br>
        b <input type="number" name="side_b"><br>
        <input type="submit" value=saada>
    </form>';
    $side_a = $_GET["side_a"];
    $side_b = $_GET["side_b"];
    function rystkyliku_pindala ($side_a_t,$side_b_t) {
    $answer = $side_a_t * $side_b_t;
    return "Rüstküliku pindala: $answer";

    }
    if (!$side_a || !$side_b) {

    }
    else {
        echo rystkyliku_pindala($side_a,$side_b);
    }
    echo'<br>Isikukood <form action="">
        <input type="number" name="isikukood"><br>
        <input type="submit" value=saada>
    </form>';
    $isikukood = $_GET["isikukood"];

    function isikukood_scan($isikukood_t) {
        if (strlen($isikukood_t)== 11) {
            echo "õige pikkus<br>";
            $sugu = substr($isikukood_t, 0, 1);
            if (substr($sugu, 0) % 2 == 0){
                echo "sa oled naine!<br>";
            }
            else {
                echo "sa oled mees!<br>";
            }
            echo "sünniaasta 2 viimast numbrit: ".substr($isikukood_t, 1, 2)."<br>";
            if (substr($isikukood_t, 3, 2) > 12 ) {
                echo "sünnikuu ei eksisteeri! Võltsitud Isikukood! --V A L M I S T U- -L Õ H K E M I S E K S--<br>";
            }
            else {
                echo "sünnikuu: ".substr($isikukood_t, 3, 2)."<br>";
            }
            if (substr($isikukood_t, 5, 2) > 31 ) {
                echo "sünnikuupäev ei eksisteeri! Võltsitud Isikukood! --V A L M I S T U- -L Õ H K E M I S E K S--<br>";
            }
            else {
                echo "sünnikuupäev: ".substr($isikukood_t, 3, 2)."<br>";
            }

        }
        else {
            echo "vale pikkus";
        }
    }
    isikukood_scan($isikukood);
    $alus = array("Seep","Paul","Joonas","Jenny","Haug","Peeter");
    $oeldis = array("ehitas","jõi","peksis","tervitas","ärandas","sõi");
    $sihitis = array("haagist","õlut","akent","joodikut","raha","tellist");
    function motted ($a,$b,$c){
    echo $a[rand(0,5)]." ";
    echo $b[rand(0,5)]." ";
    echo $c[rand(0,5)]." ";
    }
    motted($alus,$oeldis,$sihitis);
    ?>
</body>
</html>