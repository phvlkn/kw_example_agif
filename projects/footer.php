<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <h5>Меню</h5>
                <ul class="nav flex-column">
                    <li class="nav-item"><a href="/index.php" class="nav-link">Главная</a></li>
                    <li class="nav-item"><a href="/projects.php" class="nav-link">Библиотека</a></li>
                    <li class="nav-item"><a href="/faq.php" class="nav-link">FAQ</a></li>
                </ul>
            </div>
            <div class="col-sm">
                <h5>Библиотека</h5>
                <ul class="nav flex-column">
                    <li class="nav-item"><a href="/projects/promdesign.php" class="nav-link">Промдизайн</a></li>
                    <li class="nav-item"><a href="/projects/aero.php" class="nav-link">Аэро</a></li>
                    <li class="nav-item"><a href="/projects/vrar.php" class="nav-link">VR/AR</a></li>
                    <li class="nav-item"><a href="/projects/hitech.php" class="nav-link">Хайтек</a></li>
                    <li class="nav-item"><a href="/projects/promrobo.php" class="nav-link">Промробо</a></li>
                    <li class="nav-item"><a href="/projects/it.php" class="nav-link">IT</a></li>
                    <li class="nav-item"><a href="/projects/media.php" class="nav-link">Медиа</a></li>
                </ul>
            </div>
            <div class="col-sm">
                <h5>Соц. сети</h5>
                <ul class="nav">
                    <li class="nav-item"><i class="fab fa-vk"></i></li>
                    <li class="nav-item"><i class="fab fa-instagram"></i></li>
                    <li class="nav-item"><i class="fab fa-twitter"></i></li>
                </ul>
                <h5>E-Mail</h5>
                123123@gmail.com
            </div>
        </div>
    </div>
</footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"
    integrity="sha256-TAzGN4WNZQPLqSYvi+dXQMKehTYFoVOnveRqbi42frA=" crossorigin="anonymous"></script>
<script src="https://github.com/miguel-perez/smoothState.js/blob/master/jquery.smoothState.min.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<?php
    if($scripts):
        foreach($scripts as &$value) {
            echo "<script src='../js/dist/$value.prod.js' integrity=''></script>";
        };
    else:
        echo "</html>";
        return;
    endif
?>

</html>