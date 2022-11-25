<?php
//Database file
include 'database.php';
$customerObj= new database();
//delete function
if(isset($_GET['deletedID']) && !empty($_GET['deletedID'])){
  $deletedId = $_GET['deletedID'];
  $customerObj->deleteRecord($deletedId);
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assignment 3</title>
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
    include 'header.php';//Global header
    ?>
  
  <section class="masthead">
		<div>
			<h1>!!Welcome to the Dark Web!!</h1>
		</div>
	</section>
  <main class="container">
    <?php
    if(isset($_GET['msg1']) == "insert"){
      echo"<div class='alert alert-success alert-dismissible'>
  <button type='button' class ='close' data-dismiss='alert'>X</button>
  Your record has been added
  </div>";
    }
    if(isset($_GET['msg2']) == "update"){
      echo"<div class='alert alert-success alert-dismissible'>
   <button type='button' class ='close' data-dismiss='alert'>X</button>
    Your record has been updated
   </div>";
    }
  if(isset($_GET['msg3']) == "delete"){
    echo"<div class='alert alert-success alert-dismissible'>
  <button type='button' class ='close' data-dismiss='alert'>X</button>
  Your record has been deleted
      </div>";
    }
    ?>
   <h2>Congratulations on finding us!</h2>
    <marquee direction="right"><img src="./img/3.jpeg" alt=""><img src="./img/6.jpg" alt="Hacker 1"><span><img src="./img/5.jpg" alt="hacker2">
</marquee>
    <h3>You have been selected to be the part of the Black Hat Hackers</h3>
    <marquee><img src="./img/1.jpg" alt="hack1"><img src="./img/2.jpg" alt="hack2"><img src="./img/4.jpg" alt="hack4"></marquee>
   <marquee direction="up"> <p>Please create your profile and be part of an elite group of programmers amongst the world</p></marquee>
    <section>
      <h4>View Profile
      <a href="add.php" style="float:right;"><button class="btn btn-success"><i class="fas fa-plus"></i></button></a>
      </h2>
      <table class="table  table-bordered table-hover table-dark table-striped" id=myTable>
        <thead>
        <tr>
          <th>Id</th>
          <th>Name</th>
          <th>Email</th>
          <th>Age</th>
          <th>Phone number</th>
          <th>Bio</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $info =$customerObj->displayData();
        foreach($info as $customer){
          ?>
          <tr>
            <td><?php echo $customer['id'];?></td>
            <td><?php echo $customer['name'];?></td>
            <td><?php echo $customer['email'];?></td>
            <td><?php echo $customer['age'];?></td>
            <td><?php echo $customer['phone'];?></td>
            <td><?php echo $customer['bio'];?></td>
            <td>
              <button class="btn btn-primary mr-2">
                <a href="edit.php?editId=<?php echo $customer['id']; ?>">
              <i class="fa fa-pencil text-white"></i>
              </a>
              </button> 
              <button class="btn btn-danger mr-2">
                <a href="index.php?deleteId=<?php echo $customer['id']; ?>">
              <i class="fa fa-trash text-white"></i>
              </a>
              </button>
            </td>
          </tr>
          <?php
        }
        ?>
        </tbody>
      </table>
    </section>
    <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBn+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  <script>
    $(document).ready( function () {
    $('#myTable').DataTable();//Search in the function
});
</script>
</main>
      <!-- Footer start -->
      <div >
  
     <?php
     include 'footer.php';//Global Footer
     ?>
</div>
<!-- Footer end -->
</body>
</html>
