<?php
/**
 * Created by PhpStorm.
 * User: sbk
 * Date: 25/03/2017
 * Time: 13:30
 */

$temp = 50;

if ($temp<0){
    echo "<h1>Hava soğuk!</h1>";
}else if ($temp >=0 and $temp <25){
    echo "<h1>Hava tam gezmelik!</h1>";
}else if ($temp >=25 && $temp <35){
    echo "<h1>Hava güzel fakat biraz sıcak!</h1>";
}else {
    echo "Dışarı çıkma. Yanarsın!";
}
?>