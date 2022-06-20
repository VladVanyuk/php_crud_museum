<!-- Header -->
<?php  include '../header.php'?>

<h1 class="text-center">Exhibit History Details</h1>
  <div class="container">
    <table class="table table-striped table-bordered table-hover">
      <thead class="table-dark">
        <tr>
        <th  scope="col">ID</th>
        <th  scope="col">Exhibit</th>
        <th  scope="col">Since_date</th>
        <th  scope="col">To_date</th>
        <th  scope="col">Exhibited_in</th>
        <th  scope="col">Rented_to</th>
        </tr>  
      </thead>
        <tbody>
          <tr>
               
            <?php
              //  first we check using 'isset() function if the variable is set or not'
              //Processing form data when form is submitted
              if (isset($_GET['exhibit_history_id'])) {
                  $userid = $_GET['exhibit_history_id']; 

                  // SQL query to fetch the data where id=$userid & storing data in view_user 
                  $query="SELECT * FROM exhibits_history WHERE id = {$userid} ";  
                  $view_users= mysqli_query($conn,$query);            

                  while($row = mysqli_fetch_assoc($view_users))
                  {
                        $id = $row['id'];                
                        $exhibit = $row['exhibit'];        
                        $since_date = $row['since_date'];   
                        $to_date = $row['to_date'];  
                        $exhibited_in = $row['exhibited_in']; 
                        $rented_to = $row['rented_to']; 

                        echo "<tr >";
                        echo " <td >{$id}</td>";
                        echo " <td > {$exhibit}</td>";
                        echo " <td > {$since_date}</td>";
                        echo " <td > {$to_date}</td>";
                        echo " <td > {$exhibited_in}</td>";
                        echo " <td > {$rented_to}</td>";
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
    <a href="home4.php" class="btn btn-warning mt-5"> Back </a>
  <div>

<!-- Footer -->
<?php include "../footer.php" ?>