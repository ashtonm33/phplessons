

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
  <body>    
    <?php
    include 'includes/header.php';
?>
    <h1>Hello, world!</h1>

<?php
    //Loop

    //Do while loop
    //For loop
    //Foreach loop

    $x = 1;
    while ($x<=5){
        echo "hi there<br>";
        $x++;
    }
    //end of video 17
    //start of video 18
    $x= 1;
    do {
        echo "hi there<br>";
        $x++;
    }
    while ($x <= 5);
    //end of video 18

    //start of video 19
    for($x = 0; $x <= 10; $x++) {
        echo "hi<br>";
    }
    //end of video 19

    //start of video 20
    $array = array("Daniel", "Jane", "Jacob", "John", "Mariane");

    foreach ($array as $loopdata) {
        echo "My name is".$loopdata."<br>";
    }
    //end of video 20
 ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>