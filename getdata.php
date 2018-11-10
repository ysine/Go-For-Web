<?php
include "connect/connect.php";

$resultArray = array();

$search = $_GET['q'];
$type = $_GET['type'];

mysqli_select_db($con, 'GoForWeb');
$sql = "SELECT * FROM vraagantwoord WHERE vraag LIKE '%$search%' ORDER BY id ASC";
if ($type == 'list') {
    $result = mysqli_query($con, $sql);

    while ($row = mysqli_fetch_array($result)) {
       $resultArray[] = '<h4>' . $row['vraag'] . '</h4>';
    }
    echo json_encode($resultArray);
}

if ($type == 'answer') {
    $result = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_array($result)) {
        echo '<h2>' . $row['vraag'] . '</h2>';
        echo '<p>' . $row['antwoord'] . '</p>';
    }
}
mysqli_close($con);