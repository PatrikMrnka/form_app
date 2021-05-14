<?php 

    if (isset($_POST["submit"])) { // metoda _POST si vytáhla informace z name "submit", isset = je submit nastavené?
        
        $minimum = 3; //minimální počet znaků
        $maximum = 10; //maximální počet znaků
        
        $username = $_POST["username"]; //zachycení Uživatelského jména
        $password = $_POST["password"]; //zachycení Hesla
        echo "Ahoj " . $username; // vypsání Uživatelského jména
        echo "<br>";
        echo "Tvé heslo je: " . $password; // vypsání Hesla
        echo "<br>";

        if (strlen($username) <= $minimum) { //podmínka pro délku jména
            echo "Uživatelské jméno musí být delší než 3 znaky";
        } 
        else if (strlen($username) >= $maximum) {
            echo "Uživatelské jméno musí být kratší než 10 znaků";
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulář v PHP</title>
</head>
<body>
    <form action="form.php" method="post">
        <input type="text" name="username" placeholder="Uživatelské jméno">
        <br>
        <input type="password" name="password" placeholder="Heslo">
        <br>
        <input type="submit" name="submit" value="Odeslat">
    </form>
</body>
</html>