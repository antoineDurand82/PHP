<?php include_once ('./header.php') ?>

    <body>
        <form method="POST">
        <button name="submit"> Spawn random </button>
        </form>

        <?php
            if(isset($_POST['submit']))
            {
                $name = $spawn[array_rand($spawn)]['name'];
                $img = $spawn[array_rand($spawn)]['linkimg'];
                echo $name;
                echo '<img src="' . $img . '"><br>';
                
            }
            
        
        ?>
    </body>


</html>