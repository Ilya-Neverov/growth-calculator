<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="icon" href="free-icon-self-growth-5058064.png">
        <title>калькулятор роста</title>
    </head>
    <body>
        <h1>Калькулятор роста</h1>
        <section>
            <?php
            if (array_key_exists('int', $_POST)) {
                if ($_POST['int'] < '288' && $_POST['int'] > '40') {
                    echo 'Ваш рост ' . "$_POST[int]" . ' см.<br> Пересчитать рост?</p>';
                } else {
                    echo '<p>Некорректно введен рост, Вы ввели <mark>' . "$_POST[int]" . '</mark><br> Попробуйте еще раз =)</p>';
                }
            } else {
                echo '<p>Введите Ваш рост в см.</p>';
            }
            ?>
            <form action="index.php" name="height" method="POST">
                <input name="int" type="number">
                <button>РАСЧЕТ</button>
            </form>
        </section>
    </body>
</html>
