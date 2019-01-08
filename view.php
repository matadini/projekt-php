<?php


function generateLoginView() {
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
                <td><input type='reset' name='btnReset' class='btn btn-success' value='Anuluj'></td>
            </tr>
        </table>
    </form>";
    echo $html;
    
}


function generateApplicationView() {

}

?>