<?php
$mysqli = new mysqli("HOST", "LOG", "PAASS", "TABL");
if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    $bcod = htmlspecialchars($_POST['bcod']); 
    $name = htmlspecialchars($_POST['name']);
    $companyname = htmlspecialchars($_POST['companyname']);
    $veganstatus = htmlspecialchars($_POST['veganstatus']);
    $vegetstatus = htmlspecialchars($_POST['vegetstatus']);
    $gmo = htmlspecialchars($_POST['gmo']);
    $animals = htmlspecialchars($_POST['animals']);
    $comment = htmlspecialchars($_POST['comment']);
    $res = $mysqli->query("INSERT INTO main (barcode, name, companyproizvod, veganstatus, vegetarianstatus, GMO, Testinanimals,Publika) values('$bcod', '$name', '$companyname', '$veganstatus', '$vegetstatus', '$gmo', '$animals', '$comment');");
printf("0");
    $row = $res->fetch_assoc();
    mysql_close(mysqli);
    ?>