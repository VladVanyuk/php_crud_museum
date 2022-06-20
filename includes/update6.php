<!-- Footer -->
<?php include "../header.php"?>

<?php
   // checking if the variable is set or not and if set adding the set data value to variable userid
   if(isset($_GET['visitor_id']))
    {
      $userid = $_GET['visitor_id']; 
    }
      // SQL query to select all the data from the table where id = $userid
      $query="SELECT * FROM visitors WHERE id = $userid ";
      $view_users= mysqli_query($conn,$query);

      while($row = mysqli_fetch_assoc($view_users))
        {
            $id = $row['id'];                
            $visitor_name = $row['visitor_name'];        
            $phone_num = $row['phone_num']; 

        }
 
    //Processing form data when form is submitted
    if(isset($_POST['update6'])) 
    {
        $visitor_name = $_POST['visitor_name'];
        $phone_num = $_POST['phone_num'];
      
      // SQL query to update the data in user table where the id = $userid 
      $query = "UPDATE visitors SET visitor_name = '{$visitor_name}' , phone_num = '{$phone_num}' WHERE id = $userid";
      $update_user = mysqli_query($conn, $query);
      echo "<script type='text/javascript'>alert('User data updated successfully!')</script>";
    }             
?>

<h1 class="text-center">Update Visitor Details</h1>
  <div class="container ">
    <form action="" method="post">
      <div class="form-group">
        <label for="visitor_name" >Visitor_name</label>
        <input type="text" name="visitor_name" class="form-control" value="<?php echo $visitor_name  ?>">
      </div>

      <div class="form-group">
        <label for="phone_num" >Phone_num</label>
        <input type="text" name="phone_num"  class="form-control" value="<?php echo $phone_num  ?>">
      </div>


      <div class="form-group">
         <input type="submit"  name="update6" class="btn btn-primary mt-2" value="update6">
      </div>
    </form>    
  </div>

    <!-- a BACK button to go to the home page -->
    <div class="container text-center mt-5">
      <a href="home6.php" class="btn btn-warning mt-5"> Back </a>
    <div>

<!-- Footer -->
<?php include "../footer.php" ?>