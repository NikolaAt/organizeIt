<?php


require_once "../app.php";
$_SESSION['message']='';
$_SESSION['messageFormError']='';

if (isset($_POST['submit']))
{
    if (!empty($_POST['firstName'])&& !empty($_POST['lastName'])&& !empty($_POST['username'])&& !empty($_POST['password'])&& !empty($_POST['confirm'])&& !empty($_POST['email'])&& !empty($_POST['birthDate']))
    {
        if ($_POST['password'] == $_POST['confirm'])
        {
            if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
            {
                //applying POST information
                $firstName = $_POST['firstName'];
                $lastName = $_POST['lastName'];
                $username = $_POST['username'];
                $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
                $email = $_POST['email'];
                $birthDate = $_POST['birthDate'];

                //date validation params
                $dateNow = date('Y-m-d');
                $dateArr =explode("-",$birthDate);
                $year = $dateArr[0];
                $month = $dateArr[1];
                $day = $dateArr[2];
                $dateNowArr = explode("-",$dateNow);
                $yearNow = $dateNowArr[0];
                $monthNow = $dateNowArr[1];
                $dayNow = $dateNowArr[2];




                if ($year == $yearNow){
                    if ($month=$monthNow){
                        if ($day <= $dayNow){
                            require_once "dbRegistrationQuery.php";
                        }else{
                            $_SESSION['messageFormError']= "Invalid birth day!";

                        }
                    }elseif($month>$monthNow){
                        $_SESSION['messageFormError']= "Invalid birth month!";
                    }elseif ($month<$monthNow){
                        require_once "dbRegistrationQuery.php";
                    }
                }elseif ($year < $yearNow){
                    require_once "dbRegistrationQuery.php";
                }elseif ($year > $yearNow){
                    $_SESSION['messageFormError']= "Invalid birth year";

                }


            }else{
                $_SESSION['messageFormError'] = "Invalid email type";
            }
        }else
        {
            $_SESSION['messageFormError'] = "Passwords mismatch";
        }
    }else{
        $_SESSION['messageFormError'] = "NULL/Zero Value not allowed !";
    }
}


include "form_frontend.php";

//        if (empty($_POST['firstName'])&&empty($_POST['lastName'])&&empty($_POST['username'])&&empty($_POST['password'])&&empty($_POST['confirm'])&&empty($_POST['email'])&&empty($_POST['birthDate']))

//date validation
/*$dateValidate = new DateTime($birthDate);
$dateNow = new DateTime('now');
$day = intval($dateValidate->format('d'));
$dayNow = intval($dateNow->format('d'));
$month = intval($dateValidate->format('m'));
$monthNow = intval($dateNow->format('m'));
$year = intval($dateValidate->format('Y'));
$yearNow = intval($dateNow->format('Y'));*/