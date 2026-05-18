<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <menu>
        <a href="index.php?exist=yes">Avaleht</a> |
        <a href="index.php?leht=portfoolio">Portfoolio</a> |
        <a href="index.php?leht=kaart">Kaart</a> |
        <a href="index.php?leht=kontakt">Kontakt</a> |
        <a href="index.php?leht=">tyhi</a>
    </menu>
    <?php
    if(!empty($_GET["leht"])){

    $leht = htmlspecialchars($_GET["leht"]);
    $lubatud_lehed = array("kaart","kontakt");
    $kontroll = in_array($leht, $lubatud_lehed);
    if ($kontroll ==true or !empty($_GET['exist'])) {
        if(!empty($_GET['leht'])){
            include($_GET['leht'].'.php');
        }
        elseif(!empty($_GET['exist'])){
            echo"oled avalehel";      
        }
        else{
            echo'leht ei eksisteeri';
        }
    }
    }


    if (!empty($leht)){
        echo 'pole luba lehte avada';
    }
    elseif(empty($_GET['exist'])){
        echo'leht ei eksisteeri';
    }
    ?>
    <h2>Avaleht</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus tempora incidunt molestias laboriosam officiis nostrum! Accusantium sed reiciendis placeat aperiam soluta voluptatibus totam delectus ab natus dolorum, voluptas, aut sequi.</p>
</body>
</html>