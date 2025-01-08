<body>
    <h1>Pobieranie wartości z formularzy, instrukcja warunkowa</h1>
    <h2>1</h2>
    <form action="index.php" method="POST">
        <input type="text" name="name">
        <input type="submit">
    </form>
    <p>wypisano: <?php echo $_POST["name"]; ?></p>

    <h2>2</h2>
    <p>Ile masz lat?</p>
    <form action="wynik.php" method="POST">
        <input type="number" name="age">
        <input type="submit">
    </form>

    <h3>Czy lubisz zimę?</h3>
    <form action="index.php" method="POST">
        <select name="zima">
            <option value="t">TAK</option>
            <option value="n">NIE</option>
        </select>
        <input type="submit" value="OK">
    </form>
    <?php
    if($_POST["zima"] == "t"){
        echo "spoko ok";
    }elseif ($_POST["zima"] == "n"){
        echo "szkoda :(";
    }?>
</body>