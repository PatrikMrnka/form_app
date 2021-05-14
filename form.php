<?php 
#metoda _GET pošle data pomocí URL adresy, používat _POST!!!
    if (isset($_POST["submit"])) { // metoda _POST si vytáhla informace z name "submit", isset = je submit nastavené?
        
        $name = ["David", "Patrik", "Marek", "Jana"]; //pole "zaměstnanců"
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
        } else if (strlen($username) >= $maximum) {
            echo "Uživatelské jméno musí být kratší než 10 znaků";
        }

        if (in_array($username, $name)) { //jestliže je vstup $username v poli $name, umožnit přístup
            echo "Jsi úspěšně přihlášený";
        } else {
            echo "Neoprávněný uživatel";
        }
    }
?>