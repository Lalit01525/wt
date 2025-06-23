<?php
$rows=5;


for($i=1;$i<=$rows;$i++)
{
    for($j=1;$j<=$rows-$i;$j++)
    {
        echo"&nbsp;&nbsp;";

    }
    for($k=1;$k<=(2*$i-1);$k++)
    {
        echo"*";
        
    }
    echo"<br>";
}
?>