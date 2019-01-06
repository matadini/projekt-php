<?php

class Uzytkownik
{

    private $uzytkownikId;
    private $login;
    private $haslo;

    function __construct($login, $haslo, $uzytkownikId = null)
    {
        $this->login = $login;
        $this->haslo = $haslo;
        $this->uzytkownikId = $uzytkownikId;
    }

    function getLogin()
    {
        return $this->login;
    }

    function getHaslo()
    {
        return $this->haslo;
    }
    function przedstawSie()
    {
        return 'Login: ' . $this->login . ' Haslo: ' . $this->haslo;
    }
}

?>