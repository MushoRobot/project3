<?php
session_start();
require 'connection.php';

  $first   =  filter_var($_POST['first'] , FILTER_SANITIZE_STRING) ;
  $last    =  filter_var($_POST['last'] , FILTER_SANITIZE_STRING) ;
  $email    =  filter_var($_POST['mail'] , FILTER_SANITIZE_EMAIL) ;
  $address =  filter_var($_POST['address'] , FILTER_SANITIZE_URL) ;
  $number  =  filter_var($_POST['number'] , FILTER_SANITIZE_NUMBER_INT) ;
   $num = rand(100000 , 999999);
    $snum = rand(100000 , 999999);
  $_SESSION["e"] = $email;
    $_SESSION["n"] = $first .' ' . $last ;
    $_SESSION["fn"] = $num;
  $_SESSION["sn"] = $snum;
    

$sql = "INSERT INTO form (FIRST_NAME , LAST_NAME , EMAIL , ADDRESS , NUMBER , NUM_1 , NUM_2)
VALUES ('$first' , '$last' , '$email' , '$address' , '$number' , '$num' , '$snum')";

mysqli_query($con, $sql);
  
  ?>
                           
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet"  href="css/animate.min.css">
        <link rel="stylesheet"  href="css/solid.min.css">
    <link rel="stylesheet"  href="css/brands.min.css">
    <link rel="stylesheet"  href="css/fontawesome.min.css">
    <link rel="stylesheet"  href="css/s.css">
    <link rel="stylesheet"  href="css/ss.css">

    <title>Musho</title>
  </head>
  <body>
	       <div class="container center">
  <!--  =================================================  -->
  <div class='table'>
        <h1 class="oo" style="
            margin-bottom:24px;
            ">
         Check your data
        </h1>

  <table >

			<tr>
				<td class="wid">
     <h6>Name</h6>
    </td>
				<td class="wi"><?php echo  $first . ' ' .   $last ?></td>
			</tr>
			
			<tr>
				<td class="wid">
     <h6>E-mail</h6>
    </td>
				<td class="wi"><?php echo    $email  ?></td>
			</tr>
				
			  <tr>
				<td class="wid">
     <h6>Address</h6>
    </td>
				<td class="wi"><?php echo    $address  ?></td>
			</tr>
					
					 <tr>
				<td class="wid">
     <h6>Phone number</h6>
    </td>
				<td class="wi"><?php echo    $number  ?></td>
			</tr>
				
			</tr>
		</table>
  </div>
  
  <!--  =================================================  -->
  
     <!--      hidden form     -->
    
    
    
     <form action="a.php" method="GET" >

    <a href="form.html" >
    <input type="button"  value="Back" class="back"/>
    </a>
  <input type="submit"  value="Send" class="send"/>
     </form>
     </div>
    <!--      end hidden form    -->
    
   <!--  =================================================  -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="js/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
 <script src="js/wow.min.js"></script>
  <script src="js/solid.min.js"></script>
 <script src="js/fontawesome.min.js"></script>
 <script src="js/brands.min.js"></script>
  <script src="js/j.js"></script>
    <script src="js/error.js"></script>



  <script>
              new WOW().init();
              </script>
</body>
</html>

