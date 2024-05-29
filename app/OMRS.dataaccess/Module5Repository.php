<?php

class Module5Repository
{

  private $connect;

  //Registration controller's constructor
  public function __construct($database)
  {
    $this->connect = $database;
  }

  function insertincentiveformdatawithresidencyletter(
    $sjt,
    $sjn,
    $sja,
    $ss,
    $sb,
    $sna,
    $ijt,
    $ijn,
    $ija,
    $is,
    $ib,
    $ina,
    $crn,
    $cri,
    $cra,
    $crr,
    $crp,
    $file1,
    $file2,
    $file3,
    $file4
  ) {
    session_start();

    $ic = $_SESSION['currentUserIC'];

    $uniqid = uniqid();

    // Insert into special incentive table
    $query = $this->connect->prepare("INSERT INTO specialincentive(SI_ID,SI_ApplicantID, SI_GFID, SI_BFID, SI_CRFID, SI_SDID,SI_Status) VALUES (?, ?, ?, ?, ?, ?,?)");
    $query->execute([$uniqid, $ic, $uniqid, $uniqid, $uniqid, $uniqid, "Pending"]);

    // Insert into groom table for the suami data
    $query = $this->connect->prepare("INSERT INTO groomform(GF_ID ,GF_JobType ,GF_JobName, GF_JobAddress, GF_Salary,GF_Bank ,GF_AccNumber) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $query->execute([$uniqid, $sjt, $sjn, $sja, $ss, $sb, $sna]);

    // Insert into bride table for the isteri data
    $query = $this->connect->prepare("INSERT INTO brideform(BF_ID ,BF_JobType ,BF_JobName, BF_JobAddress, BF_Salary,BF_Bank ,BF_AccNumber) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $query->execute([$uniqid, $ijt, $ijn, $ija, $is, $ib, $ina]);

    // Insert into close relative table for the close relative data
    $query = $this->connect->prepare("INSERT INTO closerelativeform(CRF_ID  ,CRF_Name ,CRF_ICNumber, CRF_Address, CRF_Relationship	,CRF_PhoneNumber) VALUES (?, ?, ?, ?, ?, ?)");
    $query->execute([$uniqid, $crn, $cri, $cra, $crr, $crp]);

    // Insert into supporting document table for the supporting document data
    // Read the contents of the files
    $file1Data = file_get_contents($_FILES['file1']['tmp_name']);
    $file2Data = file_get_contents($_FILES['file2']['tmp_name']);
    $file3Data = file_get_contents($_FILES['file3']['tmp_name']);
    $file4Data = !empty($file4) && $file4['error'] !== UPLOAD_ERR_NO_FILE ? file_get_contents($file4['tmp_name']) : null;

    // Insert into supporting document table for the supporting document data
    $query = $this->connect->prepare("INSERT INTO supportingdocument (SD_ID, SD_PaySlip1, SD_PaySlip2, SD_PaySlip3, SD_ResidencyLetter) VALUES (?, ?, ?, ?, ?)");
    $query->execute([$uniqid, $file1Data, $file2Data, $file3Data, $file4Data]);
  }


  function insertincentiveformdata(
    $sjt,
    $sjn,
    $sja,
    $ss,
    $sb,
    $sna,
    $ijt,
    $ijn,
    $ija,
    $is,
    $ib,
    $ina,
    $crn,
    $cri,
    $cra,
    $crr,
    $crp,
    $file1,
    $file2,
    $file3
  ) {

    session_start();

    $ic = $_SESSION['currentUserIC'];

    $uniqid = uniqid();


    // Insert into special incentive table
    $query = $this->connect->prepare("INSERT INTO specialincentive(SI_ID,SI_ApplicantID, SI_GFID, SI_BFID, SI_CRFID, SI_SDID,SI_Status) VALUES (?, ?, ?, ?, ?, ?,?)");
    $query->execute([$uniqid, $ic, $uniqid, $uniqid, $uniqid, $uniqid, "Pending"]);

    // Insert into groom table for the suami data
    $query = $this->connect->prepare("INSERT INTO groomform(GF_ID ,GF_JobType ,GF_JobName, GF_JobAddress, GF_Salary,GF_Bank ,GF_AccNumber) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $query->execute([$uniqid, $sjt, $sjn, $sja, $ss, $sb, $sna]);

    // Insert into bride table for the isteri data
    $query = $this->connect->prepare("INSERT INTO brideform(BF_ID ,BF_JobType ,BF_JobName, BF_JobAddress, BF_Salary,BF_Bank ,BF_AccNumber) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $query->execute([$uniqid, $ijt, $ijn, $ija, $is, $ib, $ina]);

    // Insert into close relative table for the close relative data
    $query = $this->connect->prepare("INSERT INTO closerelativeform(CRF_ID  ,CRF_Name ,CRF_ICNumber, CRF_Address, CRF_Relationship	,CRF_PhoneNumber) VALUES (?, ?, ?, ?, ?, ?)");
    $query->execute([$uniqid, $crn, $cri, $cra, $crr, $crp]);

    // Insert into supporting document table for the supporting document data
    // Read the contents of the files
    $file1Data = file_get_contents($_FILES['file1']['tmp_name']);
    $file2Data = file_get_contents($_FILES['file2']['tmp_name']);
    $file3Data = file_get_contents($_FILES['file3']['tmp_name']);

    // Insert into supporting document table for the supporting document data
    $query = $this->connect->prepare("INSERT INTO supportingdocument (SD_ID, SD_PaySlip1, SD_PaySlip2, SD_PaySlip3) VALUES (?, ?, ?, ?)");
    $query->execute([$uniqid, $file1Data, $file2Data, $file3Data]);
  }

  public function getAllApplicantIDs()
  {
      $query = $this->connect->prepare("SELECT SI_ApplicantID FROM specialincentive WHERE SI_Status='Pending' ");
      $query->execute();
      $applicantIDs = $query->fetchAll(PDO::FETCH_COLUMN);
      return $applicantIDs;
  }

  // Inside the Module5Repository class

  public function getApplicantData($applicantID) {
    $query = "SELECT *
    FROM specialincentive
    JOIN groomform ON specialincentive.SI_GFID = groomform.GF_ID
    JOIN brideform ON specialincentive.SI_BFID = brideform.BF_ID
    JOIN closerelativeform ON specialincentive.SI_CRFID = closerelativeform.CRF_ID
    JOIN supportingdocument ON specialincentive.SI_SDID = supportingdocument.SD_ID
    WHERE specialincentive.SI_ApplicantID = :applicantID";
    $stmt = $this->connect->prepare($query);
    $stmt->bindParam(':applicantID', $applicantID);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
  
    return $result;
  }
  
  public function updateStatus($applicantID, $status)
    {
        // Update the status in the database for the specified applicant ID
        $query = "UPDATE specialincentive SET SI_Status = :status WHERE SI_ApplicantID = :applicantID";
        $stmt = $this->connect->prepare($query);
        $stmt->bindParam(':status', $status);
        $stmt->bindParam(':applicantID', $applicantID);
        $stmt->execute();
    }

}
