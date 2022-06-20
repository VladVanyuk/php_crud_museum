<!-- Header -->
<?php  include '../header.php'?>

<h1 class="text-center">Exhibit Galleries</h1>
  <div class="container">
    <table class="table table-striped table-bordered table-hover">
      <thead class="table-dark">
        <tr>
        <th  scope="col">ID</th>
        <th  scope="col">Name</th>
        <th  scope="col">Street</th>
        <th  scope="col">City</th>
        <th  scope="col">Zip_code</th>
        </tr>  
      </thead>
        <tbody>
          <tr>
               
            <?php
              //  first we check using 'isset() function if the variable is set or not'
              //Processing form data when form is submitted
              if (isset($_GET['gallery_id'])) {
                  $userid = $_GET['gallery_id']; 

                  // SQL query to fetch the data where id=$userid & storing data in view_user 
                  $query="SELECT * FROM galleries WHERE id = {$userid} ";  
                  $view_users= mysqli_query($conn,$query);            

                  while($row = mysqli_fetch_assoc($view_users))
                  {
                        $id = $row['id'];                
                        $name = $row['name'];        
                        $street = $row['street'];   
                        $city = $row['city'];  
                        $zip_code = $row['zip_code']; 

                        echo "<tr >";
                        echo " <td >{$id}</td>";
                        echo " <td > {$name}</td>";
                        echo " <td > {$street}</td>";
                        echo " <td > {$city}</td>";
                        echo " <td > {$zip_code}</td>";
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
    <a href="home5.php" class="btn btn-warning mt-5"> Back </a>
  <div>

<!-- Footer -->
<?php include "../footer.php" ?>