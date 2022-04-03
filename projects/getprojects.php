<?php

require_once '../connection.php';

$link = mysqli_connect($host, $user, $password, $database) or die('Ошибка ' . mysqli_error($link));

mysqli_set_charset($link, 'utf8mb4');

$query = "SELECT * FROM $category";
$result = mysqli_query($link, $query);

$rows = mysqli_num_rows($result);

for($i = 0; $i < $rows; $i++) {
    $row = mysqli_fetch_row($result);
    echo "<div class='col'><a class='project-elem' href='project.php?category=$category&id=$row[0]'><div class='project'><img src='$row[3]'><h2>$row[1]</h2></div></a></div>";
    // echo "<a class='projectElem' href='project.php?category=$category&id=$row[0]'><div class='project'><img src='$row[3]'><h1>$row[1]</h1></div></a>";
};

mysqli_close($link);

?>