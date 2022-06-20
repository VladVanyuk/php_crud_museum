<!-- Footer -->
<?php include "../header.php"?>

<?php
   // checking if the variable is set or not and if set adding the set data value to variable userid
   if(isset($_GET['artist_id']))
    {
      $userid = $_GET['artist_id']; 
    }
      // SQL query to select all the data from the table where id = $userid
      $query="SELECT * FROM artists WHERE id = $userid ";
      $view_users= mysqli_query($conn,$query);

      while($row = mysqli_fetch_assoc($view_users))
        {
          $id = $row['id'];
          $name = $row['name'];
          $surname = $row['surname'];
          $born_date = $row['born_date'];
          $die_date = $row['die_date'];

        }
 
    //Processing form data when form is submitted
    if(isset($_POST['update2'])) 
    {
      $name = $_POST['name'];
      $surname = $_POST['surname'];
      $born_date = $_POST['born_date'];
      $die_date = $_POST['die_date'];
      
      // SQL query to update the data in user table where the id = $userid 
      $query = "UPDATE artists SET name = '{$name}' , surname = '{$surname}', born_date = '{$born_date}', die_date = '{$die_date}' WHERE id = $userid";
      $update_user = mysqli_query($conn, $query);
      echo "<script type='text/javascript'>alert('User data updated successfully!')</script>";
    }             
?>

<h1 class="text-center">Update Artist Details</h1>
  <div class="container ">
    <form action="" method="post">
      <div class="form-group">
        <label for="name" >Gallery</label>
        <input type="text" name="name" class="form-control" value="<?php echo $name  ?>">
      </div>

      <div class="form-group">
        <label for="surname" >Room</label>
        <input type="text" name="surname"  class="form-control" value="<?php echo $surname  ?>">
      </div>
      
      <div class="form-group">
        <label for="born_date" >Room</label>
        <input type="date" name="born_date"  class="form-control" value="<?php echo $born_date  ?>">
      </div> 

      <div class="form-group">
        <label for="die_date" >Room</label>
        <input type="date" name="die_date"  class="form-control" value="<?php echo $die_date  ?>">
      </div> 

      <div class="form-group">
         <input type="submit"  name="update2" class="btn btn-primary mt-2" value="update2">
      </div>
    </form>    
  </div>

    <!-- a BACK button to go to the home page -->
    <div class="container text-center mt-5">
      <a href="home2.php" class="btn btn-warning mt-5"> Back </a>
    <div>

<!-- Footer -->
<?php include "../footer.php" ?>