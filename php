<?php
print_r($_POST);
if(isset($POST['submit'])){
    $firstName=$_POST['firstName'];
     $lastName=$_POST['lastName'];
     $emailFrom=$_POST['email'];
$telephoneNumber=$_POST['telephoneNumber'];
     $address1=$_POST['address1'];
     $address2=$_POST['address2'];
     $town=$_POST['town'];
     $county=$_POST['county'];
     $postcode=$_POST['postcode'];
     $country=$_POST['country'];
     $Description=$_POST['Description'];
    
    $to="silvena_tsvetkova@abv.bg";
    $headers="From:".$emailFrom;
    $txt="You have received an email from ".$firstName." .\n\n".$description;
    
     mail($to,$txt,$headers);
    header("Location: Contact-form.php?mailsend");
 
$message_sent=true;
    
}?>
