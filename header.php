<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a href="/index.php" class="navbar-brand">Agif</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a href="/index.php"
                            class="nav-link <?php if($_SERVER['SCRIPT_NAME']=='/index.php') { echo('active'); } ?>">Главная</a>
                    </li>
                    <li class="nav-item"><a href="/projects.php"
                            class="nav-link <?php if($_SERVER['SCRIPT_NAME']=='/projects.php') { echo('active'); } ?>">Библиотека</a>
                    </li>
                    <li class="nav-item"><a href="/faq.php"
                            class="nav-link <?php if($_SERVER['SCRIPT_NAME']=='/faq.php') { echo('active'); } ?>">FAQ</a>
                    </li>
                </ul>
                <a href="/register.php" class="btn btn-light d-flex">Добавить проект</a>
            </div>
        </div>
    </nav>
</header>