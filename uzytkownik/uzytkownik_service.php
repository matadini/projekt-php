<?php



class UzytkownikService {

    /**
     * @var UzytkownikRepository
     */
    private $uzytkownikRepository;

    function __construct(UzytkownikRepository $repo)
    {
        $this->uzytkownikRepository = $repo;
    }

    function createDefault() : void {

        $login = "admin";
        $hashPassword = md5("admin");

        if(!$this->isExist($login, $hashPassword)) {
            $newUser = new Uzytkownik($login, $hashPassword);
            $this->uzytkownikRepository->create($newUser);
        }
    }

    function isExist(string $login, string $hashPassword) {
        $user = $this->uzytkownikRepository->findByLoginAndHaslo($login, $hashPassword);
        return ($user !== NULL) ; 
    }


}