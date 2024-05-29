<?php
class LoginController
{
    private $Module1Repository;

    public function __construct($Module1Repository)
    {
        $this->Module1Repository = $Module1Repository;  
    }

    // Applicant login function
    public function loginFunction($userIC, $userPassword, $role)
    {
        $loginResult = $this->Module1Repository->loginAcc($userIC, $userPassword, $role);
        $info = $this->Module1Repository->getInfo($userIC, $role);
        $encodedInfo = urlencode(serialize($info));
        if ($loginResult && $role == "Pemohon") 
        {
            echo '<script>';
            echo 'alert("Berjaya Log Masuk");';
            echo 'window.location = "../app/ApplicationLayer/ApplicantView/module1/ApplicantViewProfilePage.php?returnProfileInfo='.$encodedInfo.'";';
            echo '</script>';
        } 
        else if ($loginResult && $role == "Kakitangan") 
        {
            echo '<script>';
            echo 'alert("Berjaya Log Masuk");';
            echo 'window.location = "../app/ApplicationLayer/StaffView/module1/StaffViewProfilePage.php?returnProfileInfo='.$encodedInfo.'";';
            echo '</script>';
        }
        else if ($loginResult && $role == "Admin") 
        {
            echo '<script>';
            echo 'alert("Berjaya Log Masuk");';
            echo 'window.location = "../app/ApplicationLayer/AdminView/AdminViewProfilePage.php?returnProfileInfo='.$encodedInfo.'";';
            echo '</script>';
        }
        else
        {
            echo '<script>';
            echo 'alert("Peranan tidak sah atau kata laluan salah");';
            echo 'window.location = "../app/ApplicationLayer/LoginPage.php";';
            echo '</script>';
        }
    }
}
?>
