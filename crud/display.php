<?php
include 'connect.php';?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <title>Crud operations</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">

    </head>
    <body>

    <div class="container">

    <button class="btn btn-primary my-5"><a href="user.php"
    class="text-light">Add user</a>
   

    </button>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">S1 no</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Password</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>

  <?php
$sql="Select * from crudoperations";
$result=mysqli_query($con,$sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){
$id=$row['id'];
$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];
$password=$row['password'];
 echo <tr>
 <th scope="row">1</th>
 <td>'.$name.'</td>
 <td>'.$email.'</td>
 <td>'.$mobile.'</td>
 <td>'.$password.'</td>
</tr>;
    }
}
  ?>
  
<!--<tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr> -->
  </tbody>
</table>
    </div>
        
          </body>
</html>