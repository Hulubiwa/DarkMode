<?php
session_start();

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <?php
            if($_SESSION['theme'] == "Dark"){
                echo "<link rel='stylesheet' type='text/css' href='../css/dark.css'>";
            }
            else{
                echo "<link rel='stylesheet' type='text/css' href='../css/theme.css'>";
            }
        ?>
        
    </head>

    <body>
        <main>

            <?php
            $a = $_SESSION['theme'];
            echo "<h1>$a !</h1>";
            ?>
            
            <form method="post" action="changeMode.php" class="bouton">
                <?php
                    if($_SESSION['theme'] == "Dark"){
                        echo "<button>Go in White</button>";
                    }else{
                        echo "<button>Go in Dark</button>";
                    }
                ?>
                
            </form>

            <div class="bouton">
                
            </div>
        </main>
    </body>
</html>