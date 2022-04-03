<?php 
    $title = 'FAQ';
    include 'head.php';
    include 'popupform.php';
    include 'header.php';
    $title = 'Часто задаваемые вопросы';
    $content = null;
    include 'sub-header.php';
?>
<section class="faq">
    <div class="collapsible">
        <a href="#">
            <div class="collapsible-header">
                <div class="collapsible-button"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12 4C11.4477 4 11 4.44772 11 5V11H5C4.44772 11 4 11.4477 4 12C4 12.5523 4.44772 13 5 13H11V19C11 19.5523 11.4477 20 12 20C12.5523 20 13 19.5523 13 19V13H19C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11H13V5C13 4.44772 12.5523 4 12 4Z"
                            fill="currentColor" /></svg></div>
                <div class="collapsible-header-text">Что такое AGIF?</div>
            </div>
        </a>
        <div class="collapsible-content">
            Это платформа созданая для того что бы дать возможность предпринимателям взаимодействовать с молодёжными
            разработками и проектами в рамках технопарка. Тем самым крупные компании или инвесторы могут найти кадры и
            проекты для развития своего бизнеса. Благодаря этому уникальные и респектабельные проекты могут воплотиться
            в жизнь, следовательно, мы поднимем статус республики и уменьшим уровень безработицы.
        </div>
    </div>
    <div class="collapsible">
        <a href="#">
            <div class="collapsible-header">
                <div class="collapsible-button"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12 4C11.4477 4 11 4.44772 11 5V11H5C4.44772 11 4 11.4477 4 12C4 12.5523 4.44772 13 5 13H11V19C11 19.5523 11.4477 20 12 20C12.5523 20 13 19.5523 13 19V13H19C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11H13V5C13 4.44772 12.5523 4 12 4Z"
                            fill="currentColor" /></svg></div>
                <div class="collapsible-header-text">Почему именно мы?</div>
            </div>
        </a>
        <div class="collapsible-content">А кто ещё? Самые глупые дети кванториума, кому вообще взбредёт в голову
            создавать что то на бесплатной основе.</div>
    </div>
    <div class="collapsible">
        <a href="#">
            <div class="collapsible-header">
                <div class="collapsible-button"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12 4C11.4477 4 11 4.44772 11 5V11H5C4.44772 11 4 11.4477 4 12C4 12.5523 4.44772 13 5 13H11V19C11 19.5523 11.4477 20 12 20C12.5523 20 13 19.5523 13 19V13H19C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11H13V5C13 4.44772 12.5523 4 12 4Z"
                            fill="currentColor" /></svg></div>
                <div class="collapsible-header-text">Отличие от других?</div>
            </div>
        </a>
        <div class="collapsible-content">В отличии от конкурса «Руками» у нас нет конкурсного отбора, тем самым
            предприниматели могут сами найти проект для реализации и работоспособную команду.<br>Любой желающий может
            выложить свой проект, возможно именно его проект окажется интересным для инвестора.</div>
    </div>
    <div class="collapsible">
        <a href="#">
            <div class="collapsible-header">
                <div class="collapsible-button"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12 4C11.4477 4 11 4.44772 11 5V11H5C4.44772 11 4 11.4477 4 12C4 12.5523 4.44772 13 5 13H11V19C11 19.5523 11.4477 20 12 20C12.5523 20 13 19.5523 13 19V13H19C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11H13V5C13 4.44772 12.5523 4 12 4Z"
                            fill="currentColor" /></svg></div>
                <div class="collapsible-header-text">Кто работает над AGIF?</div>
            </div>
        </a>
        <div class="collapsible-content">
            Над платформой работают 3 человека. Все задачи внутри проекта распределены по компетенциям, участников.
            <br><br>Участники:
            <br>Эмин - мораль команды
            <br>Владислав - верстка сайта и его создание
            <br>Артём - не ищет проекты
        </div>
    </div>
</section>
<?php 
    $scripts = array('collapsible');
    include 'footer.php' 
?>