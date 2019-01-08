<?php

class Pacjent {

    /**
     * @var int
     */
    private $pacjentId;

    /**
     * @var string
     */
    private $imie;
    
    /**
     * @var string
     */
    private $nazwisko;
    
    /**
     * @var string
     */
    private $pesel;
    
    /**
     * @var string
     */
    private $plec;

    /**
     * @var string
     */
    private $dataUrodzenia;

    /**
     * Get the value of pacjentId
     *
     * @return  int
     */ 
    public function getPacjentId() : int
    {
        return $this->pacjentId;
    }

    /**
     * Set the value of pacjentId
     *
     * @param  int  $pacjentId
     *
     * @return  self
     */ 
    public function setPacjentId(int $pacjentId)
    {
        $this->pacjentId = $pacjentId;

        return $this;
    }

    /**
     * Get the value of imie
     *
     * @return  string
     */ 
    public function getImie() : string
    {
        return $this->imie;
    }

    /**
     * Set the value of imie
     *
     * @param  string  $imie
     *
     * @return  self
     */ 
    public function setImie(string $imie)
    {
        $this->imie = $imie;

        return $this;
    }

    /**
     * Get the value of nazwisko
     *
     * @return  string
     */ 
    public function getNazwisko() : string
    {
        return $this->nazwisko;
    }

    /**
     * Set the value of nazwisko
     *
     * @param  string  $nazwisko
     *
     * @return  self
     */ 
    public function setNazwisko(string $nazwisko)
    {
        $this->nazwisko = $nazwisko;

        return $this;
    }

    /**
     * Get the value of pesel
     *
     * @return  string
     */ 
    public function getPesel() : string
    {
        return $this->pesel;
    }

    /**
     * Set the value of pesel
     *
     * @param  string  $pesel
     *
     * @return  self
     */ 
    public function setPesel(string $pesel)
    {
        $this->pesel = $pesel;

        return $this;
    }

    /**
     * Get the value of plec
     *
     * @return  string
     */ 
    public function getPlec() : string
    {
        return $this->plec;
    }

    /**
     * Set the value of plec
     *
     * @param  string  $plec
     *
     * @return  self
     */ 
    public function setPlec(string $plec)
    {
        $this->plec = $plec;

        return $this;
    }

    /**
     * Get the value of dataUrodzenia
     *
     * @return  string
     */ 
    public function getDataUrodzenia() : string
    {
        return $this->dataUrodzenia;
    }

    /**
     * Set the value of dataUrodzenia
     *
     * @param  string  $dataUrodzenia
     *
     * @return  self
     */ 
    public function setDataUrodzenia(string $dataUrodzenia)
    {
        $this->dataUrodzenia = $dataUrodzenia;

        return $this;
    }
}
