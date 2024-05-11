<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>Fóoldal</title>   
        <link rel="stylesheet" href="style.css">   
    </head> 
    <body>
        <?php include ("fejlec.html");?>

       <?php 
       if (isset($_GET['oldal'])){
        if($_GET['oldal']=="kapcsolat") include("kapcsolat_tartalom.html");
        if($_GET['oldal']=="termekek") include("termekek_tartalom.html");
       }
       else include("fooldal_tartalom.html");

       ?>
    </body>
</html>