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
    echo Views::generateNav();
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

            /**
             * Zapisz po edycji
             */
            if(isset($_POST["pacj_edit_save"])) {

                $pacjent = new Pacjent();
                $pacjent->setPacjentId($_POST["pacjentId"]);
                $pacjent->setImie($_POST["pacj_imie"]);
                $pacjent->setNazwisko($_POST["pacj_nazwisko"]);
                $pacjent->setPesel($_POST["pacj_pesel"]);
                $pacjent->setPlec($_POST["pacj_plec"]);
                $pacjent->setDataUrodzenia($_POST["pacj_data_urodzenia"]);
                $repository->update($pacjent);
            }

            if(isset($_POST["edit"])) {

                $pacjentId = $_POST["pacjentId"];
                $pacjent = $repository->read($pacjentId);
                if($pacjent !== null) {
                    echo Views::generateViewEdycja($pacjent);
                } 

            } else {
            
                /**
                 * Wyprodukuj widok dla pobrnaych rekordow
                 */
                $all = $repository->findAll();
                if(!empty($all)) {
                    $html = "<table class='table table-hover table-striped table-bordered'>";
                    foreach($all as $pacjent) {
                        $html .= Views::generatePacjentTableRow($pacjent);
                    }
                    
                    $html .= "</table>";
                    echo $html;
                } else {
                    echo "Brak wprowadzonych pacjentów";
                }
            }

        
            $conn->close();
            
        ?>
    </div>
</div>




</body>
</html>