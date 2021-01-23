<?php
include('connection.php');
include('insert.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>PHP curd Operation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
  <br> <br>
  <div class="container">
    <h2 align="center">Add New User</h2>
    <form action="" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label>Name:</label>
        <input type="text" class="form-control"  placeholder="Enter your name" name="user_name">
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="user_email">
      </div>
      <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="user_pass">
      </div>
      <div class="form-group">
        <label>Image:</label>
        <input type="file" class="form-control" name="user_img">
      </div>
      <div class="form-group">
        <label>Details:</label>
        <textarea class="form-control" placeholder="Enter your details here" name="user_details" ></textarea>
      </div>
      <input type="submit" class="btn btn-primary" name="insert_btn" />
    </form>
  </div>
</body>
</html>