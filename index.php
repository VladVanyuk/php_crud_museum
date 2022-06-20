<!-- Header -->
<?php include "header.php" ?>

<!-- body -->
<div class="container mt-5">
    <h1 class="text-center"> Welcome, Lets take a look at the database of the museum!</h1>
        <p class="text-center">
            Select a table:
        </p>
  <div class="container">
    <form action="includes/home.php" method="post">
        <div class="from-group text-center">
            <input type="submit" class="btn btn-primary mt-2" value="Users!">
        </div>
    </form>
    <form action="includes/home1.php" method="post">
        <div class="from-group text-center">
            <input type="submit" class="btn btn-primary mt-2" value="Rooms!">
        </div>
    </form>
    <form action="includes/home2.php" method="post">
        <div class="from-group text-center">
            <input type="submit" class="btn btn-primary mt-2" value="Artists!">
        </div>
    </form>
    <form action="includes/home3.php" method="post">
        <div class="from-group text-center">
            <input type="submit" class="btn btn-primary mt-2" value="Exhibits!">
        </div>
    </form>
    <form action="includes/home4.php" method="post">
        <div class="from-group text-center">
            <input type="submit" class="btn btn-primary mt-2" value="Exhibits_history!">
        </div>
    </form>
    <form action="includes/home5.php" method="post">
        <div class="from-group text-center">
            <input type="submit" class="btn btn-primary mt-2" value="Galleries!">
        </div>
    </form>
    <form action="includes/home6.php" method="post">
        <div class="from-group text-center">
            <input type="submit" class="btn btn-primary mt-2" value="Visitors!">
        </div>
    </form>
  </div>
</div>
<style>

    .topnav{
            background-color: #333;
            overflow: hidden;
        }
        .topnav a {
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 30px 30px;
            text-decoration: none;
            font-size: 18px;
        }
        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        .topnav a.active {
            background-color: #4CAF50;
            color: white;
        }
</style>
<!-- Footer -->
<?php include "footer.php" ?>