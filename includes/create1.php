<!-- Header -->
<?php  include "../header.php" ?>

<?php 
  if(isset($_POST['create'])) 
    {
        $gallery = $_POST['gallery'];
        $room = $_POST['room'];
      
        // SQL query to insert user data into the users table
        $query= "INSERT INTO rooms(gallery, room) VALUES('{$gallery}','{$room}')";
        $add_user = mysqli_query($conn,$query);
    
        // displaying proper message for the user to see whether the query executed perfectly or not 
          if (!$add_user) {
              echo "something went wrong ". mysqli_error($conn);
          }

          else { echo "<script type='text/javascript'>alert('User added successfully!')</script>";
              }         
    }
?>

<h1 class="text-center">Add Room details </h1>
  <div class="container">
    <form action="" method="post">
      <div class="form-group">
        <label for="gallery" class="form-label">Gallery</label>
        <input type="number" name="gallery"  class="form-control">
      </div>

      <div class="form-group">
        <label for="room" class="form-label">Room</label>
        <input type="text" name="room"  class="form-control">
      </div>
 

      <div class="form-group">
        <input type="submit"  name="create" class="btn btn-primary mt-2" value="submit">
      </div>
    </form> 
  </div>

   <!-- a BACK button to go to the home page -->
  <div class="container text-center mt-5">
    <a href="home1.php" class="btn btn-warning mt-5"> Back </a>
  <div>

<!-- Footer -->
<?php include "../footer.php" ?>