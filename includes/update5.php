<!-- Footer -->
<?php include "../header.php"?>

<?php
   // checking if the variable is set or not and if set adding the set data value to variable userid
   if(isset($_GET['gallery_id']))
    {
      $userid = $_GET['gallery_id']; 
    }
      // SQL query to select all the data from the table where id = $userid
      $query="SELECT * FROM galleries WHERE id = $userid ";
      $view_users= mysqli_query($conn,$query);

      while($row = mysqli_fetch_assoc($view_users))
        {
          $id = $row['id'];                
          $name = $row['name'];        
          $street = $row['street'];   
          $city = $row['city'];  
          $zip_code = $row['zip_code'];  

        }
 
    //Processing form data when form is submitted
    if(isset($_POST['update5'])) 
    {
      $name = $_POST['name'];
      $street = $_POST['street'];
      $city = $_POST['city'];
      $zip_code = $_POST['zip_code'];
      
      // SQL query to update the data in user table where the id = $userid 
      $query = "UPDATE galleries SET name = '{$name}' , street = '{$street}', city = '{$city}', zip_code = '{$zip_code}' WHERE id = $userid";
      $update_user = mysqli_query($conn, $query);
      echo "<script type='text/javascript'>alert('User data updated successfully!')</script>";
    }             
?>

<h1 class="text-center">Update Galleries Details</h1>
  <div class="container ">
    <form action="" method="post">
      <div class="form-group">
        <label for="name" >Name</label>
        <input type="text" name="name" class="form-control" value="<?php echo $name  ?>">
      </div>

      <div class="form-group">
        <label for="street" >Street</label>
        <input type="text" name="street"  class="form-control" value="<?php echo $street  ?>">
      </div>
      
      <div class="form-group">
        <label for="city" >City</label>
        <input type="text" name="city"  class="form-control" value="<?php echo $city  ?>">
      </div> 

      <div class="form-group">
        <label for="zip_code" >Zip_code</label>
        <input type="text" name="zip_code"  class="form-control" value="<?php echo $zip_code  ?>">
      </div> 


      <div class="form-group">
         <input type="submit"  name="update5" class="btn btn-primary mt-2" value="update5">
      </div>
    </form>    
  </div>

    <!-- a BACK button to go to the home page -->
    <div class="container text-center mt-5">
      <a href="home5.php" class="btn btn-warning mt-5"> Back </a>
    <div>

<!-- Footer -->
<?php include "../footer.php" ?>