<?php
include 'database.php';
$customerObj=new database();
if(isset($_POST['submit'])){
  $customerObj->insertData($_POST);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Assignment 3: Add </title>
  <meta name="description" content="This week we will be building a CREATE and READ CRUD system with PDO">
  <meta name="robots" content="noindex, nofollow">
  <!--  Add our Google fonts  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&family=Roboto:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
  <!--  Add our Bootstrap  -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" >
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" ></script>
  <!--  Add our custom CSS  -->
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
</head>
<body>

    <?php
    include 'header.php';
    ?>
  
  <section class="a1">

  
  <section class="container">
    <div class="row">
      <div class="col-md-5 mx-auto">
        <div class="card">
          <div class="card-header bg-success text-white">
            <h2>Insert Information</h2>
          </div>
          <div class="card-body bg-light">
            <form action="add.php" method="POST">
              <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" placeholder="Enter name" required="">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Enter email" required="">
              </div>
              <div class="form-group">
                <label for="age">Age:</label>
                <input type="text" class="form-control" name="age" placeholder="Enter your Age" required="">
              </div>
              <div class="form-group">
                <label for="phone">Contact Number:</label>
                <input type="tel" class="form-control" name="phone" placeholder="Enter your contact" required="">
              </div>
              <div class="form-group">
                <label for="bio">Bio:</label>
                <textarea class="form-control" name="bio" placeholder="Enter your Bio" required="" ></textarea>
              </div>
              
              <input type="submit" name="submit" class="btn btn-success" style="float:right;" value="Submit">
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</section>
  <!-- Footer start -->
  <div >
  
  <?php
     include 'footer.php';
     ?>
  
</div>
<!-- Footer end -->
</body>
</html>
