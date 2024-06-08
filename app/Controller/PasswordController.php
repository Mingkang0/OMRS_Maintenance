<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '.././vendor/autoload.php';
    class PasswordController
    {
        private $connect;
        private $Module1Repository;

        public function __construct($Module1Repository, $db) 
        {
            $this->Module1Repository = $Module1Repository;
            $this->connect = $db;
        }

            //Lupa Kata Laluan
            function passwordFunction($userIC, $userEmail,$role)
            {
                if($role == "Pemohon")
                {
                    $query = "SELECT * FROM UserAccount ua 
                    INNER JOIN ApplicantInfo si ON ua.userIC = si.Applicant_IC 
                    WHERE ua.userIC = :ic AND si.appEmail = :email";
                    $query = $this->connect->prepare($query);
                    $query->bindParam(':ic', $userIC);
                    $query->bindParam(':email', $userEmail);
                }
                else if($role == "Kakitangan")
                {
                    $query = "SELECT * FROM UserAccount ua 
                    INNER JOIN StaffInfo si ON ua.userIC = si.Staff_Id 
                    WHERE ua.userIC = :ic AND si.staffEmail = :email";
                    $query = $this->connect->prepare($query);
                    $query->bindParam(':ic', $userIC);
                    $query->bindParam(':email', $userEmail);
                }
                else if($role == "Admin")
                {
                    $query = "SELECT * FROM UserAccount ua 
                    INNER JOIN AdminInfo si ON ua.userIC = si.Admin_Id
                    WHERE ua.userIC = :ic AND si.adminEmail = :email";
                    $query = $this->connect->prepare($query);
                    $query->bindParam(':ic', $userIC);
                    $query->bindParam(':email', $userEmail);
        
                }
                if($query->execute()){
                if ($query->rowCount() > 0) {
                // Generate a random password
                $newPassword = $this->generateRandomPassword();
        
                //Update applicant password in the database
                $updateQuery = "UPDATE UserAccount SET userPassword = :password WHERE userIC = :ic";
                $stmt = $this->connect->prepare($updateQuery);
                $stmt->bindParam(':password', $newPassword);
                $stmt->bindParam(':ic', $userIC);
                $stmt->execute();            
                // Send new password to the applicant email   
                $emailTitle = 'Kata Laluan Baharu';
                $emailMessage = 'Kata laluan baharu anda adalah seperti yang tertera: ' . $newPassword;
        
                $mail = new PHPMailer(true);
        
                try {               
                    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                    $mail->isSMTP();                                            //Send using SMTP
                    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                    $mail->Username   = 'shomingkang@gmail.com';                     //SMTP username
                    $mail->Password   = 'sbim zjqt smqu wltc';                               //SMTP password
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
                    $mail->SMTPDebug  = 1;  
                    $mail->SMTPAuth   = TRUE;
                    $mail->SMTPSecure = "tls";

                    //Recipients
                    $mail->setFrom('shomingkang@gmail.com', 'Mailer');
                    $mail->addAddress($userEmail);     //Add a recipient
        
                    //Content
                    $mail->isHTML(true);                                  //Set email format to HTML
                    $mail->Subject = $emailTitle;
                    $mail->Body    = $emailMessage;
        
                    $mail->send();
                    echo 'Sila lihat e-mel anda. Kata laluan telah dihantar ke e-mel anda.';
                } catch (Exception $e) {
                    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                }
        
                } else {
                echo 'E-mel anda tiada dalam sistem. Sila isi e-mel anda yang SAH.';
                }
            }
        }



        //generate a random password
        function generateRandomPassword()
         {
            $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
            $randomPassword = ' ';
            $length = 20;

            for ($i = 0; $i < $length; $i++) 
            {
                $randomPassword .= $characters[rand(0, strlen($characters) - 1)];
            }
                return $randomPassword;
        }  
        //end Lupa Kata Laluan
    }
?>