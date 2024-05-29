<?php

    // Start up your PHP Session
    session_start();

    //Decluration
    $encodedData;
    $decodedAdminData;

    //If the user is not logged in send him/her to the login form
    if(!isset($_SESSION['currentUserIC'])) {

        ?>
            <script>
                alert("Access denied !!!")
                window.location = "../../../../app/ApplicationLayer/AdminView/AdminLoginPage.php";
            </script>
        <?php

    }else{

        // Retrieve the serialized and URL-encoded data from the URL parameter
        $encodedData = $_GET['returnProfileInfo'];
        
        // Decode the URL-encoded data and unserialize it
        $decodedAdminData = unserialize(urldecode($encodedData));

        //Sidebar Active path
        $_SESSION['route'] = 'viewProfile';
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin View Profile</title>
    <link rel="stylesheet" href="AdminViewProfilePage.css">
</head>
<body>
    <div>
        <!-- Header -->
        <?php 
        include_once('../Common/headerAdminView(Module1).html'); 
        ?>

<section>

        <div>
            <?php include_once('../Common/sidebarAdmin(Module1).php');  ?>
        </div>

        <div class="content-container">
        <div class="content"> 
       
        <div class="container-AdminViewProfile">
            <form>
                <table>
                    <tr>
                        <td scope="row">NO KAD PENGENALAN : </td>
                        <td><?php echo $decodedAdminData['Admin_Id']; ?></td>
                    </tr>
                    <tr>
                        <td scope="row">NAMA : </td>
                        <td><?php echo $decodedAdminData['adminName']; ?></td> 
                    </tr>
                    
                    <tr>
                        <td scope="row">JANTINA : </td>
                        <td><?php echo $decodedAdminData['adminGender']; ?></td> 
                    </tr>
                    <tr>
                        <td scope="row">JABATAN: </td>
                        <td><?php echo $decodedAdminData['adminDepartmentName']; ?></td> 
                    </tr>
                    <tr>
                        <td scope="row">NO. TELEFON: </td>
                        <td><?php echo $decodedAdminData['adminPhoneNo']; ?></td> 
                    </tr>
                    <tr>
                        <td scope="row">EMAIL : </td>
                        <td><?php echo $decodedAdminData['adminEmail']; ?></td> 
                    </tr>
                    <tr>
                </table>
            </form>      
        </div> 
        </div>
        </div>  
                 
</section>
    </div>
</body>
</html>


