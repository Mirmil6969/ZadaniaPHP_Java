<form action="" method="POST">

Login  <input type="text" name="log"> <br>
Hasło  <input type="password" name="pass"><br>
<input type="submit" name="wyswietl" value="zaloguj">
</form>
<?php
$login = array("Azimu", "Quujp", "Umado", "Lomon", "Michał");
$haslo = array("zS6R", "bG4b", "5Woo", "YypB", "Klawikowski");

if(isset($_POST["wyswietl"])){
    $log = $_POST["log"];
    $pass = $_POST["pass"];
    $login_succes = "<a><img src=\"yep.png\"></a>";
    $login_fail = "<a><img width=\"400\" src=\"Yep2.jpg\"></a>";

    if($log == $login[0] && $pass == $haslo[0])
    {
        echo $login_succes;
        echo("<br>Zalogowano");
    }else if($log == $login[1] && $pass == $haslo[1])
    {
        echo $login_succes;
        echo("<br>Zalogowano");
    }else if($log == $login[2] && $pass == $haslo[2])
    {
        echo $login_succes;
        echo("<br>Zalogowano");
    }else if($log == $login[3] && $pass == $haslo[3])
    {
        echo $login_succes;
        echo("<br>Zalogowano");
    }else if($log == $login[4] && $pass == $haslo[4])
    {
        echo $login_succes;
        echo("<br>Zalogowano");  
    } else {
        echo $login_fail;
        echo("<br>Błędny login lub hasło");
    }

}
?>