r<?php 
require_once('inc/config.php'); 
$query = "SELECT * FROM events";
$result = mysqli_query($db, $query);

$events = array();

while ($row = mysqli_fetch_assoc($result)) {
    $events[] = array(
        'id' => $row['id'],
        'title' => $row['title'],
        'start' => $row['start_date'],
        'end' => $row['end_date']
    );
}

echo json_encode($events);

mysqli_close($db);
?>
