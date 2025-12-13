<?php
//caculator
$a=$_POST['a'];
$b=$_POST['b'];
$op=$_POST['op'];
if ($op=="+")
{
    $c=$a+$b;
    echo $c;
}
else if ($op=="-")
{
    $c=$a-$b;
    echo $c;
}
else if ($op=="*")
{
    $c=$a*$b;
    echo $c;
}
else if ($op=="%")
{
    $c=$a%$b;
    echo $c;
}
else if ($op=="/")
{
    $c=$a/$b;
    echo $c;
}
else 
{
    echo 'Wrong input you have to write only( +, -/, *,  %)';
}
?>
<form name="" method="POST" action="cal.php">
a=<input type="number" name="a"><br>
b=<input type="number" name="b"><br>
op=<input type="text" name="op" placeholder="Write only +,-,/,*,%"> <br>
    <input type="submit" value="find it">

</form> 
      