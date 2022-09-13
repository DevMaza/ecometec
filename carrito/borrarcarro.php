
<?php session_start(); 
echo '<script language="javascript">alert("juas");</script>';
header("Location: ".$_SERVER['HTTP_REFERER']."");
unset($_SESSION['carrito']);
?>