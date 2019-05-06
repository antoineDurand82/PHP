<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
        $date = date("D d/m/Y");
        $heure = date("Hi");
        $hours = date("H");
        $minute = date("i");
    ?>

    <?php if ($heure >= '0700' AND $heure <= '1900') { ?>
        <style>
            body {
                background-color: #FFFFFF;
                color: #000000;
            }
        </style>
    <?php } else { ?>
            <style>
                body {
                    background-color: #2E67A2;
                    color: #FFFFFF;
                }
            </style>
    <?php } ?>

    <title>La météo</title>
</head>