<?php

    $paragraph = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit maiores commodi ipsum natus sint nulla.';
   

    if(isset($_GET['word'])){
        $newParagraph = str_replace($_GET['word'], '***', $paragraph);
    }else{
        $newParagraph = 'Inserisci una parola da censurare inserendo nella url: ?word=parola';
    }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Paragrafo originale e la sua lunghezza:</h1>
    <p> <?php echo $paragraph ?> </p>
    <span> <?php echo strlen($paragraph) ?> </span>
    <br><br>
    <h2>Il paragrafo modificato e la sua lunghezza:</h2>
    <p> <?php echo $newParagraph ?> </p>
    <span> <?php echo strlen($newParagraph) ?> </span>
</body>
</html>