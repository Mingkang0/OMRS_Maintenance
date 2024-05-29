<?php
    class LoginController
    {
        private $Module1Repository;

        public function __construct($Module1Repository)
        {
            $this->Module1Repository = $Module1Repository;  
        }

        // Applicant login function
        public function loginApplicantFunction($userIC, $userPassword)
        {
            $loginResult = $this->Module1Repository->loginApplicantAcc($userIC, $userPassword);

            if ($loginResult) 
            {
                ?>
                <script>
                    alert("Berjaya Log Masuk");
                    //window.location = "../app/ApplicationLayer/ApplicantView/module1/homepage.php";
                    window.location = "../app/ApplicationLayer/ApplicantView/module1/ApplicantViewProfilePage.php";
                </script>
                <?php 
                //header("../../../../public/Facade.php?action=viewProfile&from=view");
            } 
            else 
            {
                ?>
                <script>
                    alert("No Kad Pengenalan atau kata laluan anda TIDAK SAH");
                    window.location = "../app/ApplicationLayer/ApplicantView/module1/ApplicantLoginPage.php";
                </script>
                <?php
            }
        }

         //Staff login function
        public function loginStaffFunction($userIC, $userPassword)
        {
            //Send the input to Module1Repository to verify the user 
            if($this->Module1Repository->loginStaffAcc($userIC, $userPassword))
            {
                ?>
                <script>
                    alert("Berjaya Log Masuk");
                    //window.location = "../app/ApplicationLayer/StaffView/module1/homepage.php";
                    window.location = "../app/ApplicationLayer/StaffView/module1/StaffViewProfilePage.php";
                </script>
                <?php 
                header("../../../../public/Facade.php?action=viewProfile&from=view");
            }
            else
            {
                //If the user not exists, it will show error message 
            ?>
                <script>
                    alert("No Kad Pengenalan atau kata laluan anda TIDAK SAH");
                    window.location = "../app/ApplicationLayer/StaffView/module1/StaffLoginPage.php";
                </script>
            <?php
            }
        }

         //Admin login function
        public function loginAdminFunction($userIC, $userPassword)
        {
            //Send the input to Module1Repository to verify the user 
            if($this->Module1Repository->loginAdminAcc($userIC, $userPassword))
            {
            ?>
                <script>
                    alert("Berjaya Masuk");
                    //window.location = "../app/ApplicationLayer/AdminView/homepage.php";
                    window.location = "../app/ApplicationLayer/AdminView/StaffRegFormPage.php";
                </script>
            <?php 
                //header("Location: Facade.php?action=viewProfile&from=view");
            }
            else
            {
                //If the user not exists, it will show error message 
            ?>
                <script>
                    alert("No Kad Pengenalan atau kata laluan anda TIDAK SAH");
                    window.location = "../app/ApplicationLayer/AdminView/AdminLoginPage.php";
                </script>
            <?php
            }
        }  
    }
?>