<!-- Header -->
<?php  include '../header.php'?>

<h1 class="text-center">Exhibit Visitors</h1>
  <div class="container">
    <table class="table table-striped table-bordered table-hover">
      <thead class="table-dark">
        <tr>
        <th  scope="col">ID</th>
        <th  scope="col">Visitor_name</th>
        <th  scope="col">Phone_num</th>
        </tr>  
      </thead>
        <tbody>
          <tr>
               
            <?php
              //  first we check using 'isset() function if the variable is set or not'
              //Processing form data when form is submitted
              if (isset($_GET['visitor_id'])) {
                  $userid = $_GET['visitor_id']; 

                  // SQL query to fetch the data where id=$userid & storing data in view_user 
                  $query="SELECT * FROM visitors WHERE id = {$userid} ";  
                  $view_users= mysqli_query($conn,$query);            

                  while($row = mysqli_fetch_assoc($view_users))
                  {
                        $id = $row['id'];                
                        $visitor_name = $row['visitor_name'];        
                        $phone_num = $row['phone_num']; 

                        echo "<tr >";
                        echo " <td >{$id}</td>";
                        echo " <td > {$visitor_name}</td>";
                        echo " <td > {$phone_num}</td>";
                        echo " </tr> ";
                  }
                }
            ?>
          </tr>  
        </tbody>
    </table>
  </div>

   <!-- a BACK Button to go to pervious page -->
  <div class="container text-center mt-5">
    <a href="home6.php" class="btn btn-warning mt-5"> Back </a>
  <div>

<!-- Footer -->
<?php include "../footer.php" ?>