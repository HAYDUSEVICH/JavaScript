<meta charset="UTF-8">
<form method="POST" action=" ">
    <input name="imie"></input><br>
    <input name="nazwisko"></input><br>
    <button type="submit" name="kliknij">kliknij</button>
</form>

<?php
if (isset($_POST['kliknij'])){
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];

    echo "witaj". " " . $imie. " " . $nazwisko."<br>";
}

?>