<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dodawanie pacjenta</title>
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
                Views::generateDodawanie();
            ?>
        </div>

        <?php

            include '../pacjent/pacjent_repository.php';
            include '../database_connection.php';

            if(isset($_POST["pacj_submit"])) {
                $pesel = $_POST["pacj_pesel"];

                $conn = DatabaseConnection::createDefaultConnection();
                $repository = new PacjentRepository($conn);
                if($repository->findByPesel($pesel) === null) {

                    $pacjent = new Pacjent();
                    $pacjent->setImie($_POST["pacj_imie"]);
                    $pacjent->setNazwisko($_POST["pacj_nazwisko"]);
                    $pacjent->setPesel($_POST["pacj_pesel"]);
                    $pacjent->setPlec($_POST["pacj_plec"]);
                    $pacjent->setDataUrodzenia($_POST["pacj_data_urodzenia"]);
                    $repository->create($pacjent);

                    echo "Dodano pomyślnie pacjenta";

                } else {
                    echo "Pacjent o danym nr PESEL już istnieje.";
                }

                $conn->close();
            }
        ?>
    </div>

</body>
</html>