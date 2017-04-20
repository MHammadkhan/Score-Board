<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>info</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Singn Up</h2>
  <form method="post" >
    <div class="form-group">
     
      <input type="text" class="form-control" id="txt" placeholder="Enter Name" name="nametext" required>
    </div>
    <div class="form-group">
     
      <input type="email" class="form-control" id="email" placeholder="Enter Email" name="emailtext" required>
    </div>
    <div class="form-group">
     
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="passwordtext" required>
    </div>
   
    <button type="submit" class="btn btn-default" name="submit">Submit</button>
  </form>
</div>

</body>
</html>
