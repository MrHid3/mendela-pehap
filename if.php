<body>
    <h1>Pobieranie wartości z formularzy, instrukcja warunkowa</h1>
    <h2>1</h2>
    <form action="if.php" method="POST">
        <input type="text" name="name">
        <input type="submit">
    </form>
    <p>wypisano: <?php if(isset($_POST["name"])){
        echo $_POST["name"];
        } ?></p>

    <h2>2</h2>
    <p>Ile masz lat?</p>
    <form action="wynik.php" method="POST">
        <input type="number" name="age">
        <input type="submit">
    </form>

    <h2>3</h2>
    <h3>Czy lubisz zimę?</h3>
    <form action="if.php" method="POST">
        <select name="zima">
            <option value="t">TAK</option>
            <option value="n">NIE</option>
        </select>
        <input type="submit" value="OK">
    </form>
    <?php
    if(isset($_POST["zima"])){
        if($_POST["zima"] == "t"){
            echo "spoko ok";
        }elseif ($_POST["zima"] == "n"){
            echo "szkoda :(";
        }
    }
    ?>

    <h3>4a</h3>
    <form action="if.php" method="POST">
        <input type="number" name="first">
        <select name="hl">
            <option value="<"><</option>
            <option value="<="><=</option>
            <option value="=">=</option>
            <option value=">">></option>
            <option value=">=">>=</option>
        </select>
        <input type="number" name="second">
        ?
        <input type="submit" value="OK">
    </form>

    <?php
    if(isset($_POST["first"]) && isset($_POST["second"])){
        switch($_POST["hl"]){
            case "<":
                $_value = $_POST["first"] < $_POST["second"];
            case "<=":
                $_value = $_POST["first"] <= $_POST["second"];
            case "=":
                $_value = $_POST["first"] == $_POST["second"];
            case ">":
                $_value = $_POST["first"] > $_POST["second"];
            case ">=":
                $_value = $_POST["first"] >= $_POST["second"];
        }
        if($_value){
            echo "TAK";
        }else{
            echo "NIE";
        }
    }
    ?>

    <h3>4b</h3>
    <form action="if.php" method="POST">
        <input type="number" name="firsta">
        <select name="hla">
            <option value="<" <?php if(isset($_POST["hla"]) && $_POST["hla"] == "<"){echo "selected";}?>><</option>
            <option value="<=" <?php if(isset($_POST["hla"]) && $_POST["hla"] == "<="){echo "selected";}?>><=</option>
            <option value="=" <?php if(isset($_POST["hla"]) && $_POST["hla"] == "="){echo "selected";}?>>=</option>
            <option value=">" <?php if(isset($_POST["hla"]) && $_POST["hla"] == ">"){echo "selected";}?>>></option>
            <option value=">=" <?php if(isset($_POST["hla"]) && $_POST["hla"] == ">="){echo "selected";}?>>>=</option>
        </select>
        <input type="number" name="seconda">
        ?
        <input type="submit" value="OK">
    </form>

    <?php
    if(isset($_POST["firsta"]) && isset($_POST["seconda"])){
        switch($_POST["hla"]){
            case "<":
                $_value = $_POST["firsta"] < $_POST["seconda"];
            case "<=":
                $_value = $_POST["firsta"] <= $_POST["seconda"];
            case "=":
                $_value = $_POST["firsta"] == $_POST["seconda"];
            case ">":
                $_value = $_POST["firsta"] > $_POST["seconda"];
            case ">=":
                $_value = $_POST["firsta"] >= $_POST["seconda"];
        }
        if($_value){
            echo "TAK";
        }else{
            echo "NIE";
        }
    }
    ?>

    <h3>5a</h3>
    <form action="if.php" method="post">
        <input name="aaa" size="1" type="number">x<sup>2</sup>+<input name="bbb" size="1" type="number">x+<input name="ccc" size="1" type="number">=0&nbsp&nbsp&nbsp
        <input type="submit" value="oblicz pierwiastki">
    </form>
    <?php
        if(isset($_POST["aaa"]) && isset($_POST["bbb"]) && isset($_POST["ccc"])) {
            $delta = $_POST["bbb"] * $_POST["bbb"] - (4 * $_POST["ccc"] * $_POST["ccc"]);
            $a = $_POST["aaa"];
            $b = $_POST["bbb"];
            $c = $_POST["ccc"];
            echo "detla=" . $delta . "<br>";
            if ($delta == 0) {
                echo "x<sub>1</sub>=x<sub>x</sub>=" . (-$b/(2*$a)) . "<br>";
                return;
            }
            echo "x<sub>1</sub>=" . ((-$b-sqrt($delta)) / (2 * $a)) . "<br>";
            echo "x<sub>2</sub>=" . ((-$b+sqrt($delta)) / (2 * $a)) . "<br>";
        }
    ?>

    <h3>5b</h3>
    <form action="if.php" method="post">
        <input name="aa" size="1" type="number">x<sup>2</sup>+<input name="bb" size="1" type="number">x+<input name="cc" size="1" type="number">=0&nbsp&nbsp&nbsp
        <input type="submit" value="oblicz pierwiastki">
    </form>

    <?php
        if(isset($_POST["aa"]) && isset($_POST["bb"]) && isset($_POST["cc"])) {
            $delta = $_POST["bb"] * $_POST["bb"] - (4 * $_POST["cc"] * $_POST["cc"]);
            $a = $_POST["aa"];
            $b = $_POST["bb"];
            $c = $_POST["cc"];
            echo "Δ=" . "<input style='color: red' disabled size='1' value='" . $delta . "'>&nbsp;&nbsp;";
            if ($delta == 0) {
                echo "x<sub>1</sub>=x<sub>x</sub>=<input style='color: green' disabled size='5' value='" . (-$b/(2*$a)) . "'>";
                return;
            }
            echo "x<sub>1</sub>=<input style='color: green' disabled value='" . ((-$b-sqrt($delta)) / (2 * $a)) . "'>&nbsp;&nbsp;";
            echo "x<sub>2</sub>=<input style='color: green' disabled value='" . ((-$b+sqrt($delta)) / (2 * $a)) . "'>&nbsp;&nbsp;";
        }
    ?>

</body>