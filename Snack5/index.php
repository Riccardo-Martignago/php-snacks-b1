<?php 
    $paragraf = "Il sole stava tramontando dietro le colline, tingendo il cielo di sfumature arancioni e rosa. Gli uccelli cantavano melodie dolci mentre volavano verso i loro nidi. Nel villaggio, le persone iniziavano a rientrare nelle loro case dopo una lunga giornata di lavoro nei campi. I bambini, ancora pieni di energia, correvano e giocavano nelle strade polverose, ridendo e urlando di gioia. L'aria era fresca e profumata di erba tagliata di recente e di fiori selvatici. Alcuni anziani si sedevano sui loro portici, scambiandosi storie e ricordi di tempi passati. Era un momento di pace e serenità, in cui la bellezza della natura e la semplicità della vita quotidiana si fondevano perfettamente, creando un'atmosfera magica e incantata.";
    $paragrafToString = explode(".", $paragraf, );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercises</title>
</head>
<body>
    <?php 
    echo var_dump($paragrafToString);
    ?>
</body>
</html>