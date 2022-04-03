<?php
/*require_once 'connection.php';

if (isset($_POST['name']) && isset($_POST['review'])){
    //$link = mysqli_connect($host, $user, $password, $database) or die('Ошибка ' . mysqli_error($link));

    $name = htmlentities(mysqli_real_escape_string($link, $_POST['name']));
    $review = htmlentities(mysqli_real_escape_string($link, $_POST['review']));

    if(mail('*********v3@gmail.com', 'Отзыв', $name . '\r\n' . $review))
    {
        echo 'True';
    }
    else 
    {
        echo 'False';
    }

    //$query = "INSERT INTO reviews VALUES(NULL, '$name','$review')";

    //$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

    //mysqli_close($link);
}*/

$name = $_POST['name'];
$review = $_POST['review'];

mail('vl********@gmail.com', 'Отзыв', $name . '\r\n' . $review, 'From: agifagifov@gmail.com');

?>