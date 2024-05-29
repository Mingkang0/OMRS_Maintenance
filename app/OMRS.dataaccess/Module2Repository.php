<?php

class Module2Repository
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function insertForm($office, $venue, $date, $capacity, $vacancy, $speakerName, $MCcertificate, $applicantID)
    {
        // Insert the form data into the database
        $stmt = $this->db->prepare("INSERT INTO marriagecourse (office, Venue, Date, Capacity, Vacancy, SpeakerName, MCCertificate) VALUES (:office, :venue, :date, :capacity, :vacancy, :speakerName, :MCcertificate)");
        $stmt->bindParam(':office', $office);
        $stmt->bindParam(':venue', $venue);
        $stmt->bindParam(':date', $date);
        $stmt->bindParam(':capacity', $capacity);
        $stmt->bindParam(':vacancy', $vacancy);
        $stmt->bindParam(':speakerName', $speakerName);
        $stmt->bindParam(':MCcertificate', $MCcertificate);

        if ($stmt->execute()) {
            echo "Form data inserted successfully!";
        } else {
            echo "Error inserting form data: " . $stmt->errorInfo()[2];
        }

        $stmt->closeCursor();

        // Retrieve the applicant data
        $applicantData = $this->getApplicantData($applicantID);

        // Redirect to the ApplicantSubmitProofOfPayment.php page with query parameters
        header("Location: ApplicantSubmitProofOfPayment.php?appName=" . urlencode($applicantData['appName']) . "&applicantIC=" . urlencode($applicantData['applicantIC']));
        exit();
    }

    public function getMarriageCourseData($office = null)
    {
        if ($office) {
            // Filter the data based on the selected office
            $stmt = $this->db->prepare("SELECT * FROM marriagecourse WHERE office = ?");
            $stmt->execute([$office]);
        } else {
            // Retrieve all the data
            $stmt = $this->db->query("SELECT * FROM marriagecourse");
        }

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getApplicantData($applicantID)
    {
        $query = "SELECT appName, applicantIC FROM applicantinfo WHERE applicantID = :applicantID";

        // Prepare the statement
        $statement = $this->db->prepare($query);

        // Bind the applicantID parameter
        $statement->bindParam(':applicantID', $applicantID);

        // Execute the query
        $statement->execute();

        // Fetch the result
        $result = $statement->fetch(PDO::FETCH_ASSOC);

        // Retrieve the appName and applicantIC values
        $appName = $result['appName'];
        $applicantIC = $result['applicantIC'];

        // Return the retrieved data
        return array('appName' => $appName, 'applicantIC' => $applicantIC);
    }


    public function searchPartner($icNum)
    {
        $sql = "SELECT * FROM accountinfo WHERE Applicant_IC = '$icNum'";
        $result = $this->db->query($sql);

        if ($result->num_rows > 0) {
            // Display retrieved information in the table
            return $result->fetch(PDO::FETCH_ASSOC);
        }

        return null;
    }
}
