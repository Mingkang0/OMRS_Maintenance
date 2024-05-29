<?php
    class RegistrationController
    {
        private $Module1Repository;

        public function __construct($Module1Repository)
        {
            $this->Module1Repository = $Module1Repository;  
        }
        
        //applicant register function   
        public function registerApplicantFunction($userIC, $appName, $userType, $appGender, $appPhoneNo, $appAddress, $appEmail, $userPassword, $appRace, $appNationality, $appEduLevel, $appOKUStatus, $appStatus)
        {
            //call createUserAcc function in Module1Repository (table UserAccount)  
            $UserAcc_Id = $this->Module1Repository->createUserAcc($userIC, $userPassword, $userType);

            //(dlm table ApplicantInfo)
            $this->addApplicantInfo($userIC, $UserAcc_Id, $appName, $appGender, $appPhoneNo, $appAddress, $appEmail, $appRace, $appNationality, $appEduLevel, $appOKUStatus, $appStatus);
        }

        
        public function addApplicantInfo($userIC, $UserAcc_Id, $appName, $appGender, $appPhoneNo, $appAddress, $appEmail, $appRace, $appNationality, $appEduLevel, $appOKUStatus, $appStatus)
        {
            //call addApplicantInfo function in Module1Repository (table ApplicantInfo)
            $this->Module1Repository->addApplicantInfo($userIC, $UserAcc_Id, $appName, $appGender, $appPhoneNo, $appAddress, $appEmail, $appRace, $appNationality, $appEduLevel, $appOKUStatus, $appStatus);
        
            ?>
                <script>
                    alert("Akaun anda telah berjaya didaftar");
                    window.location = "../app/ApplicationLayer/ApplicantView/module1/ApplicantLoginPage.php";
                </script>
            <?php
        }
        //end about Applicant Registration   

        //admin register staff account
        public function staffRegisterFunction($userIC, $staffName, $staffGender, $staffDepartmentName, $userType, $staffEmail, $staffPhoneNo, $userPassword)
        {
            //security purpose (Admin pon tak blh tgk password user kat mysql)
            //$hashed_password = password_hash($userPassword, PASSWORD_DEFAULT);

            //call createUserAcc function in Module1Repository (table UserAccount)
            $UserAcc_Id = $this->Module1Repository->createUserAcc($userIC, $userPassword, $userType);

            //(dlm table StaffInfo)
            $this->addStaffInfo($userIC, $UserAcc_Id, $staffName, $staffGender, $staffDepartmentName, $staffEmail, $staffPhoneNo);
        }

        public function addStaffInfo($userIC, $UserAcc_Id, $staffName, $staffGender, $staffDepartmentName, $staffEmail, $staffPhoneNo)
        {
            //call staffInfo function in Module1Repository (table StaffInfo) 
            $this->Module1Repository->addStaffInfo($userIC, $UserAcc_Id, $staffName, $staffGender, $staffDepartmentName, $staffEmail, $staffPhoneNo);
        
            ?>
                <script>
                    alert("Akaun telah berjaya didaftar!");
                    window.location = "../app/ApplicationLayer/AdminView/StaffRegFormPage.php";
                </script>
            <?php
        }
        //end about Staff Registration  
    }
?>