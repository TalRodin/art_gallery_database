<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <meta charset="UTF-8">
        <title>Form Feedback</title>
    </head>
    <body>
      <?php
        $artwork_title=$_REQUEST['artwork_title'];
        $year=$_REQUEST['year'];
        $movement=$_REQUEST['movement'];
        $rental_price=$_REQUEST['rental_price'];
        $start_date=$_REQUEST['start_date'];
        $end_date=$_REQUEST['end_date'];
        
     
       echo "<p>Artwork Title: <b>$artwork_title</b><br />
              Year Created: <b>$year</b><br />
              Movement in Art: <b>$movement</b><br />
              Rental Price: <b>$rental_price</b><br />
              Start Date: <b>$start_date</b><br />
              End Date: <b>$end_date</b>
              </p>
              ";

        ?>
    </body>    
</html>