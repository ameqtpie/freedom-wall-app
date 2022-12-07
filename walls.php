<?php 
 include 'config/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Feeds | Freedom Wall</title>
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-danger mb-4">
    <div class="container">
        <a href="#" class="navbar-brand">Techonological University of the Philippines - Visayas</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/Freedom-Wall-App/index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Freedom-Wall-App/walls.php">Freedom Wall</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Freedom-Wall-App/about.php">About</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<main>
  <div class="container d-flex flex-column align-items-center">
   
    <h2>Confessions</h2>
    <?php 
    $sql = 'SELECT * FROM confessions';
    $result = mysqli_query($conn, $sql);
    $confession = mysqli_fetch_all($result, MYSQLI_ASSOC);
    
    if (empty($confession)) {
      ?>
      <p class="lead mt-3">There are no confessions</p>
   <?php    
    } else {
      foreach ($confession as $items) {
        ?>
  <div class="card my-3 w-75">
     <div class="card-body text-center">
       <?php echo $items['body']; ?>
       <div class="text-secondary mt-2">
        by <?php echo $items['name']; ?> on <?php echo $items['date']; ?>
        </div>
     </div>
   </div>
 <?php       
      }
    }
   
    ?>
    

</main>

<footer class="text-center mt-5 mb-4">
  Copyright &copy; 2022
</footer>
<script src="bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>

</body>
</html>