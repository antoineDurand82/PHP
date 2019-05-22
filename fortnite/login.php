
<?php include_once ('./bdd.php') ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
        

        if(isset($_POST['connection']))
        {
            if(empty($_POST['login']))
            {
                echo "Login is empty";
            } else {
                if(empty($_POST['password'])) 
                {
                    echo "Password is empty";
                } else {
                    $login = $_POST['login'];
                    $password = $_POST['password'];

                    $query = $pdo->prepare("SELECT login, password FROM user");
                    $query->execute();
                    $logsword = $query->fetchAll();
                    foreach ($logsword as $swordlog)
                    {
                        if($swordlog['login'] != $login)
                        {
                            echo "Wrong login, try again";
                        } elseif($swordlog['password'] != $password)
                        {
                            echo "Wrong password, try again";
                        } else 
                        {
                            header('Location: ./admin.php');
                        }
                            
                    } 
                }
            }
        }

    ?>

    <title>Login</title>
</head>

<body>

    <form method="POST">
        <label>
            Login
            <input type="text" name="login"/>
        </label>
        <label>
            Password
            <input type="password" name="password"/>
        </label>
        <input type="submit" value="connection" name="connection"/>
    </form>

</body>
</html>
