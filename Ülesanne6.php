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
    06 - PHP - Tsüklid
    Andre Pook
    Haapsalu Kutsehariduskeskus
    14.05.2026
    */
    $change = 0;
    foreach(range(1,100) as $i){
    echo $i.". ";
    $change +=1;
        if($change == 10){
        echo "<br>";
        $change = 0;
        }
    }
    foreach(range(1,10) as $i){
    echo "*";
    }
    foreach(range(1,10) as $i){
    echo "<br>*";
    }
    ?>
    <form action="">
        Ruudu Suurus <input type="number" name="var1"><br>
        <input type="submit" value=saada>
    </form>
    <?php
        $var1 = $_GET["var1"];
        foreach(range(1,$var1) as $i){
                foreach(range(1,$var1) as $i){
                    echo "*";
                }
            echo "<br>";
        }
        foreach(range(10,1) as $i){
            if($i % 2== 0){
            echo "$i<br>";
            }
        }
    
                foreach(range(1,100) as $i){
            if($i % 3== 0){
            echo "$i<br>";
            }
        }
    $poisid = array("Dave","Albert","Dingle","Terry","Jerry","Jeff","Joe",);
    $tydrukud = array("Diana","Abigail","Emily","Penny","Pam","Lea","Jenny",);
    $loop_value = 0;
    foreach($poisid as $i){
        $j = $tydrukud[$loop_value];
        echo($i." and ".$j."<br>");
        $loop_value += 1;
    }
    ?>
</body>
</html>