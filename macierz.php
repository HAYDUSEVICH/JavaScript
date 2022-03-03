<meta charset="UTF-8">
<form method="GET" action=" ">
    A<input type="text" name="a"></input><br>
    B<input type="text" name="b"></input><br>
    C<input type="text" name="c"></input><br>
    D<input type="text" name="d"></input><br>
    
    <button type="submit" name="wykonaj">wykonaj</button>
</form>

<?php
    $a=$_GET['a'];
    $b=$_GET['b'];
    $c=$_GET['c'];
    $d=$_GET['d'];

    $wynik;
    $wynik=($a*$d)-($b*$c);
    echo "Wynik: $wynik";
    
?>