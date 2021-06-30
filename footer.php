<?php
include 'database.php';

?>

<footer>
    <ul>
        <?php 
            for($i = 0; $i < count($companyInfo); $i++) {
                echo "<li>" . $companyInfo["$i"] . "</li>";
            }
        ?>
        
        
    </ul>
    <ul>
        <?php 
            for($i = 0; $i < count($community); $i++) {
                echo "<li>" . $community["$i"] . "</li>";
            }
        ?>
        
        
    </ul>
    <ul>
        <?php 
            for($i = 0; $i < count($links); $i++) {
                echo "<li>" . $links["$i"] . "</li>";
            }
        ?>
        
        
    </ul>
    
</footer>