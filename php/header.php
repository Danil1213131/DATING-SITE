<?php session_start() ?>
<header>
    <a class="header-text" href="/"><img src="img/Hearts3x_42242.ico" alt="" srcset="">Полинка</a>
    <?php if ($_SESSION["User"]) { ?>
        <a class="class=" header-text"" href="#">Личный кобинет</a>
    <?php
    } else {
    ?>
        <div class="header-bloc-right">
            <a class="header-text">Вход</a>
            <a id="registration" class="header-text">Регистрация</a>
        </div>
    <?php } ?>


</header>