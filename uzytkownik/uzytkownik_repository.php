<?php


include 'uzytkownik.php';

class UzytkownikRepository
{
    private $database;

    function __construct($conn)
    {
        $this->database = $conn;
    }

    function create($user)
    {

        $sql = "INSERT INTO projekt.uzytkownicy (login, haslo)
            VALUES( '{$user->getLogin()}', '{$user->getHaslo()}' );";
        echo $sql;

        if ($this->database->query($sql) === false) {
            echo $this->database->error;
        }
    }

    function read($uzytkownikId) 
    {
        $toReturn = null;

        $sql = "select * from uzytkownicy where uzytkownicy.uzytkownik_id = " . $uzytkownikId;
        $result = $this->database->query($sql);

        while ($row = $result->fetch_assoc()) {
            $toReturn = $this->fetchAssocToUzytkownik($row);
        }

        return $toReturn; 
    }

    private function fetchAssocToUzytkownik($row) {
        $argId = $row["uzytkownik_id"];
        $argLogin = $row["login"];
        $argHaslo = $row["haslo"];
        return new Uzytkownik($argLogin, $argHaslo, $argId);
    }

    function update($user) 
    {
        return null;
    }

    function delete($uzytkownikId)
    {

    }

    function findByLoginAndHaslo($login, $hasloHash)
    {
        $sql = "select * from uzytkownicy where " 
            ." login = '{$login}' and "
            ." haslo = '{$hasloHash}'"; 

        $result = $this->database->query($sql);
        while($row = $result->fetch_assoc()) {
            return $this->fetchAssocToUzytkownik($row);
        }
    }
}