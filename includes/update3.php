<!-- Footer -->
<?php include "../header.php"?>

<?php
   // checking if the variable is set or not and if set adding the set data value to variable userid
   if(isset($_GET['exhibit_id']))
    {
      $userid = $_GET['exhibit_id']; 
    }
      // SQL query to select all the data from the table where id = $userid
      $query="SELECT * FROM exhibits WHERE id = $userid ";
      $view_users= mysqli_query($conn,$query);

      while($row = mysqli_fetch_assoc($view_users))
        {
          $id = $row['id'];                
          $title = $row['title'];        
          $artists = $row['artists'];   
          $type = $row['type'];  
          $rentable = $row['rentable']; 
          $picture = $row['picture']; 

        }
 
    //Processing form data when form is submitted
    if(isset($_POST['update3'])) 
    {
      $title = $_POST['title'];
      $artists = $_POST['artists'];
      $type = $_POST['type'];
      $rentable = $_POST['rentable'];
      $picture = $_POST['picture'];
      
      // SQL query to update the data in user table where the id = $userid 
      $query = "UPDATE exhibits SET title = '{$title}' , artists = '{$artists}', type = '{$type}', rentable = '{$rentable}', picture = '{$picture}' WHERE id = $userid";
      $update_user = mysqli_query($conn, $query);
      echo "<script type='text/javascript'>alert('User data updated successfully!')</script>";
    }             
?>

<h1 class="text-center">Update Exhibit Details</h1>
  <div class="container ">
    <form action="" method="post">
      <div class="form-group">
        <label for="title" >Title</label>
        <input type="text" name="title" class="form-control" value="<?php echo $title  ?>">
      </div>

      <div class="form-group">
        <label for="artists" >Artists</label>
        <input type="number" name="artists"  class="form-control" value="<?php echo $artists  ?>">
      </div>
      
      <div class="form-group">
        <label for="type" >Type</label>
        <input type="text" name="type"  class="form-control" value="<?php echo $type  ?>">
      </div> 

      <div class="form-group">
        <label for="rentable" >Rentable</label>
        <input type="number" name="rentable"  class="form-control" value="<?php echo $rentable  ?>">
      </div> 

      <div class="form-group">
        <label for="picture" >Picture</label>
        <input type="text" name="picture"  class="form-control" value="<?php echo $picture  ?>">
      </div> 


      <div class="form-group">
         <input type="submit"  name="update3" class="btn btn-primary mt-2" value="update3">
      </div>
    </form>    
  </div>

    <!-- a BACK button to go to the home page -->
    <div class="container text-center mt-5">
      <a href="home3.php" class="btn btn-warning mt-5"> Back </a>
    <div>

<!-- Footer -->
<?php include "../footer.php" ?>