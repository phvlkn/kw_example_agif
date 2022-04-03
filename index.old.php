<?php 
    $title = 'Главная'; 
    include 'head.php';
    include 'popupform.php';
    include 'header.php';

    require_once 'connection.php';
?>
<section class="home">
    <div class="carousel">
        <div class="swiper-projects swiper-container">
            <div class="swiper-wrapper">
                <?php
                    $link1 = mysqli_connect($host, $user, $password, $database) or die('Ошибка ' . mysqli_error($link));

                    mysqli_set_charset($link1, 'utf8mb4');

                    $query = "SELECT * FROM show_on_homepage";
                    $result = mysqli_query($link1, $query);

                    $rows = mysqli_num_rows($result);
                    
                    for($i = 0; $i < $rows; $i++) { 
                        $row=mysqli_fetch_row($result); 
                        echo "<div class='swiper-slide' style='background-image: url(" . '"' . $row[3] . '"' . ")'></div>";
                    }
                    mysqli_close($link1);
                ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <div class="quick-info-container">
        <?php
        $link2 = mysqli_connect($host, $user, $password, $database) or die('Ошибка ' . mysqli_error($link));

        mysqli_set_charset($link2, 'utf8mb4');

        $query = "SELECT * FROM show_on_homepage";
        $result = mysqli_query($link2, $query);

        $rows = mysqli_num_rows($result);

        for($i = 0; $i < $rows; $i++) {
            $row = mysqli_fetch_row($result);
            echo "<div class='quick-info'><div class='title'>$row[1]</div><div class='description'>$row[2]</div><a href='projects/project.php?category=$row[5]&id=$row[6]'>Подробнее</a></div>";
        }
        ?>
    </div>
</section>
<section class="about">
    <div class="logo">
        <img src="img/logo-white.svg" alt="Логотип AGIF">
    </div>
    <div class="text">
        AGIF - это платформа созданая для того, чтобы дать возможность предпринимателям взаимодействовать с молодёжными
        разработками и проектами в рамках технопарка. Тем самым крупные компании или инвесторы могут найти кадры и
        проекты для развития своего бизнеса. Благодаря этому уникальные и респектабельные проекты могут воплотиться в
        жизнь, следовательно, мы поднимем статус республики и уменьшим уровень безработицы.
    </div>
</section>
<section class="rewards">
    <div class="title">
        Награды
    </div>
    <div class="carousel">
        <div class="swiper-diplomas swiper-container">
            <div class="swiper-wrapper">
                <?php
                    $link3 = mysqli_connect($host, $user, $password, $database) or die('Ошибка ' . mysqli_error($link));

                    mysqli_set_charset($link3, 'utf8mb4');

                    $query = "SELECT * FROM diplomas";
                    $result = mysqli_query($link3, $query);

                    $rows = mysqli_num_rows($result);
                    
                    for($i = 0; $i < $rows; $i++) { 
                        $row=mysqli_fetch_row($result); 
                        echo "<div class='swiper-slide' style='background-image: url(" . '"' . $row[1] . '"' . ")'>
                        </div>";
                    }

                    mysqli_close($link2);
                ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <div class="reward-info"></div>
</section>
<section class="reviews">
    <div class="title">
        Отзывы
    </div>
    <div class="carousel">
        <div class="swiper-reviews swiper-container">
            <div class="swiper-wrapper">
                <?php
                    $link4 = mysqli_connect($host, $user, $password, $database) or die('Ошибка ' . mysqli_error($link));

                    mysqli_set_charset($link4, 'utf8mb4');

                    $query = "SELECT * FROM reviews";
                    $result = mysqli_query($link4, $query);

                    $rows = mysqli_num_rows($result);

                    for($i = 0; $i < $rows; $i++) { 
                        $row=mysqli_fetch_row($result); 
                        echo "<div class='swiper-slide'><div class='swiper-slide-content'><h3>$row[1]</h3>$row[2]</div></div>";
                    }

                    mysqli_close($link3);
                ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>
<section class="form">
    <div class="title">
        Оставить отзыв
    </div>
    <form class="review-form" action='reviewform.php' method="post">
        <input name="name" type="text" placeholder="ФИО">
        <textarea name="review" placeholder="Отзыв"></textarea>
        <input type="submit">
    </form>
</section>
<?php 
    $scripts = array('swiper', 'submit-review');
    include 'footer.php';
?>