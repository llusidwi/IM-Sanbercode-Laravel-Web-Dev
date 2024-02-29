<?php 

echo "<h4>Menampilkan Animal</h4> ";
require_once("animal.php");
require_once("ape.php");
require_once("frog.php");

$sheep = new Animal("shaun");
echo "Sheep <br>";
echo "Name :" . $sheep->name ."<br>";
echo "legs :" .$sheep->legs ."<br>";
echo "Cold_blooded :" .$sheep->cold_blooded ."<br><br>";

$kodok = new Frog("buduk");
echo "Kodok <br>";
echo "Name :" . $kodok->name ."<br>";
echo "legs :" .$kodok->legs ."<br>";
echo "Cold_blooded :" .$kodok ->cold_blooded ."<br>";
echo "Yell :" .$kodok ->jump ."<br><br>";

$sungokong = new Ape("kera sakti");
echo "Ape <br>";
echo "Name :" . $sungokong->name ."<br>";
echo "legs :" .$sungokong->legs ."<br>";
echo "Cold_blooded :" .$sungokong->cold_blooded ."<br>";
echo "Yell :" .$sungokong->yell."<br><br>";


?>