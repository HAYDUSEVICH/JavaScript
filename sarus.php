<meta charset="UTF-8">
<form method="GET" action=" ">
    a13<input type="text" name="a13"></input><br>
    a22<input type="text" name="a22"></input><br>
    a31<input type="text" name="a31"></input><br>
    a11<input type="text" name="a11"></input><br>
    a23<input type="text" name="a23"></input><br>
    a32<input type="text" name="a32"></input><br>
    a12<input type="text" name="a12"></input><br>
    a21<input type="text" name="a21"></input><br>
    a33<input type="text" name="a33"></input><br>

    <button type="submit" name="wykonaj">wykonaj</button>
</form>

<?php
    $a13=$_GET['a13'];
    $a22=$_GET['a22'];
    $a31=$_GET['a21'];
    $a11=$_GET['a11'];
    $a23=$_GET['a23'];
    $a32=$_GET['a32'];
    $a12=$_GET['a12'];
    $a21=$_GET['a21'];
    $a33=$_GET['a33'];

    $wynik;
    $wynik=$a13*$a22*$a31+$a11*$a23*$a32+$a12*$a21*$a33;
    echo "Wynik: $wynik";
    
?>