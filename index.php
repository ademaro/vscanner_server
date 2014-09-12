<?php
$mysqli = new mysqli("localhost", "u787682332_scane", "260689", "u787682332_vscan");
if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    $bcod = htmlspecialchars($_POST['bcod']); 
    $res = $mysqli->query("SELECT name,veganstatus,vegetarianstatus,Testinanimals,GMO,CompanyProizvod,Publika FROM main WHERE barcode = $bcod");
    $row = $res->fetch_assoc();
	if ($row['name'] != null) {
    printf($row['name']);
    printf("§");
    printf($row['veganstatus']);
    printf("§");
    printf($row['vegetarianstatus']);
    printf("§");
    printf($row['Testinanimals']);
    printf("§");
    printf($row['GMO']);
    printf("§");
    printf($row['CompanyProizvod']);
  printf("§");
  printf($row['Publika']);
}
else
{
printf("731");
}
    mysql_close($mysqli);
    ?>