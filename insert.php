<?php
if(isset($_POST['insert_btn'])){
  $user_name = $_POST['user_name'];
  $user_email = $_POST['user_email'];
  $user_pass = $_POST['user_pass'];
  $image = $_FILES['user_img']['name'];
  $tmp_name = $_FILES['user_img']['tmp_name'];
  $user_detail = $_POST['user_details'];

  $insert_user = "INSERT INTO user(user_name,user_email,user_password,user_image,user_details) VALUES('$user_name','$user_email','$user_pass','$image','$user_detail')";

  $run_insert = mysqli_query($conn,$insert_user);
  if ($run_insert === true) {
    echo "Data has been inserted successfully";
    move_uploaded_file($tmp_name,"upload/$image");
  }else{
    echo "Failed to insert data";
  }
}