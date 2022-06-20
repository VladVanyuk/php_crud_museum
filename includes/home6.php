<!-- Header -->
<?php include "../header.php"?>

  <div class="container">
    <h1 class="text-center" >Data to perform CRUD Operations</h1>
      <a href="create6.php" class='btn btn-outline-dark mb-2'> <i class="bi bi-person-plus"></i> Create New Visitors</a>

        <table class="table table-striped table-bordered table-hover">
          <thead class="table-dark">
            <tr>
              <th  scope="col">ID</th>
              <th  scope="col">Visitor_name</th>
              <th  scope="col">Phone_num</th>
              <th  scope="col" colspan="5" class="text-center">CRUD Operations</th>
            </tr>  
          </thead>
            <tbody>
              <tr>
 
          <?php
            $query="SELECT * FROM visitors";               // SQL query to fetch all table data
            $view_users= mysqli_query($conn,$query);    // sending the query to the database

            //  displaying all the data retrieved from the database using while loop
            while($row= mysqli_fetch_assoc($view_users)){
              $id = $row['id'];                
              $visitor_name = $row['visitor_name'];        
              $phone_num = $row['phone_num'];                  

              echo "<tr >";
              echo " <th scope='row' >{$id}</th>";
              echo " <td > {$visitor_name}</td>";
              echo " <td > {$phone_num}</td>";

              echo " <td class='text-center'> <a href='view6.php?visitor_id={$id}' class='btn btn-primary'> <i class='bi bi-eye'></i> View</a> </td>";

              echo " <td class='text-center' > <a href='update6.php?edit&visitor_id={$id}' class='btn btn-secondary'><i class='bi bi-pencil'></i> EDIT</a> </td>";

              echo " <td  class='text-center'>  <a href='delete6.php?delete={$id}' class='btn btn-danger'> <i class='bi bi-trash'></i> DELETE</a> </td>";

              echo " <td  class='text-center'>  <a href='find6.php?find={$id}' class='btn btn-success'><i class='bi bi-zoom-in'></i> FIND</a> </td>";

              echo " <td  class='text-center'>  <a href='search6.php?search={$id}' class='btn btn-light'><i class='bi bi-zoom-in'></i> SEARCH</a> </td>";
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