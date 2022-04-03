<footer>
    <div class="footer-left">
        <div class="footer-menu">
            <b>Меню</b>
            <ul>
                <li><a href="/index.php">Главная</a></li>
                <li><a href="/projects.php">Библиотека</a></li>
                <li><a href="/faq.php">FAQ</a></li>
            </ul>
        </div>
        <div class="footer-menu footer-menu-library">
            <b>Библиотека</b>
            <ul>
                <li><a href="/projects/promdesign.php">Промдизайн</a></li>
                <li><a href="/projects/aero.php">Аэро</a></li>
                <li><a href="/projects/vrar.php">VR/AR</a></li>
                <li><a href="/projects/hitech.php">Хайтек</a></li>
                <li><a href="/projects/promrobo.php">Промробо</a></li>
                <li><a href="/projects/it.php">IT</a></li>
                <li><a href="/projects/media.php">Медиа</a></li>
            </ul>
        </div>
    </div>
    <div class="footer-right">
        <b>Соц. сети</b>
        <ul class="socials">
            <li><a href="#"><i class="fab fa-vk"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
        </ul>
        <b>E-Mail</b>
        <ul class="email">
            <li>123123@gmail.com</li>
        </ul>
    </div>
</footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
<script src="https://github.com/miguel-perez/smoothState.js/blob/master/jquery.smoothState.min.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<?php
    if($scripts):
        foreach($scripts as &$value) {
            echo "<script src='js/dist/$value.prod.js' integrity=''></script>";
        };
    else:
        echo "</html>";
        return;
    endif
?>

</html>