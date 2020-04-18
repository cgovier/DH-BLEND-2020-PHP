<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function voto($idade)
    {
        if ($idade <= 16 && $idade < 18 || $idade > 70) {
            return "Voto Facultativo";
        } elseif ($idade >= 18 || $idade <= 70) {
            return "Voto Obrigatorio";
        } else {
            return "Nao Vota";
        }
    }
    ?>
    Voto?<br>
    <?php echo voto(17) ?>
    <hr>
    <p>SWITCH CASE</p>
    <?php
    $favcolor = "red";

    switch ($favcolor) {
        case "red":
            echo "Your favorite color is red!";
            break;
        case "blue":
            echo "Your favorite color is blue!";
            break;
        case "green":
            echo "Your favorite color is green!";
            break;
        default:
            echo "Your favorite color is neither red, blue, nor green!";
    }
    ?>
    <?php
     
    ?>
</body>

</html>