<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="http://localhost/projekt-php/bootstrap/css/bootstrap.min.css">
</head>
<body>

<?php
include '../view.php';
Views::generateNav();
?>


<div class="container">
  <div class="center-block" >
        <form method="POST" action="pacj_dodawanie.php">
            <table class="table table-hover table-striped table-bordered">
                <tr>
                    <td>Imię: </td>
                    <td><input required name="pacj_imie" pattern="[a-zA-Z]+" class="form-control"></td>
                </tr>
                <tr>
                    <td>Nazwisko: </td>
                    <td><input required name="pacj_nazwisko" pattern="[a-zA-Z]+" class="form-control"></td>
                </tr>
                <tr>
                    <td>PESEL: </td>
                    <td><input required name="pacj_pesel" pattern="[0-9]{11}" class="form-control"></td>
                </tr>
                <tr>
                    <td>Płeć: </td>
                    <td>
                        <select required name='pacj_plec' class="form-control">
                            <option value="mezczyzna"> Mężczyzna </option>
                            <option value="kobieta"> Kobieta </option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Data urodzenia: </td>
                    <td><input required name="pacj_data_urodzenia" type="date" class="form-control"></td>
                </tr>
                <tr>
                    <td>
                    </td>
                    <td>
                        <input type="submit" name="pacj_submit" value="Dodaj" class="btn btn-success">
                        <input type="reset" name="pacj_reset" value="Reset" class="btn btn-danger">
                    </td>
                </tr>

            </table>
        </form> 
  </div>

    <?php

        if(isset($_POST["pacj_submit"])) {
            echo "elo";
        }
    ?>
</div>





</body>
</html>