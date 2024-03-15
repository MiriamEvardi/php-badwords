<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$text = $_GET['text'];
$badword = $_GET['badword'];

if(empty($text)) {
    $text = 'Non hai scritto niente';
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Results</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body style="background-color: violet">

    <div class="mx-5 py-2 mt-5 pb-5" style="background-color: purple">

        <h1 class="text-center my-5 display-2" style="color: violet">IL TESTO CHE HAI SCRITTO E':</h1>

        <p class="text-center text-white fs-3"> <?php echo $text = str_replace($badword, '***', $text)?> </p>
        <div class="text-center text-white fs-5">Hai utilizzato <?php echo strlen($text) ?> caratteri</div>
    </div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>