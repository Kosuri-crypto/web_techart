<script src="./js/validation.js"></script>
<main>
    <h1>Задать вопрос</h1>
    <form action="/form.php" method="post" id="form">
        <div>
            <label for="name">Имя:</label>
            <input type="text" name="name" id="name" maxlength="64">
            <p class="name-warn  disable">Неверно введены данные: имя должно начинаться с заглавной буквы</p>
        </div>
        <div>
            <label for="mail">E-mail:</label>
            <input type="email" name="mail" id="mail">
            <p class="mail-warn  disable">Неверно введены данные: e-mail</p>
        </div>
        <div>
            <label for="quest">Вопрос:</label>
            <input type="text" name="quest" id="quest" maxlength="300"> <!-- 300 chars -->
            <!-- <textarea name="quest" id="quest" cols="30" rows="10"></textarea> -->
            <p class="quest-warn disable">Неверно введены данные: текст вопроса</p>
        </div>
        <input class="submit" id="submit" type="submit" value="Отправить">
    </form>
</main>