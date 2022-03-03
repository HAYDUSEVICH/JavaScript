<meta charset="UTF-8">
<form method="POST" action=" ">
    Kwota
    <input name="kwota"></input><br>
    Procent (Podaj jako, np. 0.23
    <input name="procent"></input><br>
    <button type="submit" name="wykonaj">wykonaj</button>
</form>

<?php
if (isset($_POST['wykonaj'])){
    $kwota = $_POST['kwota'];
    $procent = $_POST['procent'];

    $suma = $kwota * $procent;
    $podatek = $kwota - $suma;

    echo "Podatek wynosi:" .$suma. "<br>";
    echo "Kwota po odliczeniu wynosi:" .$podatek. "<br>";
}

?>