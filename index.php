<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
include 'database_connection.php';
include 'uzytkownik/uzytkownik_repository.php';

$connection = DatabaseConnection::createDefaultConnection();
$repository = new UzytkownikRepository($connection);

/**
 * Create
 */
// $user = new Uzytkownik("mateusz", md5("haslo"));
// $repository->create($user);

/**
 * Read
 */
$uzytkownikRead1 = $repository->read(1);
var_dump($uzytkownikRead1);

$uzytkownikRead2 = $repository->findByLoginAndHaslo("mateusz", md5("haslo"));
var_dump($uzytkownikRead2);

/**
 * Update 
 */

/** 
 * Delete 
 */
$connection->close();

if(filter_input(INPUT_POST, "pacj_submit")) {
    echo 'elo';
}

// if (isset($_POST['btnSubmit'])) {
//     echo header('Location: ', 'application.php'); 
//     die();
// } else {
//     generateLoginView();
// }
?>

<form method="POST" action="index.php">
    <table>
        <tr>
            <td>Imię: </td>
            <td><input name="pacj_imie"/></td>
        </tr>
        <tr>
            <td>Nazwisko: </td>
            <td><input name="pacj_nazwisko"/></td>
        </tr>
        <tr>
            <td>PESEL: </td>
            <td><input name="pacj_pesel"/></td>
        </tr>
        <tr>
            <td>Płeć: </td>
            <td>
                <select name='pacj_plec'>
                    <option value="mezczyzna"> Mężczyzna </option>
                    <option value="kobieta"> Kobieta </option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Data urodzenia: </td>
            <td><input name="pacj_data_urodzenia"/></td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="pacj_submit" value="Dodaj"/>
                <input type="reset" name="pacj_reset" value="Reset"/>
            </td>
        </tr>

    </table>
</form>
</body>
</html>















