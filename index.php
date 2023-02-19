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
            if (!empty($_POST['int'])) {
                echo 'Ваш рост ' . "$_POST[int]" . ' см !!!!';
                echo '<p>пересчитать Ваш рост?</p>';
            } else {
                echo '<p>введите Ваш рост</p>';
            }
            ?>
            <form action="index.php" name="height" method="POST">
                <input name="int" type="number">
                <button>РАСЧЕТ</button>
            </form>
        </section>
    </body>
</html>
