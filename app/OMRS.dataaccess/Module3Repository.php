<?php

/*class Module3Repository
{
    private $connect;

    //connecct database
    public function __construct($db) 
    {
        $this->db= $db;
    }

    //Add marriage type info
    public function insertform( $Fee_ID, $Application_Slip, $ApplicantPartner_IC, $Borang_HIV, $Surat_Pemastautinan, $ApplicantPartner_Photo )
    {
    $stmt = $this->db->prepare("INSERT INTO voluntarymarriage (Fee_ID, Application_Slip, ApplicantPartner_IC, Borang_HIV, Surat_Pemastautinan, ApplicantPartner_Photo) VALUES (:fee_ID, :application_Slip, :applicantPartner_IC, :borang_HIV, :surat_Pemastautinan, :applicantPartner_Photo)");
    $stmt->bindParam(':fee_ID', $Fee_ID);
    $stmt->bindParam(':applicant_Slip', $Application_Slip);
    $stmt->bindParam(':applicantPartner_IC', $ApplicantPartner_IC);
    $stmt->bindParam(':borang_HIV', $Borang_HIV);
    $stmt->bindParam(':surat_Pemastautinan', $Surat_Pemastautinan);
    $stmt->bindParam(':applicantPartner_Photo', $ApplicantPartner_Photo);

    if ($stmt->execute()) {
        echo "Form data inserted successfully!";
    } else {
        echo "Error inserting form data: " . $stmt->errorInfo()[2];
    }

    $stmt->closeCursor();

    }
    public function getvoluntarymarriageData()
    {
          //retrieve data
         $stmt = $this->db->query("SELECT * FROM voluntarymarriage");
        

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
       //Add marriage type info
      /*public function insertForm( $Fee_ID, $ApplicantPartner_IC,  $ApplicantPartner_Passport,  $Surat_Perakuan, $Akuan_Sumpah_Berkanun, $Surat_Pemastautinan)
      {
      $stmt = $this->db->prepare("INSERT INTO unauthorizedmarriage (Fee_ID, ApplicantPartner_IC, ApplicantPartner_Passport, Surat_Perakuan, Akuan_Sumpah_Berkanun, Surat_Pemastautinan) VALUES (:fee_ID, :applicantPartner_IC, :applicantPartner_Passport,:surat_Perakuan, :akuan_Sumpah_Berkanun, :surat_Pemastautinan)");
      $stmt->bindParam(':fee_ID', $Fee_ID);
      $stmt->bindParam(':applicantPartner_IC', $ApplicantPartner_IC);
      $stmt->bindParam(':applicantPartner_Passport', $ApplicantPartner_Passport);
      $stmt->bindParam(':surat_Perakuan', $Surat_Perakuan);
      $stmt->bindParam(':akuan_Sumpah_Berkanun', $Akuan_Sumpah_Berkanun);
      $stmt->bindParam(':surat_Pemastautinan', $Surat_Pemastautinan);
    
  
      if ($stmt->execute()) {
          echo "Form data inserted successfully!";
      } else {
          echo "Error inserting form data: " . $stmt->errorInfo()[2];
      }
  
      $stmt->closeCursor();
  
      }
      public function getunauthorizedmarriageData()
      {
          //retrieve data
           $stmt = $this->db->query("SELECT * FROM unauthorizedmarriage");
          
  
          return $stmt->fetchAll(PDO::FETCH_ASSOC);
      }
    
           //Add marriage cert info
           public function Insertform($marriage_cert_ID, $VoluntaryMarriage_ID, $UnauthorizedMarriage_ID, $Fee_id, $applied_date, $payment_proof_status)
           {
           $stmt = $this->db->prepare("INSERT INTO marriagecert (marriage_cert_ID, VoluntaryMarriage_ID, UnauthorizedMarriage_ID, Fee_id, applied_date, payment_proof_status) VALUES (:marriage_cert_ID, :VoluntaryMarriage_ID, :UnauthorizedMarriage_ID, :Fee_id, :applied_date, :payment_proof_status)");
           $stmt->bindParam(':marriage_cert_ID', $marriage_cert_ID);
           $stmt->bindParam(':VoluntaryMarriage_ID', $VoluntaryMarriage_ID);
           $stmt->bindParam(':UnauthorizedMarriage_ID', $UnauthorizedMarriage_ID);
           $stmt->bindParam(':Fee_id', $Fee_id);
           $stmt->bindParam(':applied_date', $applied_date);
           $stmt->bindParam(':payment_proof_status', $payment_proof_status);
         
       
           if ($stmt->execute()) {
               echo "Form data inserted successfully!";
           } else {
               echo "Error inserting form data: " . $stmt->errorInfo()[2];
           }
       
           $stmt->closeCursor();
       
           }
           public function getapplystatusData()
           {
               //retrieve data
                $stmt = $this->db->query("SELECT * FROM marriagecert");
               
       
               return $stmt->fetchAll(PDO::FETCH_ASSOC);
           }
        }*/
   
?>