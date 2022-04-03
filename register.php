<?php
    $title = 'Отправка проекта';
    include 'head.php';
    include 'popupform.php';
    include 'header.php';
    $title = 'Отправка проекта';
    $content = null;
    include 'sub-header.php';
    if ($_POST['submit']){
        $text = 'Имя: ' . $_POST['name'] . '\r\nФамилия: ' . $_POST['surname'] . '\r\nНазвание проекта: ' . $_POST['project-name'] . '\r\nОписание: ' . $_POST['description'];
        $headers = 'From: ' . $_POST['email'] . '\r\n' . 'Reply-To: ' . $_POST['email'] . '\r\n' . 'X-Mailer: PHP/' . phpversion();

        mail('vl***********@gmail.com', 'Заявка на добавление проекта', $text, $headers);
    }
?>
<section class="form">
    <div class="container">
        <form action="" method="post">
            <div class="mb-3"><input type="text" placeholder="Имя" class="form-control" id="name"></div>
            <div class="mb-3"><input type="text" placeholder="Фамилия" class="form-control" id="surname"></div>
            <div class="mb-3"><input type="email" placeholder="E-Mail" class="form-control" id="email"></div>
            <div class="mb-3"><input type="text" class="form-control" id="project-name" placeholder="Название проекта">
            </div>
            <div class="mb-3"><input type="file" accept=".jpg, .jpeg, .png" class="form-control" id="thumbnail"></div>
            <div class="mb-3"><textarea name="description" id="description" cols="30" rows="10"
                    placeholder="Описание проекта" class="form-control"></textarea></div>
            <button type="submit" class="btn btn-primary">Отправить проект</button>
        </form>
    </div>
    <!--<form class="register-form" method="post">
        <input type="text" name="name" placeholder="Имя">
        <input type="text" name="surname" placeholder="Фамилия">
        <input type="email" name="email" placeholder="E-Mail">
        <input type="text" name="project-name" placeholder="Название проекта">
        <input type="file" name="thumbnail" accept=".jpg, .jpeg, .png">
        <textarea name="description" cols="30" rows="10" placeholder="Описание проекта"></textarea>
        <input type="submit" name="submit" value="Отправить проект">
    </form>-->
</section>
<?php
    $scripts = array('submit-register');
    include 'footer.php';
?>