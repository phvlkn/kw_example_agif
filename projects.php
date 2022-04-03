<?php 
    $title = 'Проекты'; 
    include 'head.php';
    include 'popupform.php';
    include 'header.php';
    $title = 'Категории';
    $content = 'categories.php';
    include 'sub-header.php';
?>
<section class="projects-empty">
    <p>Выберите категорию</p>
</section>
<?php 
    $scripts = null;
    include 'footer.php';
?>