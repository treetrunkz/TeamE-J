<?php
// Error Reporting Turned On
ini_set('display_errors', 1);
error_reporting(E_ALL);

$page_title = "Requests";

/*
include("includes/header.html");
require ("dbcreds.php"); */

include "../includes/header.html";
require "../includes/dbcreds.php";

?>

<body>
    
  <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top">
    <div class="container">
      <img src="../images/logo.png" alt="Outreach cross logo">
      <a class="navbar-brand" href="../index.html"><strong>The Outreach</strong></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
          </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="../index.html">Home
                  <span class="sr-only">(current)</span>
                </a>
          </li>
        </ul>
      </div>
      </div>
    </nav>


<div id="troubleshooter" class="my-5"><br></div>

<div id="website" class="my-5 mx-5">
    
    <h3 class="text-center">Requests</h3>
    <table id="applicants">
        
        <thead>
            <tr>
                <td>Date</td>
                <td>Submission</td>
                <td>First Name</td>
                <td>Last Name</td>
                <td>Email</td>
                <td>Phone Number</td>
                <td>Street Address</td>
                <td>Zip</td>
                <td>Utility</td>
                <td>Rent</td>
                <td>Gas</td>
                <td>Thirft</td>
                <td>License</td>
                <td>Goods</td>
                <td>Other</td>
                <td>Comments</td>
            </tr>
        </thead>

        <tbody>
            
        <?php
        $sql = "SELECT * FROM outreach";
        $result = mysqli_query($cnxn, $sql);
        
        
   

    foreach($result as $row)
    {
        
        // Get date from Table
        $date = date("M d, Y g:i a", strtotime($row['date']));
        $submission = $row['submission'];
        $fname = $row['fname'];
        $lname = $row['lname'];
        $email = $row['email'];
        $phoneNumber = $row['number'];
        
        $street = $row['street'];
        $zip = $row['zip'];
        
        $utilities = $row['utility'];
        $rent = $row['rent'];
        $gas = $row['gas'];
        $thrift = $row['thrift'];
        $licenseID = $row['license'];
        $supplies = $row['goods'];
        $otherRequest = $row['other'];
        $comments = $row['comments'];
        
        /* TODO - UPLOAD SECTION
        $fileBill = $_POST[''];
        $fileUrgentNotice = $_POST[''];
        $fileEviction = $_POST[''];
        $fileLicense = $_POST[''];
        */

        echo "<tr>";
        echo "<td>$date</td>";
        echo "<td>$submission</td>";
        echo "<td>$fname</td>";
        echo "<td>$lname</td>";
        echo "<td>$email</td>";
        echo "<td>$phoneNumber</td>";
        
        echo "<td>$street</td>";
        echo "<td>$zip</td>";
        echo "<td>$utilities</td>";
        echo "<td>$rent</td>";
        echo "<td>$gas</td>";
        echo "<td>$thrift</td>";
        
        echo "<td>$licenseID</td>";
        echo "<td>$supplies</td>";
        echo "<td>$otherRequest</td>";
        echo "<td>$comments</td>";
        echo "</tr>";
        }
        ?>

        </tbody>
    </table>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Datatables -->
    <script>$(document).ready( function () {
    $('#applicants').DataTable({"order": [[1, "desc"]]});
    } );</script>
    
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
  
    </div>
  </body>
</html>