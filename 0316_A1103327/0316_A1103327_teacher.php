<?php
session_start();

if($_SESSION["login"]=="Yes"){

}else{
    header("Location:0316_A1103327_error.php");
}
?>

<html>

<head>
<meta charset="UTF-8">
</head>

<body>
<?php

echo $_SESSION["login"];

?>
<br/><font size="8" face="標楷體">國立高雄大學</font><br/>
老師專頁<br/><br/>
<hr width="2160">
<br/><br/>
學生專頁
<br/>
<a href="0316_A1103327_logout.php">logout</a>
</body>

</html>