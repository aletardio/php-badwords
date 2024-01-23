<?php 
    $paragraph = $_GET['paragraph'];
    $word = $_GET['word'];

    strlen($paragraph." ".$word);
    $new_paragraph = str_replace($word, '***', $paragraph);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>
        <?php echo $paragraph;?>
    </h2>
    <div>
        La lunghezza del paragrafo è: <?php echo strlen($paragraph." ".$word);?>
    </div>
    <h2>
        <?php echo $new_paragraph;?>
    </h2>
    <div>
        La lunghezza del nuovo paragrafo è: <?php echo strlen($new_paragraph);?>
    </div>
</body>
</html>