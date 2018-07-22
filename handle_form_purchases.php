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
        $purchase_price=$_REQUEST['purchase_price'];
        $order_date=$_REQUEST['order_date'];   
                
        
        echo "<p>Artwork Title: <b>$artwork_title</b><br />
                 Year: <b>$year</b><br />
                 Movement: <b>$movement</b><br />
                 Purchase price: <b>$purchase_price</b><br />
                 Order Date: <b>$order_date</b>
             
             </p>
              ";

        ?>
    </body>    
</html>