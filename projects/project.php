<?php
    require_once '../connection.php';

    $link = mysqli_connect($host, $user, $password, $database) or die('Ошибка ' . mysqli_error($link));

    mysqli_set_charset($link, 'utf8mb4');

    $category = $_GET['category'];
    $id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

    if($id > 0){
        $query = "SELECT * FROM $category WHERE id = " . $id;
        $result = mysqli_query($link, $query);

        if($query === false){
            die('Ошибка ' . mysqli_error($link));
        }

        if(mysqli_num_rows($result) == 0){
            die('Нет проекта с таким id');
        }

        $row = mysqli_fetch_row($result);

        $title = $row[1];
        include './head.php';
        include '../popupform.php';
        include '../header.php';
    }
?>
<section class="article">
    <div class="row">
        <div class="col-sm article-thumbnail" style="background-color: #<?php echo $row[4]; ?>">
            <img src="<?php echo $row[3] ?>">
        </div>
        <div class="col-sm article-content">
            <div class="article-header"><?php echo $row[1] ?></div>
            <div class="article-description"><?php echo $row[2] ?></div>
        </div>
    </div>
</section>
<?php
    $scripts = null;
    include './footer.php';
?>