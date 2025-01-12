<h1>1a</h1>
<p>Ile cyfr wypisać:</p>
<form action="petle.php" method="POST">
    <input type="number" name="1a">
    <input type="submit" value="ok">
</form>
<?php
if (isset($_POST['1a'])) {
    for ($i = 1; $i <= $_POST['1a']; $i++) {
        echo $i . " ";
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
    for ($i = 1; $i <= $_POST['1b']; $i++) {
        echo $i . "<br>";
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
    for ($i = $_POST['1c']; $i > 0 ; $i--) {
        echo $i . " ";
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
    for ($i = $_POST['1dstart']; $i <= $_POST['1dkoniec']; $i += $_POST['1dkrok']) {
        echo $i . " ";
    }
}
?>

<h1>2</h1>
Ile masz lat:
<form action="petle.php" method="POST">
    <select name="2">
        <?php
        for($i = 1; $i <= 133; $i++) {
            echo "<option value='" . $i . "'>" . $i . "</option>";
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