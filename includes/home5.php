<!-- Header -->
<?php include "../header.php"?>

  <div class="container">
    <h1 class="text-center" >Data to perform CRUD Operations</h1>
      <a href="create5.php" class='btn btn-outline-dark mb-2'> <i class="bi bi-person-plus"></i> Create New Galleries</a>

        <table class="table table-striped table-bordered table-hover">
          <thead class="table-dark">
            <tr>
              <th  scope="col">ID</th>
              <th  scope="col">Name</th>
              <th  scope="col">Street</th>
              <th  scope="col">City</th>
              <th  scope="col">Zip_code</th>
              <th  scope="col" colspan="5" class="text-center">CRUD Operations</th>
            </tr>  
          </thead>
            <tbody>
              <tr>
 
          <?php
            $query="SELECT * FROM galleries";               // SQL query to fetch all table data
            $view_users= mysqli_query($conn,$query);    // sending the query to the database

            //  displaying all the data retrieved from the database using while loop
            while($row= mysqli_fetch_assoc($view_users)){
              $id = $row['id'];                
              $name = $row['name'];        
              $street = $row['street'];   
              $city = $row['city'];  
              $zip_code = $row['zip_code'];                

              echo "<tr >";
              echo " <th scope='row' >{$id}</th>";
              echo " <td > {$name}</td>";
              echo " <td > {$street}</td>";
              echo " <td > {$city}</td>";
              echo " <td > {$zip_code}</td>";

              echo " <td class='text-center'> <a href='view5.php?gallery_id={$id}' class='btn btn-primary'> <i class='bi bi-eye'></i> View</a> </td>";

              echo " <td class='text-center' > <a href='update5.php?edit&gallery_id={$id}' class='btn btn-secondary'><i class='bi bi-pencil'></i> EDIT</a> </td>";

              echo " <td  class='text-center'>  <a href='delete5.php?delete={$id}' class='btn btn-danger'> <i class='bi bi-trash'></i> DELETE</a> </td>";

              echo " <td  class='text-center'>  <a href='find5.php?find={$id}' class='btn btn-success'><i class='bi bi-zoom-in'></i> FIND</a> </td>";

              echo " <td  class='text-center'>  <a href='search5.php?search={$id}' class='btn btn-light'><i class='bi bi-zoom-in'></i> SEARCH</a> </td>";
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