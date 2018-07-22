<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <meta charset="UTF-8">
        <title>Form Feedback</title>
    </head>
    <body>
      <?php
        $name_gallery=$_REQUEST['name_gallery'];
        $start_date=$_REQUEST['start_date'];
        $end_date=$_REQUEST['end_date'];
        $address=$_REQUEST['address'];
        $city=$_REQUEST['city'];
        $zip=$_REQUEST['zip'];
        $state=$_REQUEST['state'];
        $country=$_REQUEST['country'];  
                
        
         echo "<p>Name Gallery: <b> $name_gallery</b><br />
              Start Date: <b>$start_date</b><br />
              End Date: <b>$end_date</b><br />
              Address: <b>$address</b><br />
              City:<b>$city</b><br />
              Zip Code:<b>$zip</b><br />
              State:<b>$state</b><br />
              Country:<b>$country</b>
             
             </p>
              ";
        

        ?>
    </body>    
</html>