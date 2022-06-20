<!-- Header -->
<?php  include '../header.php'?>

<h1 class="text-center">Exhibit Details</h1>
  <div class="container">
    <table class="table table-striped table-bordered table-hover">
      <thead class="table-dark">
        <tr>
        <th  scope="col">ID</th>
        <th  scope="col">Title</th>
        <th  scope="col">Artists</th>
        <th  scope="col">Type</th>
        <th  scope="col">Rentable</th>
        <th  scope="col">Picture</th>
        </tr>  
      </thead>
        <tbody>
          <tr>
               
            <?php
              //  first we check using 'isset() function if the variable is set or not'
              //Processing form data when form is submitted
              if (isset($_GET['exhibit_id'])) {
                  $userid = $_GET['exhibit_id']; 

                  // SQL query to fetch the data where id=$userid & storing data in view_user 
                  $query="SELECT * FROM exhibits WHERE id = {$userid} ";  
                  $view_users= mysqli_query($conn,$query);            

                  while($row = mysqli_fetch_assoc($view_users))
                  {
                        $id = $row['id'];                
                        $title = $row['title'];        
                        $artists = $row['artists'];   
                        $type = $row['type'];  
                        $rentable = $row['rentable']; 
                        $picture = $row['picture']; 

                        echo "<tr >";
                        echo " <td >{$id}</td>";
                        echo " <td > {$title}</td>";
                        echo " <td > {$artists}</td>";
                        echo " <td > {$type}</td>";
                        echo " <td > {$rentable}</td>";
                        echo " <td > {$picture}</td>";
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
    <a href="home3.php" class="btn btn-warning mt-5"> Back </a>
  <div>

<!-- Footer -->
<?php include "../footer.php" ?>