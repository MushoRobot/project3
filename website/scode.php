<?php
require 'connection.php';
if (isset($_POST['ssend'])){
   $scode = $_POST['scode'];
 $ssql_db = "SELECT * FROM form WHERE NUM_2 = $scode" ;
 $res_2 = mysqli_query($con, $ssql_db);
 $resu_2 = mysqli_num_rows($res_2);
   if( $resu_2 == 1){
      header('location:go.html');
       $ssql_d = "UPDATE form SET NUM_2=' ' WHERE NUM_2 = $scode";
      mysqli_query($con, $ssql_d);
}

 else{
echo '<h4 style="text-align:center; color:#900;">' . 'code is wrong!' . '</h4>';
}

}
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

    <title>Musho</title>
  </head>
  
  <body>
  
  <form class="center ce" action="#" method='POST'>
	<h6>please enter the code</h6>
	<input  type="text" id="code" placeholder="enter code" name='scode'>
	<p id="v"></p>
	<button type="submit" name='ssend' >send</button>
  </form>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="js/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 <script src="js/wow.min.js"></script>
  <script src="js/solid.min.js"></script>
 <script src="js/fontawesome.min.js"></script>
 <script src="js/brands.min.js"></script>
  <script src="js/j.js"></script>


  <script>
              new WOW().init();
              </script>
  </body>
</html>


























