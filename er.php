<?php
$mysqli = new mysqli("localhost", "u787682332_scane", "260689", "u787682332_vscan");
if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    $bcod = htmlspecialchars($_POST['bcod']);
    $comment = htmlspecialchars($_POST['comment']);
    $res = $mysqli->query("UPDATE `main` SET `comment` = '$comment' WHERE `barcode` = '$bcod';");
printf("0");
    $row = $res->fetch_assoc();
    mysql_close(mysqli);
    ?>