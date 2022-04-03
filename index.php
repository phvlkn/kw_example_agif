<?php
    $title = 'Главная';
    include 'head.php';
    include 'popupform.php';
    include 'header.php';

    require_once 'connection.php';
?>
<section class="home">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md">
                <div class="carousel carousel-dark slide float-end" id="projects-carousel" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <?php
                            $link1 = mysqli_connect($host, $user, $password, $database) or die(mysqli_error($link));

                            mysqli_set_charset($link1, 'utf8mb4');

                            $query = "SELECT * FROM show_on_homepage";
                            $result = mysqli_query($link1, $query);

                            $rows = mysqli_num_rows($result);

                            for($i = 0; $i < $rows; $i++) {
                                $row=mysqli_fetch_row($result);
                                if($i == 0) {
                                    echo "<div class='carousel-item active' style='background-image: url(" . '"' . $row[3] . '"' . ")'><div class='carousel-caption'><h5>$row[1]</h5><p>$row[2]</p><a class='btn btn-primary' href='projects/project.php?category=$row[5]&id=$row[6]'>Подробнее</a></div></div>";
                                } else {
                                    echo "<div class='carousel-item' style='background-image: url(" . '"' . $row[3] . '"' . ")'><div class='carousel-caption'><h5>$row[1]</h5><p>$row[2]</p><a class='btn btn-primary' href='projects/project.php?category=$row[5]&id=$row[6]'>Подробнее</a></div></div>";
                                }
                            }

                            mysqli_close($link1);
                        ?>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#projects-carousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Назад</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#projects-carousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Вперёд</span>
                    </button>
                </div>
            </div>
            <div class="col-md">
                <div class="text"></div>
            </div>
        </div>
    </div>
</section>
<section class="about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md">
                <img src="img/logo-white.svg" alt="Логотип AGIF" class="float-end">
            </div>
            <div class="col-md">
                <p>
                    AGIF - это платформа созданая для того, чтобы дать возможность предпринимателям взаимодействовать с
                    молодёжными
                    разработками и проектами в рамках технопарка. Тем самым крупные компании или инвесторы могут найти
                    кадры и
                    проекты для развития своего бизнеса. Благодаря этому уникальные и респектабельные проекты могут
                    воплотиться в
                    жизнь, следовательно, мы поднимем статус республики и уменьшим уровень безработицы.
                </p>
            </div>
        </div>
    </div>
</section>
<section class="rewards">
    <div class="container">
        <div class="row">
            <h3>Награды</h3>
        </div>
        <div class="row row-cols-auto d-flex justify-content-center">
            <?php
                $link2 = mysqli_connect($host, $user, $password, $database) or die(mysqli_error($link2));

                mysqli_set_charset($link2, 'utf8mb4');

                $query = "SELECT * FROM diplomas";
                $result = mysqli_query($link2, $query);

                $rows = mysqli_num_rows($result);

                for($i = 0; $i < $rows; $i++) {
                    $row = mysqli_fetch_row($result);

                    echo "<div class='col'>
                        <div class='reward' style='background-image: url(" . '"' . $row[1] . '"' . ")' )></div>
                    </div>";
                }

                mysqli_close($link2);
            ?>
        </div>
        <!--<div class="carousel carousel-dark slide mx-auto" id="rewards-carousel" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php
                            /*$link2 = mysqli_connect($host, $user, $password, $database) or die(mysqli_error($link));

                            mysqli_set_charset($link2, 'utf8mb4');

                            $query = "SELECT * FROM diplomas";
                            $result = mysqli_query($link2, $query);

                            $rows = mysqli_num_rows($result);

                            for($i = 0; $i < $rows; $i++) {
                                $row=mysqli_fetch_row($result);
                                if($i == 0) {
                                    echo "<div class='carousel-item active' style='background-image: url(" . '"' . $row[1] . '"' . ")'></div>";
                                } else {
                                    echo "<div class='carousel-item' style='background-image: url(" . '"' . $row[1] . '"' . ")'></div>";
                                }
                            }

                            mysqli_close($link2);*/
                        ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#rewards-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Назад</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#rewards-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Вперёд</span>
            </button>
        </div>-->
    </div>
</section>
<section class="reviews">
    <div class="container">
        <h3>Отзывы</h3>
        <div class="row">
            <?php 
                $link3 = mysqli_connect($host, $user, $password, $database) or die(mysqli_error($link));

                mysqli_set_charset($link3, 'utf8mb4');

                $query = "SELECT * FROM reviews ORDER BY RAND() LIMIT 3";
                $result = mysqli_query($link3, $query);

                $rows = mysqli_num_rows($result);

                for($i = 0; $i < $rows; $i++) {
                    $row = mysqli_fetch_row($result);
                    echo "<div class='col-sm'><div class='card'><div class='card-body'><h5 class='card-title'>$row[1]</h5><h6 class='card-subtitle mb-2 text-muted'>Дата</h6><p class='card-text'>$row[2]</p></div></div></div>";
                }
            ?>
        </div>
    </div>
</section>
<section class="form">
    <div class="container">
        <h3>Оставить отзыв</h3>
        <form action="reviewform.php" method="post">
            <div class="mb-3">
                <input type="text" placeholder="ФИО" class="form-control" name="name">
            </div>
            <div class="mb-3">
                <textarea name="review" placeholder="Отзыв" rows="4" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Отправить отзыв</button>
        </form>
    </div>
</section>
<?php
    $scripts = array('carousel', 'submit-review');
    include 'footer.php';
?>