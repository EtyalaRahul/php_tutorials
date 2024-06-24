
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
   $email=$_POST['email'];
   $desc=$_POST['desc'];
   echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Holy guacamole!</strong> Your '.$email.' and '.$desc.' and '.$name.';
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
  }
  $servername="localhost";
  $username="root";
  $password="";
  $database="contacts";
  $sql="";
$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn){
    die("sorry we failed to connect".mysqli_connect_error());
}
else{
    echo "connection successfull";
    $sql="INSERT INTO `emp` (`name`, `email`, `concern`, `doj`) VALUES ( '$name', '$email', '$desc', current_timestamp())";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "the record has been successfully inserted into the database ";
    }
    else{
        echo "failed to insert into the data base ";
    }
}


?>
<div class="container">
<form action="/phptut/21_php.php" method="post">
  <div class="mb-3">
    <label for="name" class="form-label">Email address</label>
    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="pass" class="form-label">Password</label>
    <textarea name="desc" id="pass" class="from-control" cols="30" rows="30"></textarea>
  </div>
  <button type="submit" class="btn btn-primary" >Submit</button>
</form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>