<!-- Header -->
<?php  include "../header.php" ?>

<?php 
  if(isset($_POST['create'])) 
    {
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $born_date = $_POST['born_date'];
        $die_date = $_POST['die_date'];
      
        // SQL query to insert user data into the users table
        $query= "INSERT INTO artists(name, surname, born_date, die_date) VALUES('{$name}','{$surname}','{$born_date}','{$die_date}')";
        $add_user = mysqli_query($conn,$query);
    
        // displaying proper message for the user to see whether the query executed perfectly or not 
          if (!$add_user) {
              echo "something went wrong ". mysqli_error($conn);
          }

          else { echo "<script type='text/javascript'>alert('User added successfully!')</script>";
              }         
    }
?>

<h1 class="text-center">Add Artist details </h1>
  <div class="container">
    <form action="" method="post">
      <div class="form-group">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name"  class="form-control">
      </div>

      <div class="form-group">
        <label for="surname" class="form-label">Surname</label>
        <input type="text" name="surname"  class="form-control">
      </div>

      <div class="form-group">
        <label for="born_date" class="form-label">Born_date</label>
        <input type="date" name="born_date"  class="form-control">
      </div>

      <div class="form-group">
        <label for="die_date" class="form-label">Die_date</label>
        <input type="date" name="die_date"  class="form-control">
      </div>
 

      <div class="form-group">
        <input type="submit"  name="create" class="btn btn-primary mt-2" value="submit">
      </div>
    </form> 
  </div>

   <!-- a BACK button to go to the home page -->
  <div class="container text-center mt-5">
    <a href="home2.php" class="btn btn-warning mt-5"> Back </a>
  <div>

<!-- Footer -->
<?php include "../footer.php" ?>