<?php 

    if (isset($_POST["submit"])) { // metoda _POST si vytáhla informace z name "submit"
        echo "Formulář úspěšný";
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
        <input type="text" placeholder="Uživatelské jméno">
        <br>
        <input type="password" placeholder="Heslo">
        <br>
        <input type="submit" name="submit" value="Odeslat">
    </form>
</body>
</html>