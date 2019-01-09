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
            
            /**
             * Obsluga edycji i usuwania
             */
            
            if(isset($_POST["remove"])) {
                $repository->delete($_POST["pacjentId"]);
            }
            
            if(isset($_POST["edit"])) {
                echo "edytuj: " . $_POST["pacjentId"];
            }
            
            /**
             * Wyprodukuj widok dla pobrnaych rekordow
             */
            $all = $repository->findAll();
            if(!empty($all)) {
                $html = "<table class='table table-hover table-striped table-bordered'>";
                foreach($all as $pacjent) {
                    $html .= "<tr>"
                    . "<td> {$pacjent->getPacjentId()} </td>"
                    . "<td> {$pacjent->getImie()} </td>"
                    . "<td> {$pacjent->getNazwisko()} </td>"
                    . "<td> {$pacjent->getPesel()} </td>"
                    . "<td> {$pacjent->getPlec()} </td>"
                    . "<td> {$pacjent->getDataUrodzenia()} </td>"
                    . "<td> <form method=POST action=pacj_wszystkie.php><input class='btn btn-success' name='edit' type=submit value='Edytuj'/> <input name='pacjentId' type=hidden value={$pacjent->getPacjentId()}>  </form></td>"
                    . "<td> <form method=POST action=pacj_wszystkie.php><input class='btn btn-danger' name='remove' type=submit value='Usuń'/> <input name='pacjentId' type=hidden value={$pacjent->getPacjentId()}>  </form></td>"
                    . "</tr>";
                }
                
                $html .= "</table>";
                echo $html;
            } else {
                echo "Brak wprowadzonych pacjentów";
            }
        
            $conn->close();
            
        ?>
    </div>
</div>




</body>
</html>