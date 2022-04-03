<?php
    $title = 'Проекты - Хайтек';
    include './head.php';
    include '../header.php';
    $title = 'Категории';
    $content = 'categories.php';
    include '../sub-header.php';
?>
<section class="projects-section">
    <div class="container">
        <div class="row row-cols-sm-auto">
            <?php
                $category = 'hitech';
                include './getprojects.php';
            ?>
        </div>
    </div>
</section>
<?php
    $scripts = null;
    include './footer.php';
?>