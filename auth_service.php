<?php



class AuthService {

    function isUserCorrect($login, $password) : bool {

        /**
         * Polaczenie do bazy
         */
        $database = DatabaseConnection.createDefaultConnection(); 
        
        /**
         * sprawdz czy istnieje uzytkownik domyslny, jak nie to go utworz
         */
        $uzytkownikRepository = new UzytkownikRepository($database);
        $adminUsr = $uzytkownikRepository->findByLoginAndHaslo("admin", md5("admin"));
        if($adminUsr === NULL) {
            $newUser = new Uzytkownik("admin", md5("admin"));
            $uzytkownikRepository->create($newUser);
        }

        /**
         * Sprawdz czy istnieje uzytkownik ktory chcial sie autoryzowac
         */
        $database->close();

        /**
         * Zwroc informacje czy autoryzacja przebiegla pomyslnie
         */

    }

}