<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('location:../../index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoginAndRegistration</title>
    <link rel="stylesheet" href="assets/b4/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <!-- <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css"> -->
</head>
<?php
if (isset($_SESSION['tag'])) {

    if ($_SESSION['tag'] == "danger") {
        echo '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>';
        echo $_SESSION["msgType"];
        echo '</strong>';
        echo  $_SESSION["msg"];
        echo ' </div>';
    } else {
        echo '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>';
        echo $_SESSION["msgType"];
        echo '</strong>';
        echo  $_SESSION["msg"];
        echo ' </div>';
    }
}


?>

<body>
    <h2> </h2>


    <section class="col-md-12 col-lg-12 col-sm-12 col-12 ">
        <div class="card col-6 col-md-6 col-sm-6 col-lg-6 
     mx-auto d-flex justify-content-center align-items-center " style="width: 18rem;">
            <img class="card-img-top" src="assets/images/PngItem_786293.png" class="img-rounded img-responsive" style="width: 150px;" alt="Card image cap">
            
            <div class="card-body">
                <p class="card-text text-center" style="text-transform: capitalize;"><?php echo  $_SESSION['username']; ?></p>
                <hr width="100%;" color="#010101" size="10">
                <a class="btn btn-outline-danger" href="assets/database/logout.php">Logout</a>
            </div>
            <hr width="100%;" color="#010101" size="10">

        </div>

    </section>



    <script src="assets/js/script.js"></script>
    <script src="assets/jquery/jquery-3.5.1.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>