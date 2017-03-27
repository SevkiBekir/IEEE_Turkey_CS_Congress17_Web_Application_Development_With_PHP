<?php
/**
 * Created by PhpStorm.
 * User: sbk
 * Date: 25/03/2017
 * Time: 15:21
 */
include_once("Deneme.php");
include_once("Car.php");
include_once("User.php");
include_once("Admin.php");

function sum($num1,$num2){
    return $num1+$num2;
}
function minus($num1,$num2){
    return $num1-$num2;
}
function times($num1,$num2){
    return $num1*$num2;
}
function division($num1,$num2){
    return $num1/$num2;
}

echo "Toplam:".sum(2,2)."<br/>";
echo "Çıkartma:".minus(4,2)."<br/>";
echo "Çarpım:".times(4,2)."<br/>";
echo "Bölme:".division(4,2)."<br/>";

function factorial($n){
    $result=1;
    for ($i=1;$i<=$n;$i+=1){
        $result*=$i;
    }
    return $result;
}

for ($i=1;$i<10;$i++){
    echo $i."! = ".factorial($i)."<br/>";
}



$d = new Deneme();
$d->fDeneme();
$d->fDeneme("Deneme");
echo "<br/>";
$dogan = new Car();
$dogan->setIsFuel(true);
$dogan->setSpeed(200);
$dogan->printValue();
echo "<br/>";
echo $dogan->getSpeed();

echo "<br/>";

$admin = new Admin();
$admin->logIn();
$admin->printLogInformation();
$admin->printPost();


?>