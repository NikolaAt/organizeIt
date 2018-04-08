<?php




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>organizeIt</title>
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel='shortcut icon' type='image/x-icon' href='favicon.ico'/>
</head>
<body>
<h1 id="welcome" class="header">Welcome to OrganizeIt</h1>
<h2 id="notebook" class="header">Your new one, digital notebook!</h2>
<?php if(isset($_SESSION['message'])):?>

    <div id="message"><?= $_SESSION['message']?></div>
    <?php $_SESSION['message']=''; ?>
<?php endif;?>

<div id="twobuttons">
    <a href="register/form.php"><div id="linkForm">Register</div></a>
    <a href="login/login.php"><div id="linkLogin">Login</div></button></a>

</div>
<div id="quotes"><?=$Quotes?></div>



</body>
</html>