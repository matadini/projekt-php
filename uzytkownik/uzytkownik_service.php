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

        $user = $this->uzytkownikRepository->findByLoginAndHaslo($login, $hashPassword);
        if($user === NULL) {
            $newUser = new Uzytkownik($login, $hashPassword);
            $this->uzytkownikRepository->create($newUser);
        }

    }


}