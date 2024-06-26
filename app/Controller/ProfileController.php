<?php
    class ProfileController
    {
        private $Module1Repository;

        public function __construct($Module1Repository)
        {
            $this->Module1Repository = $Module1Repository;  
        }

        //view profile function 
        public function viewProfileFunction($from)
        {
            $userType = $_SESSION['currentUserType'];
            $userIC = $_SESSION['currentUserIC'];
            $userID = $_SESSION['currentUserID'];

            if($userType == "Pemohon")
            {
                $Applicant_IC = $_SESSION['currentUserIC'];
                $appProfileInfo = $this->Module1Repository->getApplicantProfileInfo($userIC,$userID); //returnProfileInfo

                if($from == 'view')
                {
                    header('Location: ../app/ApplicationLayer/ApplicantView/module1/ApplicantViewProfilePage.php?returnProfileInfo='. urlencode(serialize($appProfileInfo)));
                }
                else if($from == 'edit')
                {
                    header('Location: ../app/ApplicationLayer/ApplicantView/module1/ApplicantUpdateProfilePage.php?returnProfileInfo='. urlencode(serialize($appProfileInfo)));
                }
                else if($from == 'change-password')
                {
                    header('Location: ../app/ApplicationLayer/ApplicantView/module1/ApplicantChangePasswordPage.php?returnProfileInfo='. urlencode(serialize($appProfileInfo)));
                }
            }
            else if($userType == "Kakitangan")
            {
                $Staff_Id = $_SESSION['currentUserIC'];
                $staffProfileInfo = $this->Module1Repository->getStaffProfileInfo($Staff_Id);

                if($from == 'view')
                {
                    header('Location: ../app/ApplicationLayer/StaffView/module1/StaffViewProfilePage.php?returnProfileInfo='. urlencode(serialize($staffProfileInfo)));
                }
                else if($from == 'edit')
                {
                    header('Location: ../app/ApplicationLayer/StaffView/module1/StaffUpdateProfilePage.php?returnProfileInfo='. urlencode(serialize($staffProfileInfo)));
                }
                else if($from == 'change-password')
                {
                    header('Location: ../app/ApplicationLayer/StaffView/module1/StaffChangePasswordPage.php?returnProfileInfo='. urlencode(serialize($appProfileInfo)));
                }
            }
            else if($userType == "Admin")
            {
                $Admin_Id = $_SESSION['currentUserIC'];
                $adminProfileInfo = $this->Module1Repository->getAdminProfileInfo($Admin_Id);

                if($from == 'view')
                {
                    header('Location: ../app/ApplicationLayer/AdminView/AdminViewProfilePage.php?returnProfileInfo='. urlencode(serialize($adminProfileInfo)));
                }
                else if($from == 'edit')
                {
                    header('Location: ../app/ApplicationLayer/AdminView/AdminUpdateProfilePage.php?returnProfileInfo='. urlencode(serialize($adminProfileInfo)));
                }
                else if($from == 'change-password')
                {
                    header('Location: ../app/ApplicationLayer/AdminView/AdminChangePasswordPage.php?returnProfileInfo='. urlencode(serialize($appProfileInfo)));
                }
                
            }
            else
            {
                echo "Maaf, sistem tidak dapat meneruskan aktiviti anda.";
            }
        }

        //Update the applicant profile data 
        public function updateAppProfileFunction($appPhoneNo, $appEmail, $appAddress, $appRace, $appNationality, $appEduLevel, $appOKUStatus, $appStatus) 
        {
            //Firstly, the updateApplicationProfileInfo will update the data in mySQL.
            if($this->Module1Repository->updateAppProfileInfo($appPhoneNo, $appEmail, $appAddress, $appRace, $appNationality, $appEduLevel, $appOKUStatus, $appStatus)){
                ?>
                    <script>
                        alert("Proses KEMASKINI anda BERJAYA.");
                    </script>
                <?php
                header("Location: ../public/Facade.php?action=viewProfile&from=view");

            }else{
                ?>
                    <script>
                        alert("Maaf, proses KEMASKINI anda TIDAK BERJAYA.");
                    </script>
                <?php                        
                header("Location: ../public/Facade.php?action=viewProfile&from=view");
            }
        }

        //Update the staff profile data 
        public function updateStaffProfileFunction($staffPhoneNo, $staffEmail) 
        {
            //Firstly, the updateApplicationProfileInfo will update the data in mySQL.
            if($this->Module1Repository->updateStaffProfileInfo($staffPhoneNo, $staffEmail)){
                ?>
                    <script>
                        alert("Proses KEMASKINI anda BERJAYA.");
                    </script>
                <?php
                
                header("Location: ../public/Facade.php?action=viewProfile&from=view");

            }else{
                ?>
                    <script>
                        alert("Maaf, proses KEMASKINI anda TIDAK BERJAYA.");
                    </script>
                <?php                        
                header("Location: ../public/Facade.php?action=viewProfile&from=view");
            } 
        }

        function ChangePasswordFunction($userPassword, $newPassword)
        {
            if ($this->Module1Repository->ChangePassword($_SESSION['currentUserType'],$_SESSION['currentUserIC'], $userPassword, $newPassword)) {
                ?>
                <script>
                    alert("Kata Laluan anda telah ditukar");
                    window.location.href = "../public/Facade.php?action=viewProfile&from=view";
                </script>
                <?php
            } else {
                ?>
                <script>
                    alert("Kata Laluan anda tidak berjaya ditukar");
                    window.location.href = "../public/Facade.php?action=viewProfile&from=view";
                </script>
                <?php
            }
        }

        //Update the admin profile data 
        public function updateAdminProfileFunction($adminPhoneNo, $adminEmail) 
        {
            //Firstly, the updateApplicationProfileInfo will update the data in mySQL.
            if($this->Module1Repository->updateAdminProfileInfo($adminPhoneNo, $adminEmail)){
                ?>
                    <script>
                        alert("Proses KEMASKINI anda BERJAYA.");
                    </script>
                <?php
                
                header("Location: ../public/Facade.php?action=viewProfile&from=view");

            }else{
                ?>
                    <script>
                        alert("Maaf, proses KEMASKINI anda TIDAK BERJAYA.");
                    </script>
                <?php
                                          
                header("Location: ../public/Facade.php?action=viewProfile&from=view");
            } 
        }
    }
?>