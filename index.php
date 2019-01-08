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

<div class="container-fluid">
<?php
include 'view.php';
include 'database_connection.php';
include 'uzytkownik/uzytkownik_repository.php';
include 'uzytkownik/uzytkownik_service.php';

/**
 * Polaczenie do bazy
 */
$connection = DatabaseConnection::createDefaultConnection();

/**
 * Utworz domyslnego uzytkownika jak ten nie istnieje
 */
$repository = new UzytkownikRepository($connection);
$service = new UzytkownikService($repository);
$service->createDefault();


/**
 * Pokaz formularz do logowania
 */

Views::generateLoginView();

/**
 * Sprawdz logowanie
 */
if(isset($_POST["btnSubmit"])) {

    if($service->isExist($_POST["login"], md5($_POST["password"]))) {

        echo 
        "<script language='JavaScript' type='text/javascript'>
        location.href='strony/pacj_app.php';
        </script>";

    } else {
        echo "</br>niepoprawne dane do logowania<br>";
    }
}
/**
 * Zamknij polaczenie do bazy
 */
$connection->close();
?>

</div>
</body>
</html>















