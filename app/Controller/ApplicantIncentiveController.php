<?php
    class ApplicantIncentiveController
    {
        private $Module5Repository;

        public function __construct($Module5Repository)
        {
            $this->Module5Repository = $Module5Repository;  
        }

        public function insertincentiveformdata(
            $sjt, $sjn, $sja, $ss, $sb, $sna,
            $ijt, $ijn, $ija, $is, $ib, $ina,
            $crn, $cri, $cra, $crr, $crp,
            $file1, $file2, $file3, $file4
        ) {
            
            // Check if the file is uploaded and not empty
            if (!empty($file4) && $file4['error'] !== UPLOAD_ERR_NO_FILE) {
                // Process $file4 here (e.g., move it to the desired location)
                // Pass the file information along with other parameters to the repository method
                $this->Module5Repository->insertincentiveformdatawithresidencyletter(
                    $sjt, $sjn, $sja, $ss, $sb, $sna,
                    $ijt, $ijn, $ija, $is, $ib, $ina,
                    $crn, $cri, $cra, $crr, $crp,
                    $file1, $file2, $file3, $file4
                );
            } else {
                // Pass the file information along with other parameters to the repository method
                $this->Module5Repository->insertincentiveformdata(
                    $sjt, $sjn, $sja, $ss, $sb, $sna,
                    $ijt, $ijn, $ija, $is, $ib, $ina,
                    $crn, $cri, $cra, $crr, $crp,
                    $file1, $file2, $file3
                );
            }

            // Redirect to the page
        header('Location: ../app/ApplicationLayer/ApplicantView/module5/ApplicantApplyPage.php');
        exit;
    }


    
    
}
