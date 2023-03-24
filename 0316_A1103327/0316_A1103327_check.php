<?php
session_start();

$role=$_POST["role"];

if($role=="principal"){
    $myID="principal";
    $myPWD="685";
}else if($role=="teacher"){
    $myID="teacher";
    $myPWD="123";
}else if($role=="student"){
    $myID="student";
    $myPWD="456";
}


$id=$_POST["id"];
$pwd=$_POST["pwd"];

if($role=="student"){
    if(($myID==$id)&&($myPWD==$pwd)){
        $_SESSION["login"]="Yes";
        header("Location:0316_A1103327_student.php");
    }else{
        $_SESSION["login"]="No";
        header("Location:0316_A1103327_fail.php");
    }
}else if($role=="teacher"){
    if(($myID==$id)&&($myPWD==$pwd)){
        $_SESSION["login"]="Yes";
        header("Location:0316_A1103327_teacher.php");
    }else{
        $_SESSION["login"]="No";
        header("Location:0316_A1103327_fail.php");
    }
}else if($role=="principal"){
    if(($myID==$id)&&($myPWD==$pwd)){
        $_SESSION["login"]="Yes";
        header("Location:0316_A1103327_principal.php");
    }else{
        $_SESSION["login"]="No";
        header("Location:0316_A1103327_fail.php");
    }
}

?>