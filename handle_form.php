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
        $last_name=$_REQUEST['Last Name'];
        $address=$_REQUEST['Address'];
        $city=$_REQUEST['City'];
        $zip_code=$_REQUEST['Zip Code'];
        $state=$_REQUEST['State'];
        $country=$_REQUEST['Country'];
        $phone_number=$_REQUEST['Phone Number'];         
        $email=$_REQUEST['Email'];         
        
        
        echo ($first_name); 

        ?>
    </body>    
</html>