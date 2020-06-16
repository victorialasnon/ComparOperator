<?php
include "includes/db.php";
include "includes/class-autoload.inc.php";
?>
<?php
$requete4 = $db -> query( 'select reviews.id,reviews.message,reviews.author,tour_operators.name from reviews inner join tour_operators  on tour_operators.id = reviews.id_tour_operator ' );

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
            >Welcome Admin</a >
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
                                href="./admin.php"
                        >HOME</a >
                    </li >
                    <li class="nav-item">
                        <a
                                class="nav-link js-scroll-trigger"
                                href="./add_tour-operator.php"
                        >Tours</a >
                    </li >
                    <li class="nav-item">
                        <a
                                class="nav-link js-scroll-trigger"
                                href="add_destination.php"
                        >Destinations</a >
                    </li >
                    <li class="nav-item active">
                        <a
                                class="nav-link js-scroll-trigger"
                                href="./see_reviews.php"
                        >See Reviews</a >
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
            <?php while ( $donnees = $requete4 -> fetch() ) : ?>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="h3 card-title text-capitalize text-primary">
                                <?= $donnees[ 'name' ]; ?>
                            </h5 >
                            <hr >
                            <h5 class="card-title text-capitalize text-primary
                            text-">
                                <u>Review</u> :
                            </h5 >
                            <p class="card-text ">
                                <?= $donnees[ 'message' ];
                                ?>
                            </p >
                            <h6 class="card-subtitle text-muted ">
                               Author: <span class="text-info h5"><?=
                                    $donnees[ 'author' ];
                                ?></span>
                            </h6 >
                            <button
                                    class=" btn text-white
                                btn-danger float-right "
                            >
                                <i class="fa fa-trash"></i > Delete
                            </button >
                        </div >
                    </div >

                </div >
            <?php endwhile; ?>
        </div >
    </div >
</main >

<?php include "./partials/footer.php"; ?>
</body >
</html >



