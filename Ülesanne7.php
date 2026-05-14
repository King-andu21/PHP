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
    </form';
    }
    echo bootstrap_news();
    
    


    ?>
    <form action="">
        Kasutajanimi <input type="text" name="var2"><br>
        <input type="submit" value=saada>
    </form>
    <?php
    $var2 = $_GET["var2"];
    echo $var2;
    function kasutajanimi_email($nimi){
    $lowercase_name = strtolower($nimi);
    echo $lowercase_name."<br>";
    $lowercase_name_email = $lowercase_name."@hkhk.edu.ee";
    echo $lowercase_name_email;
    }
    kasutajanimi_email("$var2")

    ?>
</body>
</html>