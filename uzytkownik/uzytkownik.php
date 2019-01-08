<?php

class Uzytkownik
{

    /**
     * @var int|null
     */
    private $uzytkownikId;
    private $login;
    private $haslo;

    function __construct(string $login, string $haslo, ?int $uzytkownikId = null)
    {
        $this->login = $login;
        $this->haslo = $haslo;
        $this->uzytkownikId = $uzytkownikId;
    }

    /**
     * Get the value of login
     */ 
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set the value of login
     *
     * @return  self
     */ 
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get the value of haslo
     */ 
    public function getHaslo()
    {
        return $this->haslo;
    }

    /**
     * Set the value of haslo
     *
     * @return  self
     */ 
    public function setHaslo($haslo)
    {
        $this->haslo = $haslo;

        return $this;
    }

    /**
     * Get the value of uzytkownikId
     *
     * @return  int|null
     */ 
    public function getUzytkownikId()
    {
        return $this->uzytkownikId;
    }

    /**
     * Set the value of uzytkownikId
     *
     * @param  int|null  $uzytkownikId
     *
     * @return  self
     */ 
    public function setUzytkownikId($uzytkownikId)
    {
        $this->uzytkownikId = $uzytkownikId;

        return $this;
    }
}

?>