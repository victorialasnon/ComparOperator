<?php
include "includes/class-autoload.inc.php";
?>
<!doctype html>
<?php include "partials/head.php"; ?>
<body >
<?php include "partials/admin_nav.php"; ?>
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



