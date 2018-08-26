<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Шахматные книги</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="input-wrapper">
            <form action="" method="post">
                <input type="text" name="search" id="search" placeholder="Поиск…">
            </form>
        </div>
    </header>
    <main>
        <?php
            $con = mysqli_connect("127.0.0.1", "root", "","BOOKS");
            $search = $_POST['search'];
            $sql = "SELECT * FROM BOOKS WHERE MATCH(`author`, `title`, `description`, `ser`, `pub`) AGAINST('{$search}.\*' IN BOOLEAN MODE)";
            $res = mysqli_query($con, $sql);
            $rows = mysqli_fetch_all($res, MYSQLI_ASSOC);
            if (count($rows) > 0) {
                echo "<table class=\"table_dark\">";
                echo "<tr><th>Автор</th><th>Книга</th><th>Издательство</th>
                        <th>Серия</th><th>Год выпуска</th><th>Том</th><th>Скачать</th></tr>";
                foreach ($rows as $key => $value) {
                    echo "<tr><td>".$value['author']."</td><td>".$value['title']."</td><td>".$value['pub']."</td>
                    <td>".$value['ser']."</td><td>".$value['years']."</td><td>".$value['volume']."</td><td><p><a href='".$value['download']."' target=\"_blank\">Скачать</p></td></tr>";
                }
                echo "</table>";
            } else {
                echo "<p class='no-results'>Ничего не найдено</p>";
            }
        ?>
    </main>
    <footer>
        <div class="footer">
            <p>Email для связи - <a href="mailto:example@mail.com" class="email">example@mail.com</a></p>
        </div>
    </footer>
    <script src="external.js"></script>
</body>
</html>