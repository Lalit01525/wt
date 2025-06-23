<?php
$text="LALIT RAVINDRA SURYAWANSHI";
$search_char="A";$count="0";
for($x=0;$x<strlen($text);$x++)
{
    if(substr($text,$x,1)=="$search_char")
    {
        $count=$count+1;
    }
}
echo "the A char found $count  times "."\n";
?>