<?php
echo "<h2>Login</h2>
    <form method=post action=cek_login.php>
        <table>
        <tr>
            <td>Username</td>
            <td> : <input name='id_user' type='text'></td>
        </tr>
        <tr>
            <td>Password</td>
            <td> : <input name='paswd' type='text'></td>
        </tr>
        <tr>
            // panggil fungsi captcha yaitu captcha.php untuk melakukan proses captcha
            <td>Captcha<br>
            <img src='captcha.php' /></td><td> : <input name='captcha_code' type='text'></td>
        </tr>
        <tr>
            <td colspan=2><input type='submit' value='LOGIN'></td>
        </tr>
        </table>
    </form>";
?>
<!-- buat tabel form untuk login -->
<!-- "<h2>Login</h2>
<form method=post action=cek_login.php>
    <table>
        <tr>
            <td>Username</td>
            <td> : <input name='id_user' type='text'></td>
        </tr>
        <tr>
            <td>Password</td>
            <td> : <input name='paswd' type='password'></td>
        </tr>
        <tr>
            <td colspan=2>
                <input type='submit' value='LOGIN'>
            </td>
        </tr>
    </table>
</form>"; -->