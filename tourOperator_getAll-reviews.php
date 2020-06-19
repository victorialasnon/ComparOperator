<?php
include "includes/class-autoload.inc.php";
$reviews = new Manager();
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

<main class="reviews-main">
    <div class="container">
        <div class="jumbotron-fluid mt-4">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h3 class="card-title">REVIEWS DATABASE</h3 >
                </div >
            </div >
            <div class="card-body">
                <table class="table table-info">
                    <thead >
                    <tr >
                        <th scope="col">Author</th >
                        <th scope="col">Message</th >

                        <th class="text-center">Actions</th >
                    </tr >
                    </thead >
                    <tbody >
                    <!-- display of all tour operator by
                    calling the method from Manager Class-->
                    <?php if ($reviews -> getAllReviews()): ?>
                        <?php foreach ($reviews -> getAllReviews() as
                                       $review): ?>
                            <tr >
                                <td width="250px"><?= $review[ 'author' ]
                                    ?></td >
                                <td width="250px"><?= $review[ 'message' ] ?></td >

                                <td class="text-center">
                                    <a
                                            href="tourOperator_delete_destinations
                                            .php?id=<?= $review[ 'location' ]
                                            ?>"
                                            class="btn
                                    btn-danger"
                                            style="width: 80px;"
                                    >Delete
                                    </a >
                                </td >

                            </tr >
                        <?php endforeach; ?>
                    <?php endif; ?>
                    </tbody >
                </table >
            </div >
        </div >

</main >
<?php include "./partials/footer.php"; ?>
</body >
</html >



