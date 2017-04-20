<?php
 session_start();
  if(isset($_POST['submit'] ) )
  {
    $my_email =$_POST['myemail'];
    $my_password =$_POST['mypassword'];
      
     $query ="SELECT * FROM userinfo WHERE Email='$my_email' and Password='$my_password'";
         

    include 'db_connect.php';

 $db_conn = new db_connection();

    $result = $db_conn->getData($query);

    if(mysqli_num_rows($result) >0 )
    {
      $row = mysqli_fetch_assoc($result);

      $_SESSION['id'] = $row['id'];


      // goto next page
      // redirect to other page
      header("Location: ./main.php");

    }
    else
    {
      // show error msg..
      echo ' <script> alert("Email or password is incorrect.");  </script> ';      
    }



} 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title> info </title>

   
    <link href="./css/bootstrap.min.css" rel="stylesheet">

 
    <link href="./css/ie10-viewport-bug-workaround.css" rel="stylesheet">

  
    <link href="signin.css" rel="stylesheet">
      <link href="css/Mystyle.css" rel="stylesheet">
      

   
  </head>

  <body>

    <div class="container">

      <form class="form-signin" method="post" >
        <h2 class="form-signin-heading">Please sign in</h2>
       
           
            
        <input  type="email"  name= "myemail"  class="form-control" placeholder="Email address" required  >
       
        <input  type="password"  name="mypassword" class="form-control" placeholder="Password" required  >
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign in</button>
      </form>

    </div> 

  </body>
</html>
