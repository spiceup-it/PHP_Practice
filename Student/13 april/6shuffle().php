<?php
$age = range(1, 5);
shuffle($age);
foreach ($age as $ag) {
    echo "$ag ";
}
?>