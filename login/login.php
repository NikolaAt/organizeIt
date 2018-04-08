<?php

require_once "../app.php";
$_SESSION['loginMessage']='';
$_SESSION['saveChanges']='';
$_SESSION['saveChanges2']='';

if (isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];



    try {

        $query = "SELECT * FROM users WHERE username = ?";
        $stmt = $db->prepare($query);
        if ($stmt->execute([$username])){
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user){

                $passwordHash = $user['password'];
                if (password_verify($password,$passwordHash)){
                    $_SESSION['id']=$user['id'];
                    $hours = date('G');
                    if ($hours>=10 && $hours<=19 ){
                        $dayCOnd = "day";
                    }elseif ($hours >19 || $hours<=3){
                        $dayCOnd="evening";
                    }elseif($hours>3 && $hours<10){
                        $dayCOnd="morning";
                    }else{
                        $dayCOnd="";
                    }
                    $_SESSION['loginMessage']= "Hello ".htmlspecialchars($user['username'])." , have a good ". $dayCOnd;
                    $_SESSION['message']='';
                    header("Location: ../profile_page/profile_page.php");

                    exit;
                }else{
                    $_SESSION['loginMessage']="Wrong password!";
                }
            }else{

                $_SESSION['loginMessage']="No such nickname!";
            }

        }else{
            $_SESSION['loginMessage']="Unsuccessful registration";
        }



    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
    }
}




include "login_frontend.php";