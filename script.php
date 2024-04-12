<?php
    $parola = $_GET["word"];
    var_dump($parola);

    $paragraph = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat ad nemo nobis animi expedita vel, repellat perferendis placeat quisquam consequatur.";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
</head>
<body>

    <form action="script.php" method="GET">
        <input type="text" placeholder="Parola da censurare" name="word2" >
        <button type="submit">Sand</button>
    </form>
    
    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat ad nemo nobis animi expedita vel, repellat perferendis placeat quisquam consequatur.
    </p> 
    <p>Il Paragrafo è lungo: <?php echo strlen($paragraph) ?></p>
    
</body>
</html>