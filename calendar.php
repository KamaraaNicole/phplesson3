<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">  
  </head>

  <body>
  <body> 

<?php
    $dayofweek = date("w");

    switch ($dayofweek) {
        case 1:
            echo "it is Monday!";
            break;
            case 2;
            echo "it is Tuesday!";
            break; 
            case 3: 
                echo "it is Wednesday!";
                break;
                case 4: 
                echo "it is Thursday!";
                break; 
                case 5:  "it is Friday!";
                break; 
                case 6:
                echo "it is Saturday!";
                case 0:
                break;
                echo  "it is Sunday!";
    }

    ?></body>
</html> <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>