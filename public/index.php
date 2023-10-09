<?php
    require_once('../source/config.php');
    require_once('../source/data.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <h2 class="naam">muziek winkeltje</h2>
        <nav>
        <button class="button" type="button">zoek</button>
        <button class="button" type="button">dropdown</button>
        </nav>
    </header>
    <main>
        <div class="content">
        <?php
            foreach( $library as $single){
                echo $single['titel'] . '<br>';
                include('../views/card.php');
            }

            for ($i=0; $i < 10 ; $i++) { 
                include('../views/card.php');
            }
        ?>
        </div>
    </main>
</body>
</html>

