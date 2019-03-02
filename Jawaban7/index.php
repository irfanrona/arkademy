<!DOCTYPE html>
<?php 
	include "koneksi.php";
  //include 'modul.php';
  //$query  = new Query();
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter | Arkademy Batch 9</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Irfan Rona">

    <!-- Le styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>

    
    <!-- Le fav and touch icons -->
    <!--<link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">-->
  </head>

  <body>

    <div class="container">

      <h1>Database Gudang</h1>
      <p>Menampilkan query di soal nomor 6.</p>

      <?php
        
      	$sql = "SELECT categories.id_cat AS id, categories.name AS category_name, group_concat(products.name separator ', ') AS products FROM products,categories WHERE categories.id_cat = products.id_cat GROUP BY products.id_cat;";

        //$sql = "SELECT id_cat FROM categories;";


      	$result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) > 0) {
            ?>
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>id</th>
                  <th>category_name</th>
                  <th>products</th>
                </tr>
              </thead>
              <tbody>
            <?php
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
              ?>
                <tr>
                  <td><?php echo $row["id"]; ?></td>
                  <td><?php echo $row["category_name"]; ?></td>
                  <td><?php echo $row["products"]; ?></td>
                </tr>
              <?php
            }
        } else {
            echo "0 results";
        }
      ?>
        </tbody>
      </table class="table table-hover">
      
      <h2>Tambah category</h2>
      <div class="row span-8">
      <form action="index.php" method="post">
        <table class="table">
        <tbody>
          <tr>
          <td>Nama category :</td>
          <td><input type="text" name="name"></input></td>
          <td><input type="submit" name="txtbutton" value="SUBMIT"></input></td>
        </tr>
        </tbody>
      </div>
      <?php
        if (isset($_POST['txtbutton'])) {
          $set_category = $_POST['name'];
          $id = '';
          $sql="INSERT INTO categories (id_cat, name) VALUES ('$id','$set_category');";

          if (mysqli_query($conn, $sql)) {
              echo "New record created successfully";
          } else {
              echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }
        }
        
      ?>
      

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.min.js"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//code.jquery.com/jquery.js"></script>

  </body>
</html>
