<!-- Header -->
<?php  include "../header.php" ?>

<?php 
  if(isset($_POST['create'])) 
    {
        $title = $_POST['title'];
        $artists = $_POST['artists'];
        $type = $_POST['type'];
        $rentable = $_POST['rentable'];
        $picture = $_POST['picture'];
      
        // SQL query to insert user data into the users table
        $query= "INSERT INTO exhibits(title, artists, type, rentable, picture) VALUES('{$title}','{$artists}','{$type}','{$rentable}','{$picture}')";
        $add_user = mysqli_query($conn,$query);
    
        // displaying proper message for the user to see whether the query executed perfectly or not 
          if (!$add_user) {
              echo "something went wrong ". mysqli_error($conn);
          }

          else { echo "<script type='text/javascript'>alert('User added successfully!')</script>";
              }         
    }
?>

<h1 class="text-center">Add Exhibits details </h1>
  <div class="container">
    <form action="" method="post">
      <div class="form-group">
        <label for="title" class="form-label">Title</label>
        <input type="text" name="title"  class="form-control">
      </div>

      <div class="form-group">
        <label for="artists" class="form-label">ID Artists</label>
        <input type="number" name="artists"  class="form-control">
      </div>

      <div class="form-group">
        <label for="type" class="form-label">Type</label>
        <input type="text" name="type"  class="form-control">
      </div>

      <div class="form-group">
        <label for="rentable" class="form-label">Rentable</label>
        <input type="number" name="rentable"  class="form-control">
      </div>

      <div class="form-group">
        <label for="picture" class="form-label">Picture</label>
        <input type="text" name="picture"  class="form-control">
      </div>
 

      <div class="form-group">
        <input type="submit"  name="create" class="btn btn-primary mt-2" value="submit">
      </div>
    </form> 
  </div>

   <!-- a BACK button to go to the home page -->
  <div class="container text-center mt-5">
    <a href="home3.php" class="btn btn-warning mt-5"> Back </a>
  <div>

<!-- Footer -->
<?php include "../footer.php" ?>