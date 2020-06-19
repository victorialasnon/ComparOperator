<?php
include "includes/class-autoload.inc.php";
//objet tourOperator from Manager class
//$destinations = new Manager();
//$tourOperators = new Manager();

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
$getAllDestinationsTO = "SELECT * FROM destinations 
                            inner  join tour_operators 
                            on destinations.id_tour_operator=tour_operators.id where name=? ";
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

                    <li class="nav-item active">
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
    <?php foreach ($patients as $patient) :?>
    <p>  <?= $patient[ 'location' ] ?> </p>
    <p>  <?= $patient[ 'days' ] ?> </p>
    <p>  <?= $patient[ 'price' ] ?> </p>
    <?php endforeach; ?>

</main >
<?php include "./partials/footer.php"; ?>
</body >
</html >


