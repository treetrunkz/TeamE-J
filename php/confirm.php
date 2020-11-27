<?php

  sendData();
 
  // Send an email
  function sendData() {
      
    // Error Reporting Turned On
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    
    require "../includes/dbcreds.php";
    
    date_default_timezone_set('America/Los_Angeles');
    // Get date from POST array
    $fname = $_POST['form-first-name'];
    $lname = $_POST['form-last-name'];
    $email = $_POST['form-email'];
    $phoneNumber = $_POST['form-phone'];
    
    $withoutResidence = $_POST['btn-without'];
    
    $street = $_POST['form-street'];
    $city = $_POST['form-city'];
    //$state = $_POST['form-state'];
    $zip = $_POST['form-zip'];
    
    $utilities = $_POST['chk-utility'];
    $rent = $_POST['chk-rent'];
    $gas = $_POST['chk-gas'];
    $thrift = $_POST['chk-thrift'];
    $licenseID = $_POST['chk-id'];
    $supplies = $_POST['chk-goods'];
    
    $otherNeed = $_POST['chk-other'];
    $otherRequest = $_POST['txt-other'];
    
    /* TODO - UPLOAD SECTION
    $fileBill = $_POST[''];
    $fileUrgentNotice = $_POST[''];
    $fileEviction = $_POST[''];
    $fileLicense = $_POST[''];
    */
    
    $comments = $_POST['form-message'];

    /* Validation
    if (empty($fname)) {
      die();
    } else if (empty($lname)) {
      die();
    } else if ((empty($email) || empty($phoneNumber))) {
      die();
    } else if ((isset($withoutResidence) || empty($zip))) {
      die();
    } else if (!(isset($utilities) || isset($rent) || isset($gas) || isset($thrift) || isset($licenseID) || isset($supplies))) {
      die();
    } else if ((isset($otherNeed) && (empty($otherRequest)))) {
      die();
    }*/
    
    // TODO -  Temp email w/ inbox
    $to = "jfolk2@mail.greenriver.edu";
    $subject = "$fname $lname Services Form";
    $message = "First Name: $fname\r\n";
    $message .= "Last Name: $lname\r\n";
    
    // If email/number is empty
    if(empty($email)) {
      // If email is empty
      $message .= "Phone Number: $phoneNumber\r\n\r\n";
    } else if (empty($phoneNumber)) {
      // If phone number is empty
      $message .= "Email Address: $email\r\n\r\n";
    } else {
      // Else send both
      $message .= "Email Address: $email\r\n";
      $message .= "Phone Number: $phoneNumber\r\n\r\n";
    }
    
    // If w/o Permanent Residence is checked
    if (isset($withoutResidence)) {
      $message .= "Address: [Without Permanent Residence]\r\n\r\n";
      $address = "N/A";
    } else {
      $message .= "Address: $street\r\n";
      $message .= "$city, WA $zip\r\n\r\n";
    }
    
    // Services:
    
    // If Utility Assistance is checked
      if (isset($utilities)) {
        $message .= "Utility Assistance: Requested\r\n";
        $utilities = "Yes";
      } else if (!isset($utilities)) {
        $utilities = "No";
      }
    
      // If Rent Assistance is Checked
      if (isset($rent)) {
       $message .= "Rent Assistance: Requested\r\n";
        $rent = "Yes";
      } else if (!isset($rent)) {
        $rent = "No";
      }
    
      // If Gas Voucher is Checked
      if (isset($gas)) {
        $message .= "Gas Voucher: Requested\r\n";
        $gas = "Yes";
      } else if (!isset($gas)) {
        $gas = "No";
      }
    
      // If Thrifty Voucher is Checked
      if (isset($thrift)) {
        $message .= "Thrift Voucher: Requested\r\n";
        $thrift = "Yes";
      } else if (!isset($thrift)) {
        $thrift = "No";
      }
    
    
      // If License & ID is Checked
      if (isset($licenseID)) {
        $message .= "Identification Assistance: Requested\r\n";
        $licenseID = "Yes";
      } else if (!isset($licenseID)) {
        $licenseID = "No";
      }
    
      // If Emergency Goods is Checked
      if (isset($supplies)) {
        $message .= "Emergency Supplies: Requested\r\n\r\n";
        $supplies = "Yes";
      } else if (!isset($supplies)) {
        $supplies = "No";
      }
    
      // If Other Service Requested
       if (isset($otherNeed)) {
        $message .= "Other Request: $otherRequest\r\n\r\n";
      } else if (!(isset($otherNeed))) {
        $otherRequest = "N/A";
      }
    
      // If comments isn't empty - add it to the message
      if(!empty($comments)) {
        // If email is empty
        $message .= "Comments & Questions: $comments\r\n\r\n";
      } else {
          $comments = "N/A";
      }
    
      $success = mail($to, $subject, $message);   
    

    
      // Sends to Table
      $sql = "INSERT INTO `outreach`(`date`, `fname`, `lname`, `email`, `number`, `street`, `zip`, `utility`, `rent`, `gas`, `thrift`, `license`, `goods`, `other`, `comments`) VALUES 
      
          (NOW(),
          '$fname',
          '$lname',
          '$email',
          '$phoneNumber',
          '$street',
          '$zip',
          '$utilities',
          '$rent',
          '$gas',
          '$thrift',
          '$licenseID',
          '$supplies',
          '$otherRequest',
          '$comments'
      )";
      
      $success = mysqli_query($cnxn, $sql);

  }

?>