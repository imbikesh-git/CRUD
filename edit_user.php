<?php
include('connection.php');
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
    <h2 align="center">Edit User</h2>
    <?php
    if(isset($_GET['edit'])){
     $edit_id = $_GET['edit'];

     $select = "SELECT * FROM user WHERE user_id ='$edit_id'";
     $run = mysqli_query($conn, $select);
     $row_user = mysqli_fetch_array($run);
     $user_name = $row_user['user_name'];
     $user_email = $row_user['user_email'];
     $user_password = $row_user['user_password'];
     $user_image = $row_user['user_image'];
     $user_details = $row_user['user_details'];
    }
    ?>
    <form action="/phpcurd/" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label>Name:</label>
        <input type="text" class="form-control" value="<?php echo $user_name; ?>"  placeholder="Enter your name" name="user_name">
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" value="<?php echo $user_email; ?>" id="email" placeholder="Enter email" name="user_email">
      </div>
      <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" value="<?php echo $user_password; ?>" id="pwd" placeholder="Enter password" name="user_pass">
      </div>
      <div class="form-group">
        <label>Image:</label>
        <input type="file" class="form-control" name="user_img">
      </div>
      <div class="form-group">
        <label>Details:</label>
        <textarea class="form-control" placeholder="Enter your details here" name="user_details" ><?php echo $user_details; ?></textarea>
      </div>
      <input type="submit" class="btn btn-primary" name="update_btn" />
    </form>
  </div>
</body>
</html>
<?php

if(isset($_POST['update_btn'])){
  $euser_name = $_POST['user_name'];
  $euser_email = $_POST['user_email'];
  $euser_pass = $_POST['user_pass'];
  $eimage = $_FILES['user_img']['name'];
  $etmp_name = $_FILES['user_img']['tmp_name'];
  $euser_detail = $_POST['user_details'];

  if (empty($eimage)) {
    $eimage = $user_image;
  }

  $update_user = "UPDATE user SET user_name ='$euser_name', user_email = '$euser_email', user_password = '$euser_pass', user_image = '$eimage', user_details = '$euser_detail' WHERE user_id = '$edit_id' ";

  $run_update = mysqli_query($conn,$update_user);
  if ($run_update === true) {
    echo "Data has been updated successfully";
    move_uploaded_file($etmp_name,"upload/$eimage");
  }else{
    echo "Failed to insert data";
  }
}
?>