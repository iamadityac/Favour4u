<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>favour4u</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="css/form.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="spbuttons.php">favour4u</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            
            <li class="nav-item">
              <a class="nav-link" href="contactsp.php">Contact</a>
            </li>    
            <?php
          session_start();
            if(!isset($_SESSION['name']))
            {
              
            }
            else
            {
                echo '<li class="nav-item">'. 
                            '<a class="nav-link" href="profilesp.php">Profile</a>'.
                          '</li>';
                echo '<li class="nav-item">'. 
                            '<a class="nav-link" href="logout.php">Logout</a>'.
                          '</li>';
            }
            ?>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <h1 class="mt-4 mb-3">Services</h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href=#>Home</a>
        </li>
        <li class="breadcrumb-item active">Services</li>
      </ol>
      
      <table class="table table-bordered ">
        <tr>
          <th>Name</th>
          <th>Category</th> 
          <th>Price</th> 
          <th>Description</th>
        </tr>
          <?php
              session_start();  
              include("connection.php");

            	$query1="SELECT * FROM service where spid= '".mysqli_real_escape_string($link, $_SESSION['spid'])."' " ;

                if ($result = mysqli_query($link, $query1))
                {
                   while($row= mysqli_fetch_array($result))
                   {
                     echo "<tr>";
                     echo "<td>".$row['name'] ."</td>"."<td>".$row['category'] ."</td>"."<td>".$row['price'] ."</td>"."<td>".$row['description'] ."</td>";
                     echo "</tr>";
                   }
                }
          ?>

      </table>

    </div>
    <!-- /.container -->
    <!-- footer -->
    <?php
      include ("./abstract/footer.php");
    ?>
    <!-- footer -->
  </body>

</html>
