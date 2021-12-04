<?php
ob_start();
$xml = new DOMDocument("1.0", "UTF-8");
class user
{
    private $fname;
    private  $lname;
    function setFname($fname)
    {
        $this->fname = $fname;
    }

    function setLname($lname)
    {
        $this->lname = $lname;
    }

    function setEmail($email)
    {
        $this->email = $email;
    }

    function setPassword($password)
    {
        $this->password = $password;
    }
}


function checkEandP()
{
    global $xml;
    $count = 0;
    $xml->load("../Database/user.xml");
    $emails = $xml->getElementsByTagName('email');
    $passwords = $xml->getElementsByTagName('password');

    if (isset($_POST['login'])) {
        for ($i = 0; $i < $emails->length; $i++) {

            if (strcasecmp($_POST['email'], $emails[$i]->nodeValue) == 0) {
                if ($_POST['password'] == $passwords[$i]->nodeValue) {
                    logIn();
                    return true;
                }
            }
            $count = $count + 1;
        }
        echo "<div class =\"alert\"> 
        Email or password incorrect
       
            </div>";
    }
}


function logIn()
{
    header('Location: signOut.php');
    global $xml;
    $count = 0;
    $_SESSION['accExist'] = false;
    $xml->load("../Database/user.xml");
    $fname = $xml->getElementsByTagName('firstName');
    $lname = $xml->getElementsByTagName('lastName');
    $emails = $xml->getElementsByTagName('email');
    for ($i = 0; $i < $emails->length; $i++) {
        if (strcasecmp($_POST['email'], "admin@admin.com") == 0) {
            header("Location: ../p7-p12/backstore/backStore.php");
            $_SESSION['admin'] = true;
        }
        if (strcasecmp($_POST['email'], $emails[$i]->nodeValue) == 0) {
            $_SESSION['first'] = $fname[$count]->nodeValue;
            $_SESSION['last'] = $lname[$count]->nodeValue;
            header("Location: ../index.php");
            $_SESSION['admin'] = false;
        }
        $count = $count + 1;
    }
}
