<?php


function generateLoginView() {
    $html = 
    "<form method='POST' action='index.php'>
        <table>
            <tr>
                <td>Login: </td>
                <td><input name='login'/></td>
            </tr>
            <tr>
                <td>Hasło: </td>
                <td><input name='password' type='password'></td>
            </tr>
            <tr>
                <td><input type='submit' name='btnSubmit' value='Zaloguj'/></td>
                <td><input type='reset' name='btnReset' value='Anuluj'></td>
            </tr>
        </table>
    </form>";
    echo $html;
    
}


function generateApplicationView() {

}

?>