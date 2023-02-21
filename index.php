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
                    if (preg_match_all("/[1-2][0-9][0-9]/", $_POST['int'])) {
                        echo 'Ваш рост ' . "$_POST[int]" . ' см !!!!';
                        echo '<p>пересчитать Ваш рост?</p>';
                    } else {
                        echo '<p>некоретный введен рост в сантиметрах</p>';
                    }
                } else {

                    echo '<p>введите Ваш рост в сантиметрах</p>';
                }
            ?>
            <form action="index.php" name="height" method="POST">
                <input name="int" type="text">
                <button>РАСЧЕТ</button>
            </form>
        </section>
    </body>
</html>
