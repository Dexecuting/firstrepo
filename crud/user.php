<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $name= $_POST ['name'];
    $email= $_POST ['e-mail'];
    $mobile= $_POST ['mobile'];
    $password= $_POST ['password'];

    $sql="insert into 'crud' (name, e-mail, mobile, password)
    values('$name', '$email', '$mobile', '$password') ";
    $result=mysqli_query($conn, $sql);
    if($result){
        echo "Data inserted successfully";
    }else{
        die(mysqli_error($conn));
    }
}
?>

<!doctype html>
<html lang="ar" dir="rtl">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">

    <title>Crud operations</title>
  </head>
  <body>
   <div class="container">
   <form method="post">
   <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" placeholder="Enter your name"
    name="name" autocomplete="off">
  </div>
  <div class="form-group">
    <label>e-mail</label>
    <input type="text" class="form-control" placeholder="Enter your e-mail"
    name="e-mail"autocomplete="off" >
  </div>
  <div class="form-group">
    <label>Mobile</label>
    <input type="text" class="form-control" placeholder="Enter your mobile number"
    name="mobile"autocomplete="off" >
  </div>
  <div class="form-group">
    <label>password</label>
    <input type="text" class="form-control" placeholder="Enter your password"
    name="password" autocomplete="off">
 </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
   </div>

   
  </body>
</html>