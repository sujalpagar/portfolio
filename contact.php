

<?php
    $server="localhost";
    $username="root";
    $password="";
    $database="portfolio";

    $con = mysqli_connect($server,$username,$password,$database);
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        $name=$_POST["name"];
        $email=$_POST["email"];
        $topic=$_POST["topic"];
        $message=$_POST["message"];

        if (!$con){
            die ("Error Because :". mysqli_connect_error());
        } 
        else{
            $sql= "INSERT INTO `portfolio` (`name`, `email`, `topic`, `message`) VALUES ('$name', '$email', '$topic', '$message')";
            $result=mysqli_query($con,$sql);
        }
        if ($result){
            
        }
        else{
            die("data is not inserted because," . mysqli_connect_error($con) );
        }
    }
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>successful</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="alert alert-success" role="alert" style="margin-top: 3px;" data-aos="zoom-in">
            <h4 class="alert-heading">Successful !</h4>
            <p>Your Message Send To Sujal Pagar successfully.....</p>
            <hr>
            <p class="mb-0">Thank You! Visit Again....</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="index.html"><button class="btn btn-light me-md-2" type="button">OK</button></a>
                
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
            crossorigin="anonymous"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
    </div>
</body>

</html>
    
    