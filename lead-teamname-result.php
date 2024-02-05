<?php

$datapicker_value = "";

if (isset($_GET['team_name'])) {
    $datapicker_value = $_GET['team_name'];
}

if (!empty($datapicker_value)) {
// select filter process using value from $GET[''] goes here
    echo "retrieved " . $datapicker_value . " and returned with thanks. <br>";
} else {
    echo "no info found";
}
?>
