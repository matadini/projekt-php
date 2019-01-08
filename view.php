<?php

class Views {
    static function generateLoginView() {
        $html = 
        "<form method='POST' action='index.php'>
            <table>
                <tr>
                    <td>Login: </td>
                    <td><input name='login' class='form-control'></td>
                </tr>
                <tr>
                    <td>Hasło: </td>
                    <td><input name='password' type='password' class='form-control'></td>
                </tr>
                <tr>
                    <td><input type='submit' name='btnSubmit' class='btn btn-success' value='Zaloguj'/></td>
                    <td><input type='reset' name='btnReset' class='btn btn-danger' value='Anuluj'></td>
                </tr>
            </table>
        </form>";
        echo $html;
        
    }

    static function generateDodawanie() {
       $html = 
       "<form method='POST' action='pacj_dodawanie.php'>
            <table class='table table-hover table-striped table-bordered'>
                <tr>
                    <td>Imię: </td>
                    <td><input required name='pacj_imie' pattern='[a-zA-Z]+' class='form-control'></td>
                </tr>
                <tr>
                    <td>Nazwisko: </td>
                    <td><input required name='pacj_nazwisko' pattern='[a-zA-Z]+' class='form-control'></td>
                </tr>
                <tr>
                    <td>PESEL: </td>
                    <td><input required name='pacj_pesel' pattern='[0-9]{11}' class='form-control'></td>
                </tr>
                <tr>
                    <td>Płeć: </td>
                    <td>
                        <select required name='pacj_plec' class='form-control'>
                            <option value='m'> Mężczyzna </option>
                            <option value='k'> Kobieta </option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Data urodzenia: </td>
                    <td><input required name='pacj_data_urodzenia' type='date' class='form-control'></td>
                </tr>
                <tr>
                    <td>
                    </td>
                    <td>
                        <input type='submit' name='pacj_submit' value='Dodaj' class='btn btn-success'>
                        <input type='reset' name='pacj_reset' value='Reset' class='btn btn-danger'>
                    </td>
                </tr>

            </table>
        </form> ";
        echo $html;
    }

    static function generateNav() {
        $html = 
        "<nav class='navbar navbar-expand-lg navbar-light bg-light'>
            <a class='navbar-brand' href='#'>Pacjenci PHP projekt </a>
            <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
            <span class='navbar-toggler-icon'></span>
            </button>

            <div class='collapse navbar-collapse' id='navbarSupportedContent'>
            <ul class='navbar-nav mr-auto'>
                <li class='nav-item active'>
                <a class='nav-link' href='pacj_dodawanie.php'>Dodaj <span class='sr-only'>(current)</span></a>
                </li>
                <li class='nav-item active'>
                <a class='nav-link' href='pacj_wszystkie.php'>Wszyscy <span class='sr-only'>(current)</span></a>
                </li>
                <li class='nav-item active'>
                <a class='nav-link' href='pacj_edycja.php'>Edytuj <span class='sr-only'>(current)</span></a>
                </li>
                <li class='nav-item active'>
                <a class='nav-link' href='pacj_usuwanie.php'>Usuń <span class='sr-only'>(current)</span></a>
                </li>
            </div>
            </nav>";
        echo $html;

    }
}




?>