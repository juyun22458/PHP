<?php ob_start(); ?>
<?php
session_start();

if($_SESSION["login"]=="No"){

}else{
    header("Location:0316_A1103327_error.php");
}
?>

<html>
<head>
<meta charset="UTF-8">
</head>

<body>
登入失敗!<br/>
網頁將在三秒後跳轉至登入頁面或<br/>
<a href="0316_A1103327_index.php">點選這裡</a>
<?php
header("Refresh:3;url=0316_A1103327_index.php")
?>
</body>

</html>
<?php ob_flush(); ?>