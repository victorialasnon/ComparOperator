<?php
include "includes/class-autoload.inc.php";
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

                    <li class="nav-item">
                        <a
                                class="nav-link js-scroll-trigger"
                                href="tourOperator_getTo.php"
                        >Destinations</a >
                    </li >
                    <li class="nav-item active">
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
                            <button
                                    class=" btn text-white
                                btn-danger float-right "
                            >
                                <i class="fa fa-trash"></i > Delete
                            </button >
                        </div >
                    </div >
                </div >
        </div >
    </div >
</main >
<?php include "./partials/footer.php"; ?>
</body >
</html >



