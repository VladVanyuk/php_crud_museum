<!-- Header -->
<?php  include "../header.php" ?>

<?php 
  if(isset($_POST['create'])) 
    {
        $name = $_POST['name'];
        $street = $_POST['street'];
        $city = $_POST['city'];
        $zip_code = $_POST['zip_code'];
      
        // SQL query to insert user data into the users table
        $query= "INSERT INTO galleries(name, street, city, zip_code) VALUES('{$name}','{$street}','{$city}','{$zip_code}')";
        $add_user = mysqli_query($conn,$query);
    
        // displaying proper message for the user to see whether the query executed perfectly or not 
          if (!$add_user) {
              echo "something went wrong ". mysqli_error($conn);
          }

          else { echo "<script type='text/javascript'>alert('User added successfully!')</script>";
              }         
    }
?>

<h1 class="text-center">Add Gallery details </h1>
  <div class="container">
    <form action="" method="post">
      <div class="form-group">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name"  class="form-control">
      </div>

      <div class="form-group">
        <label for="street" class="form-label">Street</label>
        <input type="text" name="street"  class="form-control">
      </div>

      <div class="form-group">
        <label for="city" class="form-label">City</label>
        <input type="text" name="city"  class="form-control">
      </div>

      <div class="form-group">
        <label for="zip_code" class="form-label">Zip_code</label>
        <input type="text" name="zip_code"  class="form-control">
      </div>
 
      <div class="form-group">
        <input type="submit"  name="create" class="btn btn-primary mt-2" value="submit">
      </div>
    </form> 
  </div>

   <!-- a BACK button to go to the home page -->
  <div class="container text-center mt-5">
    <a href="home5.php" class="btn btn-warning mt-5"> Back </a>
  <div>

<!-- Footer -->
<?php include "../footer.php" ?>