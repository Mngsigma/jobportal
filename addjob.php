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


<div class="col-md-2">
    
</div>
<div class="col-md-8">
         <?php
             session_start();
             $q=$_SESSION['cmpname'];
         ?>
      
       <form method='POST' enctype='multipart/form-data'> 
        <?php
       echo"Company Name: <br><input type='text' value='$q' name='t0' style='width: 45%; '  class='form-control'> <br>";
       ?>
       Job Profile: <br><input type='text'  name='t1' style='width: 45%;' class='form-control'> <br>
       Salary: <br><input type='text' name='t2' style='width: 45%; ' class='form-control'> <br>
       Role: <br><input type='text' name='t3' style='width: 45%;' class='form-control'> <br>
       Last Date: <br><input type='date' name='t6' style='width: 45%; '  class='form-control'> <br>
       Position: <br><input type='text' name='t8' style='width: 45%; '  class='form-control'> <br>
       Description: <br><input type='text' name='t9' style='width: 45%; ' class='form-control'> <br>
       <br>  <input type='submit' value='Submit' style='width:20%;' class='btn btn-success'>
       </form>

       
     






<?php
    if(isset($_POST['t1'])==true)
    { 
      $q=$_POST['t0'];
      $a=$_POST['t1'];
      $b=$_POST['t2'];
      $c=$_POST['t3'];
    
      $f=$_POST['t6'];
     
      $h=$_POST['t8'];
      $i=$_POST['t9'];

      $con=mysqli_connect('localhost','root','123456789','jobportal','3306');
      $j="insert into addnewjobpost values('$a','$b','$c','$f','$h','$i','$q')";
      $rs=mysqli_query($con,$j);
      if($rs)
      {
         echo"<br><h1> Added  successfully...!!</h1>";
      }
      else
      {
         echo"whts that brother eoorroorr...!!";
      }

    }


   
?>
</div>
<div class="col-md-2">
    
</div>




</body>
</html>



