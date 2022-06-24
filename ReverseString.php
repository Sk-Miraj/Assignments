<?php
function reverse($str)
{
if (($str == null) || (strlen($str) <= 1))
echo ($str);
else
{
echo ( $str[strlen($str) - 1] );
reverse(substr($str, 0, (strlen($str) - 1)));
}
}
if(isset($_POST['submit']))
{
$str = $_POST['textname'];
echo "Original string: " . $str."</br>";

echo"Reverse of given string: " ;
reverse($str);
}
?>