<!-- Footer -->
<?php include "../header.php"?>

<?php
   // checking if the variable is set or not and if set adding the set data value to variable userid
   if(isset($_GET['exhibit_history_id']))
    {
      $userid = $_GET['exhibit_history_id']; 
    }
      // SQL query to select all the data from the table where id = $userid
      $query="SELECT * FROM exhibits_history WHERE id = $userid ";
      $view_users= mysqli_query($conn,$query);

      while($row = mysqli_fetch_assoc($view_users))
        {
          $id = $row['id'];                
          $exhibit = $row['exhibit'];        
          $since_date = $row['since_date'];   
          $to_date = $row['to_date'];  
          $exhibited_in = $row['exhibited_in']; 
          $rented_to = $row['rented_to'];  

        }
 
    //Processing form data when form is submitted
    if(isset($_POST['update4'])) 
    {
      $exhibit = $_POST['exhibit'];
      $since_date = $_POST['since_date'];
      $to_date = $_POST['to_date'];
      $exhibited_in = $_POST['exhibited_in'];
      $rented_to = $_POST['rented_to'];
      
      // SQL query to update the data in user table where the id = $userid 
      $query = "UPDATE exhibits_history SET exhibit = '{$exhibit}' , since_date = '{$since_date}', to_date = '{$to_date}', exhibited_in = '{$exhibited_in}', rented_to = '{$rented_to}' WHERE id = $userid";
      $update_user = mysqli_query($conn, $query);
      echo "<script type='text/javascript'>alert('User data updated successfully!')</script>";
    }             
?>

<h1 class="text-center">Update Exhibit history Details</h1>
  <div class="container ">
    <form action="" method="post">
      <div class="form-group">
        <label for="exhibit" >Exhibit</label>
        <input type="number" name="exhibit" class="form-control" value="<?php echo $exhibit  ?>">
      </div>

      <div class="form-group">
        <label for="since_date" >Since_date</label>
        <input type="date" name="since_date"  class="form-control" value="<?php echo $since_date  ?>">
      </div>
      
      <div class="form-group">
        <label for="to_date" >To_date</label>
        <input type="date" name="to_date"  class="form-control" value="<?php echo $to_date  ?>">
      </div> 

      <div class="form-group">
        <label for="exhibited_in" >Exhibited_in</label>
        <input type="number" name="exhibited_in"  class="form-control" value="<?php echo $exhibited_in  ?>">
      </div> 

      <div class="form-group">
        <label for="rented_to" >Rented_to</label>
        <input type="number" name="rented_to"  class="form-control" value="<?php echo $rented_to  ?>">
      </div> 


      <div class="form-group">
         <input type="submit"  name="update4" class="btn btn-primary mt-2" value="update4">
      </div>
    </form>    
  </div>

    <!-- a BACK button to go to the home page -->
    <div class="container text-center mt-5">
      <a href="home4.php" class="btn btn-warning mt-5"> Back </a>
    <div>

<!-- Footer -->
<?php include "../footer.php" ?>