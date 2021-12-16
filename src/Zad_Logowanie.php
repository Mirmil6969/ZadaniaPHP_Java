<form action="" method="POST">

Login &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="log"> <br>
Hasło &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="password" name="pass"><br>
Imie &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="imie"> <br>
Nazwisko <input type="text" name="nazwisko"><br>
Miasto &nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="miasto"> <br>
<input type="submit" name="wyswietl" value="zaloguj">
</form>
<?php
if(isset($_POST["wyswietl"])){
    $log = $_POST["log"];
    $pass = $_POST["pass"];
    $miasto = $_POST["miasto"];
    $nazwisko = $_POST["nazwisko"];
    $imie = $_POST["imie"];
    if($log == "Michał" && $pass == "Klawikowski")
    {
        echo("Zalogowano: <br>");
        echo("Imie: " .$imie ."<br> Nazwisko: " .$nazwisko ."<br> Miasto: ". $miasto );
    }
    else {
        echo("Błędny login lub hasło");
    }
}
?>