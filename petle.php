<h1>1a</h1>
<p>Ile cyfr wypisać:</p>
<form action="petle.php" method="POST">
    <input type="number" name="1a">
    <input type="submit" value="ok">
</form>
<?php
if (isset($_POST['1a'])) {
    for ($row = 1; $row <= $_POST['1a']; $row++) {
        echo $row . " ";
    }
}
?>

<h1>1b</h1>
<p>Ile cyfr wypisać:</p>
<form action="petle.php" method="POST">
    <input type="number" name="1b">
    <input type="submit" value="ok">
</form>
<?php
if (isset($_POST['1b'])) {
    for ($row = 1; $row <= $_POST['1b']; $row++) {
        echo $row . "<br>";
    }
}
?>

<h1>1c</h1>
<p>Od ilu maleć</p>
<form action="petle.php" method="POST">
    <input type="number" name="1c">
    <input type="submit" value="ok">
</form>
<?php
if (isset($_POST['1c'])) {
    for ($row = $_POST['1c']; $row > 0 ; $row--) {
        echo $row . " ";
    }
}
?>

<h1>1d</h1>
<p>Ile cyfr wypisać:</p>
<form action="petle.php" method="POST">
    start:
    <input type="number" name="1dstart">
    krok:
    <input type="number" name="1dkrok">
    koniec:
    <input type="number" name="1dkoniec">
    <input type="submit" value="ok">
</form>
<?php
if (isset($_POST['1dstart']) && isset($_POST['1dkrok']) && isset($_POST['1dkoniec'])) {
    for ($row = $_POST['1dstart']; $row <= $_POST['1dkoniec']; $row += $_POST['1dkrok']) {
        echo $row . " ";
    }
}
?>

<h1>2</h1>
Ile masz lat:
<form action="petle.php" method="POST">
    <select name="2">
        <?php
        for($row = 1; $row <= 133; $row++) {
            echo "<option value='" . $row . "'>" . $row . "</option>";
        }
        ?>
    </select>
    <input type="submit" value="ok">
</form>
<?php
    if(isset($_POST["2"])){
        echo "jesteś w kwiecie wieku!";
    }
?>

<h1>3</h1>
<form action="petle.php" method="POST">
    Ile cyfr: <input type="number" name="cyfry">
    pion/poziom: <select name="pion">
        <option value="pion">pion</option>
        <option value="poziom">poziom</option>
    </select>
    krok: <input type="number" name="krok"><input type="submit">
</form>

<?php
    if(isset($_POST["cyfry"]) && isset($_POST["krok"])){
        echo '<div style="border: 1px solid black; width: fit-content; height: fit-content; padding: 2px;">';
        $_num = 1;
        for($_i = 1; $_i <= $_POST["cyfry"]; $_i++){
            echo "<div style='border: 1px solid black; margin: 1px;'>".$_num."</div>";
            $_num += $_POST["krok"];
        }
        echo '</div>';
    }
?>


<h1>4</h1>
<form action="petle.php" method="POST">
    Wierszy: <input type="number" name="wierszy">
    Kolumn: <input type="number" name="kolumn">
    <input type="submit">
</form>
<?php
    if(isset($_POST["wierszy"]) && isset($_POST["kolumn"])){
        echo "<div style='border: 1px solid black; display: grid; grid-template-columns: repeat(".$_POST["kolumn"].", 1fr); padding: 2px; width: fit-content;'>";
        for($_i = 1; $_i <= $_POST["wierszy"] * $_POST["kolumn"]; $_i++){
            echo "<div style='border: 1px solid black; margin: 1px;'>".$_i."</div>";
        }
        echo "</div>";
    }
?>

<h1>5</h1>
<form action="petle.php" method="POST">
    Wierszy: <input type="number" name="wierszysz">
    Kolumn: <input type="number" name="kolumnsz">
    <input type="submit">
</form>
<?php
    if(isset($_POST["wierszysz"]) && isset($_POST["kolumnsz"])){
        echo "<div style='border: 1px solid black; display: grid; grid-template-columns: repeat(".$_POST["kolumnsz"].", 1fr); padding: 2px; width: fit-content;'>";
        $_color = "";
        for($_i = 1; $_i <= $_POST["wierszysz"] * $_POST["kolumnsz"]; $_i++){
            if(($_i % $_POST["kolumnsz"]) == 1){
                if(($_i/$_POST["kolumnsz"])%2 == 0){
                    $_color = "white";
                }else{
                    $_color = "black";
                }
            }else{
                if($_color == "white"){
                    $_color = "black";
                }else{
                    $_color = "white";
                }
            }
            echo "<div style='border: 1px solid black; width: 25px; height: 25px; margin: 1px; background-color:".$_color."'></div>";
        }
        echo "</div>";
    }
?>

<h3>6a</h3>
    <form method="post" action="petle.php">
        rozmiar:<input name="ile3" size="1">
    <input type="submit">
</form>
<?php
    if (isset($_POST["ile3"])) {
        echo "<table border=1>";
        for ($row=1; $row <= $_POST["ile3"]; $row++) { 
            echo "<tr>";
            for ($col=1; $col <= $_POST["ile3"]; $col++) {
                echo "<td>" . ($row * $col) . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
?>

<h3>6b</h3>
    <form method="post" action="petle.php">
        rozmiar:<input name="ile4" size="1">
    <input type="submit" value="ok">
</form>
<?php
    if (isset($_POST["ile4"])) {
        echo "<table border='0' cellpadding='4'>";
    
        echo "<tr><td></td>";
        for ($row = 1; $row <= $_POST["ile4"]; $row++) {
            echo "<td bgcolor='grey'>$row</td>";
        }
        echo "</tr>";
        
        for ($row = 1; $row <= $_POST["ile4"]; $row++) {
            echo "<tr>";
            echo "<td bgcolor='grey'>$row</td>";
            for ($col = 1; $col <= $_POST["ile4"]; $col++) {
                $value = $row * $col;
                echo "<td>$value</td>";
            }
            echo "</tr>";
        }
        
        echo "</table>";
    }
?>