<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <meta charset="UTF-8">
        <title>Form Feedback</title>
    </head>
    <body>
      <?php
        $first_name=$_REQUEST['first_name'];
        $last_name=$_REQUEST['last_name'];
        $address=$_REQUEST['address'];
        $city=$_REQUEST['city'];
        $zip=$_REQUEST['zip'];
        $state=$_REQUEST['state'];
        $country=$_REQUEST['country'];
        $phone_number=$_REQUEST['phone_number'];         
        $email=$_REQUEST['email'];         
        
        
        echo "<p>First Name: <b> $first_name</b><br />
              Last Name: <b>$last_name</b><br />
              Address: <b>$address</b><br />
              City:<b>$city</b><br />
              Zip Code:<b>$zip</b><br />
              State:<b>$state</b><br />
              Country:<b>$country</b><br />
              Phone Number:<b>$phone_number</b><br />
              Email: <b>$email</b></p>
              ";


        ?>
    </body>    
</html>