<?php
require 'DB_Connection_Manager.php';

class Module4Repository
{
    private $conn;

    public function __construct()
    {
        $db = new Database();
        $this->conn = $db->connect();
    }

    public function checkRequestExistence($applicantIC, $partnerId)
    {
        $query = "SELECT Request_Id FROM Marriage_Request_Info WHERE Applicant_IC = :applicantIC AND Partner_Id = :partnerId";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':applicantIC', $applicantIC);
        $stmt->bindParam(':partnerId', $partnerId);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            return $row['Request_Id'];
        }

        return null;
    }

    public function checkPartnerExistence($partnerIC)
    {
        $query = "SELECT Partner_Id FROM PartnerInfo WHERE PartnerIC = :partnerIC";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':partnerIC', $partnerIC);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            return $row['Partner_Id'];
        }

        return null;
    }

    public function getConsultationData($requestId, $sortOption)
    {
        $sortOrder = ($sortOption == 'latest') ? 'DESC' : 'ASC';

        $query = "SELECT ConsultationApplication.*, ConsultationSession.CS_Id, ConsultationSession.CSstatus, ConsultationSession.CScreated_date 
                FROM ConsultationApplication 
                LEFT JOIN ConsultationSession ON ConsultationApplication.CA_Id = ConsultationSession.CA_Id 
                WHERE ConsultationApplication.Request_Id = :requestId 
                ORDER BY ConsultationApplication.CAdate $sortOrder";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':requestId', $requestId);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $data = [];
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $data[] = $row;
            }
            return $data;
        }

        return null;
    }

    public function processData($applications)
    {
        $CA_Id = $_GET['updateid'];
        $existingCAdetails = '';

        // Retrieve existing values from the database
        $query = "SELECT CAdetails FROM ConsultationApplication WHERE CA_Id = :CA_Id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':CA_Id', $CA_Id);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $existingCAdetails = $row['CAdetails'];
        }

        return array_merge($applications, array('existingCAdetails' => $existingCAdetails));
    }

    public function autoAssignStaff()
    {
        $staffQuery = "SELECT Staff_Id FROM Staff WHERE Staff_Id NOT IN (SELECT Staff_Id FROM Advisor)";
        $stmt = $this->conn->query($staffQuery);
        $nonAdvisorStaff = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($stmt->rowCount() > 0) {
            $query = "SELECT * FROM ConsultationApplication WHERE CAstatus = 'dihantar'";
            $stmt = $this->conn->query($query);

            if ($stmt->rowCount() > 0) {
                $totalApplications = $stmt->rowCount();
                $staffIndex = 0;

                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $staffId = $nonAdvisorStaff[$staffIndex % count($nonAdvisorStaff)]['Staff_Id'];

                    $updateQuery = "UPDATE ConsultationApplication SET Staff_Id = :staffId WHERE CA_Id = :CA_Id";
                    $updateStmt = $this->conn->prepare($updateQuery);
                    $updateStmt->bindParam(':staffId', $staffId);
                    $updateStmt->bindParam(':CA_Id', $row['CA_Id']);
                    $updateResult = $updateStmt->execute();

                    if ($updateResult) {
                        echo "Staff assigned successfully for CA_Id: {$row['CA_Id']}<br>";
                    } else {
                        echo "Failed to update staff for CA_Id: {$row['CA_Id']}<br>";
                    }

                    $staffIndex++;
                }
            } else {
                echo "No consultation applications with CAstatus 'dihantar'<br>";
            }
        } else {
            echo "No non-advisor staff available<br>";
        }
    }

    public function deleteConsultationApplication($requestId, $CA_Id)
    {
        $query = "DELETE FROM ConsultationApplication WHERE CA_Id = :CA_Id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':CA_Id', $CA_Id);
        $result = $stmt->execute();

        if ($result) {
            header('location: ApplicantConsultMainPage.php?requestId=' . $requestId);
            exit();
        } else {
            die('Error connecting to the database: ' . print_r($stmt->errorInfo(), true));
        }
    }

    public function deleteConsultationSession($requestId, $CS_Id)
    {
        $query = "DELETE FROM ConsultationSession WHERE CS_Id = :CS_Id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':CS_Id', $CS_Id);
        $result = $stmt->execute();

        if ($result) {
            header('location: ApplicantConsultMainPage.php?requestId=' . $requestId);
            exit();
        } else {
            die('Error connecting to the database: ' . print_r($stmt->errorInfo(), true));
        }
    }

    public function getSessionData($requestId, $CS_Id)
    {
        $query = "SELECT CSdate, CSplace, Staff.staff
        LEFT JOIN Staff ON ConsultationSession.Staff_Id = Staff.Staff_Id
        WHERE ConsultationSession.CS_Id = :CS_Id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':CS_Id', $CS_Id);
        $stmt->execute();
    
        if ($stmt->rowCount() > 0) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            return $row;
        }
    
        return null;
    }
    
    public function updateConsultationSession($CS_Id, $date, $place)
    {
        $query = "UPDATE ConsultationSession SET CSdate = :date, CSplace = :place WHERE CS_Id = :CS_Id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':CS_Id', $CS_Id);
        $stmt->bindParam(':date', $date);
        $stmt->bindParam(':place', $place);
        $result = $stmt->execute();
    
        if ($result) {
            header('location: ApplicantConsultMainPage.php?requestId=' . $_GET['requestId']);
            exit();
        } else {
            die('Error connecting to the database: ' . print_r($stmt->errorInfo(), true));
        }
    }
    
    public function updateConsultationApplication($CA_Id, $CAdetails)
    {
        $query = "UPDATE ConsultationApplication SET CAdetails = :CAdetails WHERE CA_Id = :CA_Id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':CA_Id', $CA_Id);
        $stmt->bindParam(':CAdetails', $CAdetails);
        $result = $stmt->execute();
    
        if ($result) {
            header('location: ApplicantConsultMainPage.php?requestId=' . $_GET['requestId']);
            exit();
        } else {
            die('Error connecting to the database: ' . print_r($stmt->errorInfo(), true));
        }
    }
}
?>    
