<?php

require_once "../app.php";

if (empty($_SESSION['id'])){
    header("Location: ../index.php");
    exit;
}
$personID = $_SESSION['id'];
$query = "SELECT * FROM users WHERE id=?";
$stmt = $db->prepare($query);
if ($stmt->execute([$personID])){
    $userInfo = $stmt->fetch(PDO::FETCH_ASSOC);
    $taskVar= $userInfo['tasks'];
    $taskVar2=$userInfo['tasks2'];

}else{
    echo"ne stana";
}


if (isset($_POST['submit'])){

    $sql="UPDATE users SET tasks='".$_POST['tasks']."' WHERE id='".$_SESSION['id']."'";

    if ($db->query($sql)){
        $_SESSION['saveChanges']="Successfully saved tasks";

        $taskVar = $_POST['tasks'];
    }else{
        $_SESSION['saveChanges']="Can not save tasks";
    }
}

if (isset($_POST['submit2'])){
    $sql2="UPDATE users SET tasks2='".$_POST['tasks2']."' WHERE id='".$_SESSION['id']."'";
    if ($db->query($sql2)){
        $_SESSION['saveChanges']="Successfully saved tasks2";

        $taskVar2 = $_POST['tasks2'];
    }else{
        $_SESSION['saveChanges']="Can not save tasks";
    }
}








include "profile_page_frontend.php";