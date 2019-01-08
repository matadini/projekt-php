<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/projekt-php/bootstrap/css/bootstrap.min.css">
</head>
<body>

<?php
include 'view.php';
include 'database_connection.php';
include 'uzytkownik/uzytkownik_repository.php';
include 'uzytkownik/uzytkownik_service.php';

/**
 * Utworz domyslnego uzytkownika jak ten nie istnieje
 */
$connection = DatabaseConnection::createDefaultConnection();
$repository = new UzytkownikRepository($connection);
$service = new UzytkownikService($repository);
$service->createDefault();
$connection->close();

/**
 * Pokaz formularz do logowania
 */
generateLoginView();

/**
 * Create
 */
// $user = new Uzytkownik("mateusz", md5("haslo"));
// $repository->create($user);

/**
 * Read
 */
// $uzytkownikRead1 = $repository->read(1);
// var_dump($uzytkownikRead1);

// $uzytkownikRead2 = $repository->findByLoginAndHaslo("mateusz", md5("haslo"));
// var_dump($uzytkownikRead2);

/**
 * Update 
 */

/** 
 * Delete 
 */
// $connection->close();

// if(filter_input(INPUT_POST, "pacj_submit")) {
//     echo 'elo';
// }

// if (isset($_POST['btnSubmit'])) {
//     echo header('Location: ', 'application.php'); 
//     die();
// } else {
//     generateLoginView();
// }
?>

<form method="POST" action="index.php">
    <table class="table table-hover table-striped table-bordered">
        <tr>
            <td>Imię: </td>
            <td><input name="pacj_imie" class="form-control"></td>
        </tr>
        <tr>
            <td>Nazwisko: </td>
            <td><input name="pacj_nazwisko" class="form-control"></td>
        </tr>
        <tr>
            <td>PESEL: </td>
            <td><input name="pacj_pesel" class="form-control"></td>
        </tr>
        <tr>
            <td>Płeć: </td>
            <td>
                <select name='pacj_plec' class="form-control">
                    <option value="mezczyzna"> Mężczyzna </option>
                    <option value="kobieta"> Kobieta </option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Data urodzenia: </td>
            <td><input name="pacj_data_urodzenia" class="form-control"></td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="pacj_submit" value="Dodaj" class="btn btn-success">
                <input type="reset" name="pacj_reset" value="Reset" class="btn btn-danger">
            </td>
        </tr>

    </table>
</form>
</body>
</html>















