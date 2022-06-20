<!-- Header -->
<?php include "../header.php"?>

  <div class="container">
    <h1 class="text-center" >Data to perform CRUD Operations</h1>
      <a href="create4.php" class='btn btn-outline-dark mb-2'> <i class="bi bi-person-plus"></i> Create New Exhibits history</a>

        <table class="table table-striped table-bordered table-hover">
          <thead class="table-dark">
            <tr>
              <th  scope="col">ID</th>
              <th  scope="col">Exhibit</th>
              <th  scope="col">Since_date</th>
              <th  scope="col">To_date</th>
              <th  scope="col">Exhibited_in</th>
              <th  scope="col">Rented_to</th>
              <th  scope="col" colspan="5" class="text-center">CRUD Operations</th>
            </tr>  
          </thead>
            <tbody>
              <tr>
 
          <?php
            $query="SELECT * FROM exhibits_history";               // SQL query to fetch all table data
            $view_users= mysqli_query($conn,$query);    // sending the query to the database

            //  displaying all the data retrieved from the database using while loop
            while($row= mysqli_fetch_assoc($view_users)){
              $id = $row['id'];                
              $exhibit = $row['exhibit'];        
              $since_date = $row['since_date'];   
              $to_date = $row['to_date'];  
              $exhibited_in = $row['exhibited_in']; 
              $rented_to = $row['rented_to'];                 

              echo "<tr >";
              echo " <th scope='row' >{$id}</th>";
              echo " <td > {$exhibit}</td>";
              echo " <td > {$since_date}</td>";
              echo " <td > {$to_date}</td>";
              echo " <td > {$exhibited_in}</td>";
              echo " <td > {$rented_to}</td>";

              echo " <td class='text-center'> <a href='view4.php?exhibit_history_id={$id}' class='btn btn-primary'> <i class='bi bi-eye'></i> View</a> </td>";

              echo " <td class='text-center' > <a href='update4.php?edit&exhibit_history_id={$id}' class='btn btn-secondary'><i class='bi bi-pencil'></i> EDIT</a> </td>";

              echo " <td  class='text-center'>  <a href='delete4.php?delete={$id}' class='btn btn-danger'> <i class='bi bi-trash'></i> DELETE</a> </td>";

              echo " <td  class='text-center'>  <a href='find4.php?find={$id}' class='btn btn-success'><i class='bi bi-zoom-in'></i> FIND</a> </td>";

              echo " <td  class='text-center'>  <a href='search4.php?search={$id}' class='btn btn-light'><i class='bi bi-zoom-in'></i> SEARCH</a> </td>";
              echo " </tr> ";
                  }  
                ?>
              </tr>  
            </tbody>
        </table>
  </div>

<!-- a BACK button to go to the index page -->
<div class="container text-center mt-5">
      <a href="../index.php" class="btn btn-warning mt-5"> Back </a>
    <div>

<!-- Footer -->
<?php include "../footer.php" ?>