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


<div class="row">
    <div class="col-md-1">

    </div>
 
   
    
    

    
    <div class="col-md-10">
        <h4>
          
    <?php
      session_start();  
     $a=$_GET['search'];
     $con=mysqli_connect('localhost','root','123456789','jobportal','3306');
      $j="select * from addnewjobpost where jobprofile='$a' ";
      $rs=mysqli_query($con,$j);
      echo"<table border='1' class='table-bordered'><tr><td>Comapny Name</td><td>Job Profile</td><td>Salary</td><td>Role</td><td>Last Date</td><td>Position</td><td>Description</td></tr>";
      while($row=mysqli_fetch_array($rs))
      {  
        echo"
        <tr><td>$row[cmpname]</td>
        <td>$row[jobprofile]</td>
        <td>$row[salary]</td>
        <td>$row[role]</td>
        <td>$row[lastdate]</td>
        <td>$row[position]</td>
        <td>$row[descriptio]</td>
    <td> <a href='resumee.php' class='btn btn-primary'>Apply Here</a> </td></tr>
    
        ";
        
    $_SESSION['cc']=$row['cmpname'];
           
      }
      echo"</table>";
  ?>



    </h4></div>
    <div class="col-md-1">
        
    </div>
   
</div>


</body>
</html>