<?php
function highest ()
{
    $a=readline("Enter the First Number");
    $b=readline("Enter The Second Number");
    $c=readline("Enter The Third Number");
    if($a>$b && $a>$c)
    {
        echo $a,"is Highest Number";
    }
        if($b>$a && $b>$c)
        {
        echo $b,"is highest NUmber";
        }
        else
        { 
           echo $c,"is highest Number";
        }
     
}
highest ()

?>