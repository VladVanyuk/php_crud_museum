<!-- Header -->
<?php  include "../header.php" ?>

<?php 
  if(isset($_POST['create'])) 
    {
        $exhibit = $_POST['exhibit'];
        $since_date = $_POST['since_date'];
        $to_date = $_POST['to_date'];
        $exhibited_in = $_POST['exhibited_in'];
        $rented_to = $_POST['rented_to'];
      
        // SQL query to insert user data into the users table
        $query= "INSERT INTO exhibits_history(exhibit, since_date, to_date, exhibited_in, rented_to) VALUES('{$exhibit}','{$since_date}','{$to_date}','{$exhibited_in}','{$rented_to}')";
        $add_user = mysqli_query($conn,$query);
    
        // displaying proper message for the user to see whether the query executed perfectly or not 
          if (!$add_user) {
              echo "something went wrong ". mysqli_error($conn);
          }

          else { echo "<script type='text/javascript'>alert('User added successfully!')</script>";
              }         
    }
?>

<h1 class="text-center">Add Exhibits history details </h1>
  <div class="container">
    <form action="" method="post">
      <div class="form-group">
        <label for="exhibit" class="form-label">Exhibit</label>
        <input type="number" name="exhibit"  class="form-control">
      </div>

      <div class="form-group">
        <label for="since_date" class="form-label">Since_date</label>
        <input type="date" name="since_date"  class="form-control">
      </div>

      <div class="form-group">
        <label for="to_date" class="form-label">To_date</label>
        <input type="date" name="to_date"  class="form-control">
      </div>

      <div class="form-group">
        <label for="exhibited_in" class="form-label">Exhibited_in</label>
        <input type="number" name="exhibited_in"  class="form-control">
      </div>

      <div class="form-group">
        <label for="rented_to" class="form-label">Rented_to</label>
        <input type="number" name="rented_to"  class="form-control">
      </div>
 

      <div class="form-group">
        <input type="submit"  name="create" class="btn btn-primary mt-2" value="submit">
      </div>
    </form> 
  </div>

   <!-- a BACK button to go to the home page -->
  <div class="container text-center mt-5">
    <a href="home4.php" class="btn btn-warning mt-5"> Back </a>
  <div>

<!-- Footer -->
<?php include "../footer.php" ?>