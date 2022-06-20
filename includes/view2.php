<!-- Header -->
<?php  include '../header.php'?>

<h1 class="text-center">Artist Details</h1>
  <div class="container">
    <table class="table table-striped table-bordered table-hover">
      <thead class="table-dark">
        <tr>
        <th  scope="col">ID</th>
        <th  scope="col">Name</th>
        <th  scope="col">Surname</th>
        <th  scope="col">Born_date</th>
        <th  scope="col">Die_date</th>
        </tr>  
      </thead>
        <tbody>
          <tr>
               
            <?php
              //  first we check using 'isset() function if the variable is set or not'
              //Processing form data when form is submitted
              if (isset($_GET['artist_id'])) {
                  $userid = $_GET['artist_id']; 

                  // SQL query to fetch the data where id=$userid & storing data in view_user 
                  $query="SELECT * FROM artists WHERE id = {$userid} ";  
                  $view_users= mysqli_query($conn,$query);            

                  while($row = mysqli_fetch_assoc($view_users))
                  {
                        $id = $row['id'];
                        $name = $row['name'];
                        $surname = $row['surname'];
                        $born_date = $row['born_date'];
                        $die_date = $row['die_date'];

                        echo "<tr >";
                        echo " <td >{$id}</td>";
                        echo " <td > {$name}</td>";
                        echo " <td > {$surname}</td>";
                        echo " <td > {$born_date}</td>";
                        echo " <td > {$die_date}</td>";
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
    <a href="home2.php" class="btn btn-warning mt-5"> Back </a>
  <div>

<!-- Footer -->
<?php include "../footer.php" ?>