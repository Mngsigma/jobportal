<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
<div id="demo" class="carousel slide" data-bs-ride="carousel">

<!-- Indicators/dots -->
<div class="carousel-indicators">
  <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
  <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
  <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
</div>

<!-- The slideshow/carousel -->
<div class="carousel-inner">
  <div class="carousel-item active">
  <img src="image_downloader_1712044019619.jpg" alt="Los Angeles" style="height: 300px;" class="d-block w-100">


</div>
  <div class="carousel-item">
    <img src="image_downloader_1712044001251.jpg" alt="Chicago" style="height: 300px;" class="d-block w-100">
  </div>
  <div class="carousel-item">
    <img src="image_downloader_1712044007677.jpg" alt="New York" style="height: 300px;" class="d-block w-100">
   </div>
</div>

<!-- Left and right controls/icons -->
<button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
  <span class="carousel-control-prev-icon"></span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
  <span class="carousel-control-next-icon"></span>
</button>
</div>

<div class="row">

<div class="col-md-12">

    <nav class="navbar navbar-expand-sm bg-light">

        <div class="container-fluid">
          <!-- Links -->
          <ul class="navbar-nav">
          <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
          </ul>
        </div>
      
      </nav>
</div>
<div class="col-md-2">
    
</div>
<div class="col-md-8"> <form method='POST' action="">
<a href="candidatereg.php">Registarion</a>
<br>
Email: <br>
<input type="text" name="email" class="form-control" id=""> <br>
password: <br>
<input type="text" name="password" class="form-control" id=""> <br>
<br>
<input type="submit" value="Log-In" class="btn btn-success">

</div>
<div class="col-md-2">
    
</div>
</form>

<?php
     if(isset($_POST['email'])==true)
     {
        $a=$_POST['email'];
        $b=$_POST['password'];
        $con=mysqli_connect('localhost','root','123456789','jobportal','3306');
         $j="select * from cmpreg where email='$a' and password='$b' ";
         $rs=mysqli_query($con,$j);
         if($row=mysqli_fetch_array($rs))
         {
           echo"<script>window.location='comp.php'</script>";
         }
         else
         {
            echo"<br><br><br> worng user password brother.... brother eeeee";
         }
        }
?>


</body>
</html>