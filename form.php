<?php 

    if (isset($_POST["submit"])) { // metoda _POST si vytáhla informace z name "submit", isset = je submit nastavené?
        $username = $_POST["username"]; //zachycení Uživatelského jména
        $password = $_POST["password"]; //zachycení Hesla
    echo $username;
    echo "<br>";
    echo $password;
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