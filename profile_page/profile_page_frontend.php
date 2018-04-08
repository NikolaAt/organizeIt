<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="profile_page.css">
    <link rel='shortcut icon' type='image/x-icon' href='../favicon.ico'/>
</head>
<body>
<a id="homepageRedir" href="../index.php?resetid=true" onclick="resetID()">Home page</a>
<div id="loginMessage"><?=$_SESSION['loginMessage']?></div>
<div id="savedChanges"><?=$_SESSION['saveChanges']?></div>

<div id="tasks">
    <form method="post" id="information">
        <textarea form="information" name="tasks" "><?=htmlspecialchars($taskVar);?></textarea>
        <div>
            <button class="saveButton" type="submit" name="submit">Save Tasks</button>
        </div>
    </form>

</div>
<div id="tasks2">
    <form method="post" id="information2">
        <textarea form="information2" name="tasks2" "><?=htmlspecialchars($taskVar2);?></textarea>
        <div>
            <button class="saveButton" type="submit" name="submit2">Save Tasks 2</button>
        </div>
    </form>

</div>
<div id="mediaText">Connect your social media</div>
<div>
    <a target="_blank" href="https://facebook.com" ><div id="facePic" class="socialMediaPic"></div></a>
    <a target="_blank" href="https://mail.google.com"  ><div id="gmailPic" class="socialMediaPic"></div></a>
    <a target="_blank" href="https://www.instagram.com/"  ><div id="instaPic" class="socialMediaPic"></div></a>
    <a target="_blank" href="https://www.linkedin.com/"  ><div id="linkedPic" class="socialMediaPic"></div></a>
    <a target="_blank" href="https://twitter.com/"  ><div id="twitPic" class="socialMediaPic"></div></a>
    <a target="_blank" href="https://vine.co/"  ><div id="vinePic" class="socialMediaPic"></div></a>
    <a target="_blank" href="https://www.youtube.com/"  ><div id="youtubePic" class="socialMediaPic"></div></a>
</div>


</body>
</html>