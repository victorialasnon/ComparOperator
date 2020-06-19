<?php
include "includes/class-autoload.inc.php";
$db_host = 'mysql:host=127.0.0.1;';
$db_name = 'dbname=ComparOperator';
$db_hn = $db_host . $db_name;
$db_username = 'root';
$db_password = '';

try {
    $db = new PDO( $db_hn , $db_username , $db_password );
    $db -> setAttribute( PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION );
//    echo "Successful Connexion";
} catch (PDOException $e) {
    echo "Connection Failed : " . $e -> getMessage();
}
$id=$_GET['id'];
//request to get the tour opertor name
$getAllDestinationsTO = "SELECT * FROM reviews 
                            inner  join tour_operators 
                            on reviews.id_tour_operator=tour_operators.id where name=? ";
$request=$db->prepare($getAllDestinationsTO);
$request->execute(array($id));
$patients=$request->fetchAll();
?>
<!doctype html>
<?php include "partials/head.php"; ?>
<body >

<header >
    <nav
            class="navbar navbar-expand-lg navbar-dark bg-dark "
            id="mainNav"
    >
        <div class="container">
            <a
                    class="navbar-brand js-scroll-trigger"
                    href="index.php"
            >Welcome Tour Operator</a >
            <button
                    class="navbar-toggler"
                    type="button"
                    data-toggle="collapse"
                    data-target="#navbarResponsive"
                    aria-controls="navbarResponsive"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span >
            </button >
            <div
                    class="collapse navbar-collapse"
                    id="navbarResponsive"
            >
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a
                                class="nav-link js-scroll-trigger"
                                href="./tourOperator_index.php"
                        >HOME</a >
                    </li >

                </ul >
            </div >
        </div >
    </nav >

</header >

<main class="destination-main">
    <h1 class="text-center display-4 my-4">REVIEWS DATABASE</h1 >

    <div class="container">
        <div class="row">

                <div class="col-md-6 mt-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="h3 card-title text-capitalize text-primary">
                               Club Med
                            </h5 >
                            <hr >
                            <h5 class="card-title text-capitalize text-primary
                            text-">
                                <u>Review</u> :
                            </h5 >
                            <p class="card-text ">
                                it's was amazing

                            </p >
                            <h6 class="card-subtitle text-muted ">
                               Author: <span class="text-info h5">usher></span>
                            </h6 >
                            <a
                                    href="tourOperator_delete_reviews.php"
                                    class=" btn text-white
                                btn-danger float-right "
                            >
                                <i class="fa fa-trash"></i > Delete
                            </a >
                        </div >
                    </div >
                </div >
        </div >
    </div >
    <div class="container">
        <div class="row">

            <div class="col-md-6 mt-4">
                <?php foreach ($patients as $patient) :?>
                    <p>  <?= $patient[ 'message' ] ?> </p>
                    <p>  <?= $patient[ 'author' ] ?> </p>
                <?php endforeach; ?>
            </div >
        </div >
    </div >
</main >
<?php include "./partials/footer.php"; ?>
</body >
</html >



