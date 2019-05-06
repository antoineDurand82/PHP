<?php include_once ('./header.php') ?>
<body>
    <?php
        for($nbr=0; $nbr<5; $nbr++){
            echo '<img src="https://www.prevision-meteo.ch/uploads/widget/paris_'. $nbr .'.png">';
        }
    ?>
</body>
</html>