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
    02 - PHP - Matemaatilised tehted
    Andre Pook
    Haapsalu Kutsehariduskeskus
    04.05.2026
    */
    $var1 = 2;
    $var2 = 4;
    $var_plus = $var1+$var2;
    $var_minus = $var1-$var2;
    $var_multiply = $var1*$var2;
    $var_divide = $var1/$var2;
    $var_leftover = $var1%$var2;

    $var_length_mm = 1234;
    $var_length_cm = $var_length_mm/10;
    $var_length_m = $var_length_cm/10;
    printf("mm to cm %0.2f <br>", $var_length_cm);
    printf("cm to m %0.2f <br>", $var_length_m);
    $triangle_length = 3;
    $triangle_umbermoot = $triangle_length*3;
    $triangle_pindala = $triangle_length*$triangle_length/2;
    printf("Kolmnurga ümbermõõt on %1.0f <br>", $triangle_umbermoot);
    printf("Kolmnurga pindala on %1.0f <br>", $triangle_pindala);
    ?>
</body>
</html>