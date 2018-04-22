
<?php
$age = array("Peter"=>"a", "Ben"=>"50", "Joe"=>"c");
asort($age);

foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
?>
