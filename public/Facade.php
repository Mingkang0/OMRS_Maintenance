 <?php
    session_start();
    //db file include
    require_once '../app/OMRS.dataaccess/DB_Connection_Manager.php';

    //Module 1 
    require_once '../app/OMRS.dataaccess/Module1Repository.php';
    require_once '../app/Controller/RegistrationController.php';
    require_once '../app/Controller/LoginController.php';
    require_once '../app/Controller/PasswordController.php';
    require_once '../app/Controller/ProfileController.php';

    //Module 2
    /*require_once '../app/Controller/StaffManageMarriageCourseRequestController.php';
    require_once '../app/OMRS.dataaccess/Module2Repository.php';
    require_once '../app/Controller/StaffManageMarriageRequestController.php';

    //Module 3
    require_once '../app/OMRS.dataaccess/Module3Repository.php';

    require_once '../app/OMRS.dataaccess/Module1Repository.php';
    require_once '../app/Controller/MarriagecertController.php';
    require_once '../app/Controller/MarriagetypeController.php';
    // Create a new database connection
    $db = (new Database())->connect();


    //module 3
    /* require_once '../app/OMRS.dataaccess/Module3Repository.php';
    require_once '../app/Controller/MarriagecertController.php';
    require_once '../app/Controller/MarriagetypeController.php';*/

    //Module 5 Controller & Repository include file
    require_once '../app/Controller/ApplicantIncentiveController.php';
    require_once '../app/OMRS.dataaccess/Module5Repository.php';
    require_once '../app/Controller/StaffIncentiveController.php';

    // Create a new database connection
    $db = (new Database())->connect();

    //  ----------------------------------------------------
    // | module 1 create object for repository & controller |
    //  ----------------------------------------------------
    $Module1Repository = new Module1Repository($db);
    $RegistrationController = new RegistrationController($Module1Repository);
    $LoginController = new LoginController($Module1Repository);
    $PasswordController = new PasswordController($Module1Repository, $db);
    $ProfileController = new ProfileController($Module1Repository);

    //  ----------------------------------------------------
    // | module 2 create object for repository & controller |
    //  ----------------------------------------------------
    /*$Module2Repository = new Module2Repository($db);
    $StaffManageMarriageCourseRequestController = new StaffManageMarriageCourseRequestController($Module2Repository);
    $StaffManageMarriageRequestController = new StaffManageMarriageRequestController($Module2Repository);

    //  ----------------------------------------------------
    // | module 3 create object for repository & controller |
    //  ----------------------------------------------------
    /*$Module3Repository = new Module3Repository($db);
    $MarriagetypeController = new MarriagetypeController($Module3Repository);
    $MarriagecertController = new MarriagecertController($Module3Repository);*/

    //  ----------------------------------------------------
    // | module 4 create object for repository & controller |
    //  ----------------------------------------------------

    //  ----------------------------------------------------
    // | module 5 create object for repository & controller |
    //  ----------------------------------------------------
    $Module5Repository = new Module5Repository($db);
    $ApplicantIncentiveController = new ApplicantIncentiveController($Module5Repository);
    $StaffIncentiveController = new StaffIncentiveController($Module5Repository);


    $action = isset($_GET['action']) ? $_GET['action'] : '';

    switch ($action) {

            //Module 1 (form from ApplicantRegFormPage.php)
        case 'registerApplicantAcc':
            $userIC = $_POST['userIC'];
            $appName = $_POST['appName'];
            $userType = $_POST['userType'];
            $appGender = $_POST['appGender'];
            $appPhoneNo = $_POST['appPhoneNo'];
            $appAddress = $_POST['appAddress'];
            $appEmail = $_POST['appEmail'];
            $userPassword = $_POST['userPassword'];
            $appRace = $_POST['appRace'];
            $appNationality = $_POST['appNationality'];
            $appEduLevel = $_POST['appEduLevel'];
            $appOKUStatus = $_POST['appOKUStatus'];
            $appStatus = $_POST['appStatus'];

            $RegistrationController->registerApplicantFunction($userIC, $appName, $userType, $appGender, $appPhoneNo, $appAddress, $appEmail, $userPassword, $appRace, $appNationality, $appEduLevel, $appOKUStatus, $appStatus);
            break;

        case 'registerStaffAcc':
            $userIC = $_POST['userIC'];
            $staffName = $_POST['staffName'];
            $staffGender = $_POST['staffGender'];
            $staffDepartmentName = $_POST['staffDepartmentName'];
            $userType = $_POST['userType'];
            $staffEmail = $_POST['staffEmail'];
            $staffPhoneNo = $_POST['staffPhoneNo'];
            $userPassword = $_POST['userPassword'];

            $RegistrationController->staffRegisterFunction($userIC, $staffName, $staffGender, $staffDepartmentName, $userType, $staffEmail, $staffPhoneNo, $userPassword);
            break;

        case 'loginApplicantAcc':
            $userIC = $_POST['userIC'];
            $userPassword = $_POST['userPassword'];

            $LoginController->loginApplicantFunction($userIC, $userPassword);  //means dia akan read LoginController dan function loginFunction
            break;

        case 'loginStaffAcc':
            $userIC  = $_POST['userIC'];
            $userPassword = $_POST['userPassword'];

            $LoginController->loginStaffFunction($userIC, $userPassword);  //means dia akan read LoginController dan function loginFunction
            break;

        case 'loginAdminAcc':
            $userIC  = $_POST['userIC'];
            $userPassword = $_POST['userPassword'];

            $LoginController->loginAdminFunction($userIC, $userPassword);  //means dia akan read LoginController dan function loginFunction
            break;

        case 'forgotPasswordApplicant':
            $userIC = $_POST['userIC'];
            $appEmail = $_POST['appEmail'];

            $PasswordController->passwordFunctionApplicant($userIC, $appEmail);
            break;

        case 'forgotPasswordAdmin':
            $userIC = $_POST['userIC'];
            $staffEmail = $_POST['adminEmail'];

            $PasswordController->passwordFunctionAdmin($userIC, $adminEmail);
            break;

        case 'changePassword':
            $userIC = $_POST['userIC'];
            $userPassword = $_POST['userPassword'];
            $newPassword = $_POST['newPassword'];

            $PasswordController->changePasswordFunction($userIC, $userPassword, $newPassword);
            break;

        case 'viewProfile':
            $from = isset($_GET['from']) ? $_GET['from'] : '';

            $ProfileController->viewProfileFunction($from);
            break;

        case 'updateAppProfile':
            $appPhoneNo = $_POST['appPhoneNo'];
            $appEmail = $_POST['appEmail'];
            $appAddress = $_POST['appAddress'];
            $appRace = $_POST['appRace'];
            $appNationality = $_POST['appNationality'];
            $appEduLevel = $_POST['appEduLevel'];
            $appOKUStatus = $_POST['appOKUStatus'];
            $appStatus = $_POST['appStatus'];

            $ProfileController->updateAppProfileFunction($appPhoneNo, $appEmail, $appAddress, $appRace, $appNationality, $appEduLevel, $appOKUStatus, $appStatus);
            break;

        case 'updateStaffProfile':
            $staffPhoneNo = $_POST['staffPhoneNo'];
            $staffEmail = $_POST['staffEmail'];

            $ProfileController->updateStaffProfileFunction($staffPhoneNo, $staffEmail);
            break;

        case 'updateAdminProfile':
            $adminPhoneNo = $_POST['adminPhoneNo'];
            $adminEmail = $_POST['adminEmail'];

            $ProfileController->updateAdminProfileFunction($adminPhoneNo, $adminEmail);
            break;

            //module 2
        case 'ReligiousInfo':
            // Retrieve form data
            $office = $_POST['office'];
            $venue = $_POST['Venue'];
            $date = $_POST['Date'];
            $capacity = $_POST['Capacity'];
            $vacancy = $_POST['Vacancy'];
            $speakerName = $_POST['speakerName'];
            $MCcertificate = $_FILES['MCcertificate'];

            // Extract file information
            $tmpFilePath = $MCcertificate['tmp_name'];
            $fileName = $MCcertificate['name'];

            // Call the controller method to insert the form data
            $StaffManageMarriageCourseRequestController = new StaffManageMarriageCourseRequestController($Module2Repository);
            $applicantID = 1; // Replace with the actual applicant ID
            $StaffManageMarriageCourseRequestController->insertForm($office, $venue, $date, $capacity, $vacancy, $speakerName, $tmpFilePath, $fileName, $applicantID);
            break;



        case 'PartnerInfo':

            $icNum = $_POST["ic-num"];
            $StaffManageMarriageRequestController = new StaffManageMarriageRequestController($Module2Repository);
            $StaffManageMarriageRequestController->searchPartner($icNum);



            //Module 3
        case 'unauthorizedmarriage':
            $ic = $_POST['ApplicantPartner_IC'];
            $passport = $POST['ApplicantPartner_Passport'];
            $suratperakuan = $POST['Surat_Perakuan'];
            $pemastautinan = $POST['Surat_Pemastautinan'];
            $akuanSumpahBerkanun = $POST['Akuan_Sumpah_Berkanun'];

            $marriagetypeController->unauthorizedMarriageFunction($ic, $passport, $suratperakuan, $pemastautinan, $akuanSumpahBerkanun);
            break;

        case 'voluntarymarriage':
            $ic = $_POST['ApplicantPartner_IC'];
            $photo = $_POST[' ApplicantPartner_Photo'];
            $onlineSlip = $_POST['Application_Slip'];
            $pemastautinan = $_POST['Surat_Pemastautinan'];
            $borangHIV = $_POST['Borang_HIV'];

            $marriagetypeController->voluntaryMarriageFunction($ic, $photo, $onlineSlip, $pemastautinan, $borangHIV);
            break;

        case 'applystatus':
            $ic = $_POST['userIC'];
            $date = $_POST['date'];
            $status = $_POST['status'];
            $Desc = $_POST['Description'];

            $marriagecertController->applystatus($ic, $date, $status, $Desc);
            break;



            //module 5
        case 'apply-incentive':

            // Retrieve Suami data
            $sjt = isset($_POST['suami-jobtype']) ? $_POST['suami-jobtype'] : '';
            $sjn = isset($_POST['suami-jobname']) ? $_POST['suami-jobname'] : '';
            $sja = isset($_POST['suami-jobaddress']) ? $_POST['suami-jobaddress'] : '';
            $ss = isset($_POST['suami-salary']) ? $_POST['suami-salary'] : 0;
            $sb = isset($_POST['suami-bank']) ? $_POST['suami-bank'] : '';
            $sna = isset($_POST['suami-noacc']) ? $_POST['suami-noacc'] : 0;

            // Retrieve Suami data
            $ijt = isset($_POST['isteri-jobtype']) ? $_POST['isteri-jobtype'] : '';
            $ijn = isset($_POST['isteri-jobname']) ? $_POST['isteri-jobname'] : '';
            $ija = isset($_POST['isteri-jobaddress']) ? $_POST['isteri-jobaddress'] : '';
            $is = isset($_POST['isteri-salary']) ? $_POST['isteri-salary'] : 0;
            $ib = isset($_POST['isteri-bank']) ? $_POST['isteri-bank'] : '';
            $ina = isset($_POST['isteri-noacc']) ? $_POST['isteri-noacc'] : 0;

            // Retrieve close relative data
            $crn = isset($_POST['cr-name']) ? $_POST['cr-name'] : '';
            $cri = isset($_POST['cr-icnum']) ? $_POST['cr-icnum'] : '';
            $cra = isset($_POST['cr-address']) ? $_POST['cr-address'] : '';
            $crr = isset($_POST['cr-relation']) ? $_POST['cr-relation'] : 0;
            $crp = isset($_POST['cr-phone']) ? $_POST['cr-phone'] : '';

            // Retrieve supporting document data
            $file1 = isset($_POST['file1']) ? $_POST['file1'] : '';
            $file2 = isset($_POST['file2']) ? $_POST['file2'] : '';
            $file3 = isset($_POST['file3']) ? $_POST['file3'] : '';
            $file4 = isset($_POST['file4']) ? $_POST['file3'] : '';

            // Call the controller method to insert the form data
            $ApplicantIncentiveController->insertincentiveformdata(
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
            );
            break;



        default:
    }
    ?>