<meta charset="UTF-8">

<?php
if(isset($_POST["id"])){
    $id=$_POST["id"];
    echo "你的學號是:".$id."<br/>";
    $whether=$_POST["whether"];
    echo "是否參加系烤:".$whether."<br/>";
    $phone=$_POST["phone"];
    echo "連絡電話:".$phone."<br/>";
    echo "加購的飲料有:";
    if(isset($_POST["cola"])){
        $swim=$_POST["cola"];
        echo "可樂 ";
    }
    if(isset($_POST["sprite"])){
        $bike=$_POST["sprite"];
        echo "雪碧 ";
    }
    if(isset($_POST["orangejuice"])){
        $sleep=$_POST["orangejuice"];
        echo "柳橙汁 ";
    }
    if(isset($_POST["beer"])){
        $sleep=$_POST["beer"];
        echo "啤酒";
    }
    echo "<br/>";
    $remark=$_POST["remark"];
    echo "備註:<br/>";
    echo nl2br(strip_tags($remark)) ;
}
?>