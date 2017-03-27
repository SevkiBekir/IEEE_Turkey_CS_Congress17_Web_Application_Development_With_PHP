<?php
/**
 * Created by PhpStorm.
 * User: sbk
 * Date: 25/03/2017
 * Time: 13:54
 */

echo "<select>";

for ($i=2017;$i>=1940;$i--)
    echo "<option>$i</option>";

echo    "</select>";


$deneme = uniqid("", true);
echo $deneme;

?>



