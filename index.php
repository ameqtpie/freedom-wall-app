<?php 
 include 'config/database.php';

 $name = $email = $body = '';
 $nameErr = $emailErr = $bodyErr = '';
 
 // For submit
 if (isset($_POST['submit'])) { 
    //validate name
    if(empty($_POST['name'])) {
        $nameErr = 'Name is required';
    } else {
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }
    //validate email
    if(empty($_POST['email'])) {
        $emailErr = 'Email is required';
    } else {
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    }
    //validate body
    if(empty($_POST['body'])) {
        $bodyErr = 'Confession is required';
    } else {
        $body = filter_input(INPUT_POST, 'body', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    if (empty($nameErr) && empty($emailErr) && empty($bodyErr)) {
        
        // add to database
        $sql = "INSERT INTO confessions(name, email, body) VALUES('$name', '$email', '$body')";

        if (mysqli_query($conn, $sql)) {
            header('Location: walls.php');
        }else {
            echo 'Error: '. mysqli_error($conn);
            header('Location: index.php');
        }
    }
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Home | Freedom Wall</title>
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
        <img src="/Freedom-Wall-App/img/download.png" alt="TUPV-LOGO" class="w-24 mb-5">
        <h2>TUPV Freedom Wall</h2>
        <p class="lead text-center">Leave your confessions or anything that you want to say.</p>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="mt-4 w-75">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control <?php echo $nameErr ? 'is-invalid' : null; ?>" id="name" name="name" placeholder="Enter your name">
                <div class="invalid-feedback">
                    <?php echo $nameErr; ?>
                </div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label ">Email</label>
                <input type="email" class="form-control <?php echo $emailErr ? 'is-invalid' : null; ?>" id="email" name="email" placeholder="Enter your email"> 
                <div class="invalid-feedback">
                    <?php echo $emailErr; ?>
                </div>
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Your Confessions</label>
                <textarea name="body" class="form-control <?php echo $bodyErr ? 'is-invalid' : null; ?>" id="body" placeholder="Enter your feedback"></textarea>
                <div class="invalid-feedback">
                    <?php echo $bodyErr; ?>
                </div>
            </div>
            <div class="mb-3">
                <input type="submit" name="submit" value="Send" class="btn btn-dark w-100">
            </div>
        </form>
    </div>
</main>

<footer class="text-center mt-5 mb-4">
  Copyright &copy; 2022
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>