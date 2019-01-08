<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wszyscy pacjenci</title>
    <link rel="stylesheet" type="text/css" href="http://localhost/projekt-php/bootstrap/css/bootstrap.min.css">
</head>
<body>

<?php
include '../view.php';
Views::generateNav();
?>

<div class="container">
    <div class="center-block" >
        <?php

            include '../pacjent/pacjent_repository.php';
            include '../database_connection.php';

            /**
             * Pobierz wszystkich pacjentow
             */
            $conn = DatabaseConnection::createDefaultConnection();
            $repository = new PacjentRepository($conn);
            $all = $repository->findAll();
            $conn->close();

            /**
             * Wyprodukuj widok dla pobrnaych rekordow
             */
            $html = "<table class='table table-hover table-striped table-bordered'>";
   
            foreach($all as $pacjent) {
                $html .= "<tr>"
                . "<td> {$pacjent->getPacjentId()} </td>"
                . "<td> {$pacjent->getImie()} </td>"
                . "<td> {$pacjent->getNazwisko()} </td>"
                . "<td> {$pacjent->getPesel()} </td>"
                . "<td> {$pacjent->getPlec()} </td>"
                . "<td> {$pacjent->getDataUrodzenia()} </td>"
                . "<td> <a href='www.google.pl'>Edycja</a> </td>"
                . "<td> <a href='www.google.pl'>Usuń</a> </td>"
                . "</tr>";
            }

            $html .= "</table>";


            echo $html;
            
        ?>
    </div>
</div>




</body>
</html>