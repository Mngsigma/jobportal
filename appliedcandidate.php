


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
      $name=$_SESSION['cmpname'];
     $con=mysqli_connect('localhost','root','123456789','jobportal','3306');
    $j="select * from applied where name='$name' ";
     $rs=mysqli_query($con,$j);
      echo"<table border='1' class='table-bordered'><tr><td>Email</td><td>Resume</td><td>Name</td><td>Adress</td><td>Contact</td></tr>";
        $c=0;
      while($row1=mysqli_fetch_array($rs))
        { $c++;
          
          $ww=$row1['resumee'];
     echo" <tr><td>$row1[email]</td>
     <td><a href='$ww'>Download Resumee</a> </td>
     

    ";
            $q="select * from candidatereg where email='$row1[email]'";
            $rs1=mysqli_query($con,$q);
            
            while($row1=mysqli_fetch_array($rs1))
            { 
            echo" <td>$row1[name]</td><td>$row1[adress]</td><td>$row1[contact]</td></tr>
       
           ";
        }
         
        }
      
      
      if($c==0)
      {
      echo"<br><br>Regret.....Not yet Apply candidate This company <br>";
      }
    


           echo"</table>";
              
         
         
        
        
?>



    </h4></div>
    <div class="col-md-1">
        
    </div>
   
</div>


</body>
</html>