<?php


require_once "app.php";
require_once "dbQuotes.php";

function resetID()
{
    $_SESSION['id']='';

}

if (isset($_GET['resetid'])) {
    resetID();
}

if ($_SESSION['id']!=''){
    header("Location: profile_page/profile_page.php");
}




include "home_page_frontend.php";