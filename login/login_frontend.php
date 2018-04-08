


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel='shortcut icon' type='image/x-icon' href='../favicon.ico'/>
</head>
<body>
<a id="homepageRedir" href="../index.php">Home page</a>
<form id="form" method="post">
    <div id="loginMessage"><?=$_SESSION['loginMessage']?></div>

    <div>

        <input type="text" name="username" placeholder="Username" id="username" required >
    </div>
    <div>

        <input type="password" name="password" placeholder="Password" id="password" required >
    </div>
    <div>
        <button type="submit" name="login">Login</button>
        <button type="reset" name="reset">Reset</button>
    </div>
</form>


</body>
</html>