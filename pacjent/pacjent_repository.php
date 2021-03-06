<?php



include 'pacjent.php';


class PacjentRepository {


    private $database;

    function __construct(mysqli $conn)
    {
        $this->database = $conn;
    }

    function create(Pacjent $user) : void 
    {
        $sql = " INSERT INTO projekt.pacjenci (imie, nazwisko, pesel, plec, data_urodzenia) 
            VALUES('{$user->getImie()}', '{$user->getNazwisko()}', '{$user->getPesel()}', '{$user->getPlec()}', '{$user->getDataUrodzenia()}')";
        if ($this->database->query($sql) === false) {
            echo $this->database->error;
        }
    }

    function findAll() {

        $tablica = array();

        $sql = "SELECT pacjent_id, imie, nazwisko, pesel, plec, data_urodzenia FROM projekt.pacjenci";
        $result = $this->database->query($sql);
        
        if ($result->num_rows > 0) {
            
            while ($row = $result->fetch_assoc()) {
                $pacjent = $this->fetchAssocToPacjent($row);
                $tablica[$pacjent->getPacjentId()] = $pacjent;
            }
            return $tablica;

        } else {
            return null;
        }
    }

    function findByPesel(string $pesel) : ?Pacjent {

        $sql = "SELECT pacjent_id, imie, nazwisko, pesel, plec, data_urodzenia FROM projekt.pacjenci where pesel = {$pesel}";
        $result = $this->database->query($sql);
        
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                return $this->fetchAssocToPacjent($row);
            }
        } else {
            return null;
        }
    }

    function read(int $pacjentId) : Pacjent
    {

        $sql = "SELECT pacjent_id, imie, nazwisko, pesel, plec, data_urodzenia FROM projekt.pacjenci where pacjent_id = {$pacjentId}";
        $result = $this->database->query($sql);
        while ($row = $result->fetch_assoc()) {
            return $this->fetchAssocToPacjent($row);
        }

    }

    private function fetchAssocToPacjent($row) : Pacjent {

        $pacjent = new Pacjent();
        $pacjent->setPacjentId($row["pacjent_id"]);
        $pacjent->setImie($row["imie"]);
        $pacjent->setNazwisko($row["nazwisko"]);
        $pacjent->setPesel($row["pesel"]);
        $pacjent->setPlec($row["plec"]);
        $pacjent->setDataUrodzenia($row["data_urodzenia"]);
        return $pacjent;

    }

    function update(Pacjent $pacjent) : void 
    {
       
        $sql = "UPDATE projekt.pacjenci SET 
            imie='{$pacjent->getImie()}', 
            nazwisko='{$pacjent->getNazwisko()}', 
            pesel='{$pacjent->getPesel()}',
            plec='{$pacjent->getPlec()}',
            data_urodzenia='{$pacjent->getDataUrodzenia()}'
            WHERE pacjent_id={$pacjent->getPacjentId()}";
        if ($this->database->query($sql) === false) {
            echo $this->database->error;
        }
    }

    function delete($pacjentId) : void
    {
        $sql = "DELETE FROM projekt.pacjenci where pacjent_id = {$pacjentId}";
        $stmt = $this->database->prepare($sql);
        $stmt->execute();

    }

}