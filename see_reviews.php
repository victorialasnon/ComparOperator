<?php
include "config/db.php";
include "config/autoload_class.php";
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
    <div class="container-fluid">
        <?php while ( $donnees = $requete4 -> fetch() ) : ?>
            <div class="container mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-md-3">
                                <h1 class="text-capitalize">  <?= $donnees[ 'name' ]; ?></h1 >

                            </div >
                            <div class="col-md-3">

                                <p class="text-secondary text-center"> posted by:
                                    <span class="text-dark lead"><?= $donnees[ 'author' ];
                                    ?></p ></span>
                            </div >
                            <div class="col-md-3">
                                <div class="clearfix"></div >

                                <p >comments: <span class="text-dark lead"> <?=
                                        $donnees[ 'message' ]; ?></span ></p >
                                <p >

                            </div >
                            <div class="col-md-3">
                                <a
                                        href="#" class="float-right btn text-white
                                btn-danger"
                                >
                                    <i class="fa fa-trash"></i > Delete</a >
                                </p>
                            </div >
                        </div >
                    </div >

                </div >
            </div >
        <?php endwhile; ?>
    </div >
</main >
<?php include "./partials/footer.php"; ?>
</body >
</html >



