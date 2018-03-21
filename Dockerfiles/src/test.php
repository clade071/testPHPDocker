<?php

 $link = mysql_connect('db', 'user', 'password');
 $mysqli = new mysqli('db', 'root', 'password', 'test_database');

 if ($result = $mysqli->query("SELECT * FROM Persons LIMIT 10")) {
    printf("Select a retourné %d lignes.\n", $result->num_rows);

    /* Libération du jeu de résultats */
    $result->close();
}

 # look that we extensions are installed
phpinfo();
?>