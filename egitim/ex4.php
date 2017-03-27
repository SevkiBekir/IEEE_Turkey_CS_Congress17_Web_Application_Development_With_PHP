<?php
/**
 * Created by PhpStorm.
 * User: sbk
 * Date: 25/03/2017
 * Time: 14:34
 */

$myArray = array("A","B","C");

foreach ($myArray as $value){
    echo $value."<br/>";
}

$litteMatrix1=array(5,6,7);
$litteMatrix2=array(5,4,3);
//print_r($litteMatrix1);
$result=array();
for ($i=0;$i<count($litteMatrix1);$i++){
    $result[$i]=$litteMatrix1[$i]+$litteMatrix2[$i];
    echo $i.". index =>".$result[$i]."<br/>";
}
print_r($result);
echo "<br/>";

$matrix1=array();
$matrix1[0]=array(1,2);
$matrix1[1]=array(3,4);

$matrix2=array();
$matrix2[0]=array(3,4);
$matrix2[1]=array(5,6);

$result2 =array();
$result2[0] = array(0,0);

for ($i=0;$i<count($matrix1);$i++){
    for($j=0;$j<count($matrix1[0]);$j++){
        $result2[$i][$j]=$matrix1[$i][$j]+$matrix2[$i][$j];
    }
}

print_r($result2);

?>

