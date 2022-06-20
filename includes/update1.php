<!-- Footer -->
<?php include "../header.php"?>

<?php
   // checking if the variable is set or not and if set adding the set data value to variable userid
   if(isset($_GET['room_id']))
    {
      $userid = $_GET['room_id']; 
    }
      // SQL query to select all the data from the table where id = $userid
      $query="SELECT * FROM rooms WHERE id = $userid ";
      $view_users= mysqli_query($conn,$query);

      while($row = mysqli_fetch_assoc($view_users))
        {
          $id = $row['id'];
          $gallery = $row['gallery'];
          $room = $row['room'];

        }
 
    //Processing form data when form is submitted
    if(isset($_POST['update1'])) 
    {
      $gallery = $_POST['gallery'];
      $room = $_POST['room'];
      
      // SQL query to update the data in user table where the id = $userid 
      $query = "UPDATE rooms SET gallery = '{$gallery}' , room = '{$room}' WHERE id = $userid";
      $update_user = mysqli_query($conn, $query);
      echo "<script type='text/javascript'>alert('User data updated successfully!')</script>";
    }             
?>

<h1 class="text-center">Update Room Details</h1>
  <div class="container ">
    <form action="" method="post">
      <div class="form-group">
        <label for="gallery" >Gallery</label>
        <input type="number" name="gallery" class="form-control" value="<?php echo $gallery  ?>">
      </div>

      <div class="form-group">
        <label for="room" >Room</label>
        <input type="text" name="room"  class="form-control" value="<?php echo $room  ?>">
      </div> 

      <div class="form-group">
         <input type="submit"  name="update1" class="btn btn-primary mt-2" value="update1">
      </div>
    </form>    
  </div>

    <!-- a BACK button to go to the home page -->
    <div class="container text-center mt-5">
      <a href="home1.php" class="btn btn-warning mt-5"> Back </a>
    <div>

<!-- Footer -->
<?php include "../footer.php" ?>