<?php
include 'database.php';

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/style.css">
        <title>Project CD php</title>
    </head>
    <body>
        <?php include 'header.php'; ?>

        <div class="container">
            <main>
                <?php 
                    foreach($arrayCDs as $key => $cd) {
                ?>
                        <div class="card">
                            <?php echo $cd["cover"]; ?>
                            <?php echo $cd["album"]; ?>
                            <?php echo $cd["author"]; ?>
                            <?php echo $cd["year"]; ?>
                        </div>
                        
                        
                        
                <?php
                    }
                ?>
                
            </main>
        </div>

        <?php include 'footer.php'; ?>

    </body>
</html>