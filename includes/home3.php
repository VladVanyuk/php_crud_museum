<!-- Header -->
<?php include "../header.php"?>

  <div class="container">
    <h1 class="text-center" >Data to perform CRUD Operations</h1>
      <a href="create3.php" class='btn btn-outline-dark mb-2'> <i class="bi bi-person-plus"></i> Create New Exhibits</a>

        <table class="table table-striped table-bordered table-hover">
          <thead class="table-dark">
            <tr>
              <th  scope="col">ID</th>
              <th  scope="col">Title</th>
              <th  scope="col">Artist</th>
              <th  scope="col">Type</th>
              <th  scope="col">Rentable</th>
              <th  scope="col">Picture</th>
              <th  scope="col" colspan="5" class="text-center">CRUD Operations</th>
            </tr>  
          </thead>
            <tbody>
              <tr>
 
          <?php
            $query="SELECT * FROM exhibits";               // SQL query to fetch all table data
            $view_users= mysqli_query($conn,$query);    // sending the query to the database

            //  displaying all the data retrieved from the database using while loop
            while($row= mysqli_fetch_assoc($view_users)){
              $id = $row['id'];                
              $title = $row['title'];        
              $artist = $row['artist'];   
              $type = $row['type'];  
              $rentable = $row['rentable']; 
              $picture = $row['picture'];                 

              echo "<tr >";
              echo " <th scope='row' >{$id}</th>";
              echo " <td > {$title}</td>";
              echo " <td > {$artist}</td>";
              echo " <td > {$type}</td>";
              echo " <td > {$rentable}</td>";
              echo " <td > {$picture}</td>";

              echo " <td class='text-center'> <a href='view3.php?exhibit_id={$id}' class='btn btn-primary'> <i class='bi bi-eye'></i> View</a> </td>";

              echo " <td class='text-center' > <a href='update3.php?edit&exhibit_id={$id}' class='btn btn-secondary'><i class='bi bi-pencil'></i> EDIT</a> </td>";

              echo " <td  class='text-center'>  <a href='delete3.php?delete={$id}' class='btn btn-danger'> <i class='bi bi-trash'></i> DELETE</a> </td>";

              echo " <td  class='text-center'>  <a href='find3.php?find={$id}' class='btn btn-success'><i class='bi bi-zoom-in'></i> FIND</a> </td>";

              echo " <td  class='text-center'>  <a href='search3.php?search={$id}' class='btn btn-light'><i class='bi bi-zoom-in'></i> SEARCH</a> </td>";
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