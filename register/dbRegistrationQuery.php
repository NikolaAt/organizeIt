<?php

require_once "../app.php";


try {
    $dataUsers = $db->query('SELECT username FROM users', PDO::FETCH_ASSOC);
    $arrUsernames = [];
    foreach ($dataUsers as $value){
        $arrUsernames[]=$value['username'];
    }
    if (in_array($username ,$arrUsernames)){
        $_SESSION['messageFormError']= "User with this username Already exist. Please choose new one!";

    }else{
        $dataEmails = $db->query('SELECT email FROM users', PDO::FETCH_ASSOC);
        $arrEmails = [];
        foreach ($dataEmails as $value){
            $arrEmails[]=$value['email'];
        }
        if (in_array($email ,$arrEmails)){
            $_SESSION['messageFormError']= "User with this email Already exist. Please choose new one!";

        }else{
            $query = "INSERT INTO `users` (
                    `first_name`, 
                    `last_name`, 
                    `username`, 
                    `password`, 
                    `email`,
                    birthdate) 
                  VALUES (
                    ?,
                    ?,
                    ?, 
                    ?, 
                    ?,
                    ?);";

            $stmt = $db->prepare($query);
            if ($stmt->execute([$firstName, $lastName, $username, $password, $email, $birthDate])) {
                $_SESSION['message']= "Successful registration";

                header("Location: ../index.php");

            } else {
                $_SESSION['messageFormError']= "Unsuccessful registration !!!";
            }
        }
    }

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
}