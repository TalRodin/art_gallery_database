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
        $price=$_REQUEST['price'];
        $description=$_REQUEST['description'];   
                
        
        echo "<p>Artwork Title: <b>$artwork_title</b><br />
              Year: <b>$year</b><br />
              Movement: <b>$movement</b><br />
              Price:<b>$price</b><br />
              Description:<b>$description</b>
             </p>
              ";

        ?>
    </body>    
</html>