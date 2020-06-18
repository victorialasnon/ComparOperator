<?php
include "includes/class-autoload.inc.php";
//$destinations = new Manager();
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
$getAllDestinations = "SELECT * FROM destinations 
                        inner join tour_operators 
                        where destinations.id_tour_operator = tour_operators.id ";
//prepare the request
$getAllDestinationsRequest =$db-> query( $getAllDestinations );
//execute the request
$getAllDestinationsStatements=$getAllDestinationsRequest -> fetchAll();
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
                    <li class="nav-item active">
                        <a
                                class="nav-link js-scroll-trigger"
                                href="./tourOperator_index.php"
                        >HOME</a >
                    </li >

                    <li class="nav-item">
                        <a
                                class="nav-link js-scroll-trigger"
                                href="./tourOperator_getAll-destination.php"
                        >Destinations</a >
                    </li >
                    <li class="nav-item">
                        <a
                                class="nav-link js-scroll-trigger"
                                href="./tourOperator_getAll-reviews.php"
                        >See Reviews</a >
                    </li >

                </ul >
            </div >
        </div >
    </nav >

</header >

<main class="destination-main">
    <h1 class="display-4 text-center my-5">Tour Operator Main Page</h1 >
    <hr class="w-75 h-50 d-flex align-self-center">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <h3 class="text-center mb-3">Get Connect</h3 >

            </div >
        </div >
    </div >
    </div >
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <form class="form-group" method="post">
                    <!-- TEXT FIELD GROUPS -->
                    <div class="form-row mb-3">
                        <div class="col">
                            <select class="form-control" id="tour-operator">
                                    <?php foreach($getAllDestinationsStatements as $getAllDestinationsStatement): ?>
                                        <option
                                                value="<?=
                                                $getAllDestinationsStatement[ 'name' ] ?>"
                                        ><?= $getAllDestinationsStatement[ 'id' ] ?> - <?=
                                            $getAllDestinationsStatement[ 'name' ] ?></option >
                                    <?php endforeach; ?>
                            </select >
                        </div >
                    </div >
                    <div class="btn d-flex justify-content-center">
                        <a
                                href="tourOperator_getAll-destination.php?id=<?=
                                $getAllDestinationsStatement[ 'id' ] ?>"
                                class="btn btn-outline-info" type="submit"
                        >Get
                         Connect
                        </a >
                    </div >
                </form >
            </div >
        </div >
    </div >
    </div >

</main >

<?php include "./partials/footer.php"; ?>
</body >
</html >



