<?php
require_once("config.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tours</title>
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./Resoures/Css/bootstrap.css">
  <link rel="stylesheet" href="./css/all.min.css">

</head>
<body>
  <button class="btn-warning rounded text-dark" onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
  <!-- Header -->
  <header class="header">
    <div class="container">
      <!-- Start NavBar  -->
      <div class="row">
        <div class="col-lg-12">
          <nav class="navbar navbar-expand-lg ">
            <a class="navbar-brand" href="#"><i class="fas fa-2x fa-plane-departure text-warning"></i><span class="h3">OTA</span><span
                class="logoName text-warning">.com</span> </a>
            <button class="navbar-toggler bg-warning" type="button" data-toggle="collapse"
              data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon "></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
              <ul class="navbar-nav ">
                <li class="nav-item active home">
                  <a class="nav-link" href="#"><i class="fas  fa-home "></i> Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item navcat">
                  <a class="nav-link" href="#"><i class="fas fa-hotel text-warning"></i> Hotels</a>
                </li>
                <li class="nav-item navcat">
                  <a class="nav-link" href="#"><i class="fas fa-plane-departure text-warning"></i> Tours</a>
                </li>
                <li class="nav-item navcat">
                  <a class="nav-link" href="#"><i class="fas fa-car text-warning"></i> Cars</a>
                </li>
                <li class="nav-item navcat">
                  <a class="nav-link" href="#">Contact Us</a>
                </li>
                <li class="nav-item dropdown  active">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Dropdown
                  </a>
                  <div class="dropdown-menu bg-light" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </li>
              </ul>
    
            </div>
          </nav>

        </div>
      </div>
      <!-- End NavBar  -->
      <div class="row">
        <div class="col-lg-12">
          <div class="text-center p-5 text-light">
            <span class="h2">Discover Your favorite City</span>
            <p class="h4">chosse place you want to visit it</p>
          </div>
        </div>
      </div>

    </div>
  </header>
  <!-- End Header -->
  <!-- start tours body -->
  <div class="container mt-5 ">
    <div class="tours text-center">
      <span class="h3"> Add Tour  </span>
      <hr>
    </div>
    <div class="row ">
      <div class="col-lg-12 col-md-6 col-sm-12 p-3">
            <form action="./PHPFiles/addTour.php" method="POST" enctype="multipart/form-data">
                <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="inputTour4">Tour Name</label>
                    <input type="text" name="tourName" class="form-control" id="inputTour4" placeholder="Tour Name" required>
                    <?php if(isset($_SESSION['tourName'])): ?>
                    <small id="emailHelp" class="form-text  text-danger"><?php  echo $_SESSION['tourName'];?></small>
                    <?php endif; ?>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="inputSDate4">Start Date</label>
                    <input type="date" name="startDate" class="form-control" id="inputSDate4" required>
                    <?php if(isset($_SESSION['startDate'])): ?>
                    <small id="emailHelp" class="form-text  text-danger"><?php  echo $_SESSION['startDate'];?></small>
                    <?php endif; ?>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="inputEDate">End Date</label>
                    <input type="date" name="endDate" class="form-control" id="inputEDate" required>
                    <?php if(isset($_SESSION['endDate'])): ?>
                    <small id="emailHelp" class="form-text  text-danger"><?php  echo $_SESSION['endDate'];?></small>
                    <?php endif; ?>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputPrice4">Tour Price</label>
                    <input type="number" name="tourPrice" class="form-control" id="inputPrice4" required>
                    <?php if(isset($_SESSION['tourPrice'])): ?>
                    <small id="emailHelp" class="form-text  text-danger"><?php  echo $_SESSION['tourPrice'];?></small>
                    <?php endif; ?>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputGuide">Tour Guide</label>
                    <select id="inputGuide" class="form-control" name="tourGuideId">
                      <?php
                       $sql= "select * from tour_guide";
                       $result=mysqli_query($mysqli , $sql);
                       while($guide_data = mysqli_fetch_array($result))
                       {
                         echo "<option name='tourGuideId'>".$guide_data['ID'].'-'. $guide_data['name'] ."</option>";
                       }
                      
                      ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Tour Details</label>
                  <textarea class="form-control" name="tourDetails" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="form-group">
                <label for="exampleFormControlFile1">Tour Images</label>
                 <!-- <input type="file" class="form-control-file" id="exampleFormControlFile1"> -->
                 <input type="file"  class="form-control-file"  name="fileToUpload_gallery[]" id="fileToUpload_gallery" multiple required >
                </div>
                <button type="submit" name="addTour" class="btn btn-primary">Add Tour</button>
              </form>
       
      </div>
  
    </div>



  </div>



  <div class="container mt-5 ">
    <div class="tours text-center">
      <span class="h3"> Add Hotel  </span>
      <hr>
    </div>
    <div class="row ">
      <div class="col-lg-12 col-md-6 col-sm-12 p-3">
            <form action="./PHPFiles/addTour.php" method="POST" enctype="multipart/form-data">
                <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="inputTour4">Tour Name</label>
                    <input type="text" name="tourName" class="form-control" id="inputTour4" placeholder="Tour Name" required>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="inputSDate4">Start Date</label>
                    <input type="date" name="startDate" class="form-control" id="inputSDate4" required>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="inputEDate">End Date</label>
                    <input type="date" name="endDate" class="form-control" id="inputEDate" required>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputPrice4">Tour Price</label>
                    <input type="number" name="tourPrice" class="form-control" id="inputPrice4" required>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputGuide">Tour Guide</label>
                    <select id="inputGuide" class="form-control" name="tourGuideId">
                      <option selected>Choose Tour Guide</option>
                      <?php
                       $sql= "select * from tour_guide";
                       $result=mysqli_query($mysqli , $sql);
                       while($guide_data = mysqli_fetch_array($result))
                       {
                         echo "<option name='tourGuideId'>".$guide_data['ID'].'-'. $guide_data['name'] ."</option>";
                       }
                      
                      ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Tour Details</label>
                  <textarea class="form-control" name="tourDetails" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="form-group">
                <label for="exampleFormControlFile1">Tour Images</label>
                 <!-- <input type="file" class="form-control-file" id="exampleFormControlFile1"> -->
                 <input type="file"  class="form-control-file"  name="fileToUpload_gallery[]" id="fileToUpload_gallery" multiple required >
                </div>
                <button type="submit" name="addTour" class="btn btn-primary">Add Tour</button>
              </form>
       
      </div>
  
    </div>



  </div>





  <!-- start tours body -->




  <!-- Footer -->
  <footer class="bg-dark text-light text-muted p-5">
    <div class="container  ">
      <div class="row">
        <div class="col-lg-5 col-md-12 col-sm-12">
          <div class="p-3 "><i class="fas fa-4x fa-plane-departure text-warning"></i>
            <span class="text-light font-weight-bold h2">OTA</span><span class="text-warning">.com</span>
          </div>
          <div class="p-3">
            <h4 class="mb-3 " >About us</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident rerum unde possimus molestias dolorem
              fuga, illo quis fugiat!</p>
          </div>
        </div>
        <div class="col-lg-2 col-md-12 col-sm-12">
          <div class="p-3">
            <h4 class="mb-2 text-light">Navigation</h4>
            <ul>
              <li class="p-1 "><a class="text-light text-muted" href="">Home</a></li>
              <li class="p-1"><a class="text-light text-muted" href="">Hotels</a></li>
              <li class="p-1"><a class="text-light text-muted" href="">Tours</a></li>
              <li class="p-1"><a class="text-light text-muted" href="">Cars</a></li>
              <li class="p-1"><a class="text-light text-muted" href="">Contact Us</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-5 col-md-12 col-sm-12">
          <div class="p-3">
            <h4 class="mb-2 text-light">Follow Us</h4>
            <div>
              <a href="" class="text-light text-muted"> <i class="fab  fa-facebook m-2"></i></a>
              <a href="" class="text-light text-muted"> <i class="fab fa-twitter m-2"></i></a>
              <a href="" class="text-light text-muted"> <i class="fab fa-instagram m-2"></i></a>
              <a href="" class="text-light text-muted"> <i class="fab fa-youtube m-2"></i></a>
            </div>

            <div class="p-3 mt-2">
              <button type="button" class="btn btn-outline-warning m-1">About Us</button>
              <button type="button" class="btn btn-outline-warning m-1">Contact Us</button>
              <button type="button" class="btn btn-outline-warning m-1">Sign Up</button>
              <button type="button" class="btn btn-outline-warning m-1">Favorite</button>

            </div>

          </div>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="text-center p-3">
            Copyright © 2021 Trip.com Travel Singapore Pte. Ltd. All rights reserved
            Site Operator: Trip.com Travel Singapore Pte. Ltd.
          </div>
        </div>
      </div>
    </div>
  </footer>







<script  src="./Resoures/Js/jquery-3.5.1.min.js" ></script>

  <script src="./Resoures/Js/bootstrap.bundle.js"></script>
  <script src="./Js/script.js"></script>
</body>

</html>

<?php 
session_destroy();
?>