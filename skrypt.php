<?php

include 'uzytkownik/uzytkownik.php';

function demo()
{
    $database = new mysqli("localhost", "root", "", "projekt");
    if ($database->connect_errno) {
        echo $database->connect_error;
    } else {

        $result = $database->query("select * from uzytkownicy");

        while ($row = $result->fetch_assoc()) {
            echo $row['login'] . ' ' . $row['haslo'] . "\n";
        }
    }
    $database->close();

    // $user = new Uzytkownik('login', 'haslo');
    // echo $user->przedstawSie();
}
?>