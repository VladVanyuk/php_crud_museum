<!-- Header -->
<?php  include "../header.php" ?>

<?php 
  if(isset($_POST['create'])) 
    {
        $visitor_name = $_POST['visitor_name'];
        $phone_num = $_POST['phone_num'];
      
        // SQL query to insert user data into the users table
        $query= "INSERT INTO visitors(visitor_name, phone_num ) VALUES('{$visitor_name}','{$phone_num}')";
        $add_user = mysqli_query($conn,$query);
    
        // displaying proper message for the user to see whether the query executed perfectly or not 
          if (!$add_user) {
              echo "something went wrong ". mysqli_error($conn);
          }

          else { echo "<script type='text/javascript'>alert('User added successfully!')</script>";
              }         
    }
?>

<h1 class="text-center">Add Visitor details </h1>
  <div class="container">
    <form action="" method="post">
      <div class="form-group">
        <label for="visitor_name" class="form-label">Visitor_name</label>
        <input type="text" name="visitor_name"  class="form-control">
      </div>

      <div class="form-group">
        <label for="phone_num" class="form-label">Phone_num</label>
        <input type="text" name="phone_num"  class="form-control">
      </div>

 
      <div class="form-group">
        <input type="submit"  name="create" class="btn btn-primary mt-2" value="submit">
      </div>
    </form> 
  </div>

   <!-- a BACK button to go to the home page -->
  <div class="container text-center mt-5">
    <a href="home6.php" class="btn btn-warning mt-5"> Back </a>
  <div>

<!-- Footer -->
<?php include "../footer.php" ?>