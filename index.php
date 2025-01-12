<body>
    <h1>Pobieranie wartości z formularzy, instrukcja warunkowa</h1>
    <h2>1</h2>
    <form action="index.php" method="POST">
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

    <h3>Czy lubisz zimę?</h3>
    <form action="index.php" method="POST">
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
    <form action="index.php" method="POST">
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
    <form action="index.php" method="POST">
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
</body>