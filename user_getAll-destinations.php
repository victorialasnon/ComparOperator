<?php
include "includes/class-autoload.inc.php";
include "includes/db.php";
?>

<?php


 

$getAllDestinations = "SELECT * FROM destinations inner join tour_operators where destinations.id_tour_operator = tour_operators.id group by destinations.location";
//prepare the request
$getAllDestinationsRequest = $db-> query( $getAllDestinations );
//execute the request
 $getAllDestinationsStatements=$getAllDestinationsRequest -> fetchAll();



?>

<!doctype html>

<?php include "partials/head.php"; ?>
<body >
<header >
    <?php include "partials/nav.php"; ?>
</header >

<div class="container-fluid bg-light p-5">
    <main class="destination-main container">
        <h1 class="text-center text-uppercase mb-5">toutes nos destinations </h1 >
        <input
                class="form-control mb-5" id="anythingSearch" type="text"
                placeholder="Search for your destinations"
        >
<!-- <section class="search-sec">
    <div class="container">
        <form action="#" method="post" novalidate="novalidate">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <input type="text" class="form-control search-slt" placeholder="Enter Pickup City">
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <input type="text" class="form-control search-slt" placeholder="Enter Drop City">
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <select class="form-control search-slt" id="exampleFormControlSelect1">
                                <option>Select Vehicle</option>
                                <option>Example one</option>
                                <option>Example one</option>
                                <option>Example one</option>
                                <option>Example one</option>
                                <option>Example one</option>
                                <option>Example one</option>
                            </select>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <button type="button" class="btn btn-danger wrn-btn">Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section> -->

        <div class="card-columns">
        <?php foreach($getAllDestinationsStatements as $getAllDestinationsStatement): ?>
                <div class="card" id="myDIV">
                
                    <img
                            class="card-img-top img-fluid"
                            src="<?= $getImagesStatement[ 'img_url' ] ?>"
                            alt=""
                    />
              
                    <div class="to-card_body card-body">
                        <h4 class="card-title to-card_body-title text-center"><?= $getAllDestinationsStatement[ 'location' ] ?></h4 >
                        <div class="to-card_body-content my-4">
                    <span class="badge badge-warning to-card_body-content_time"><?= $getAllDestinationsStatement[ 'days' ] ?> jours</span >

                            <span class="badge badge-primary to-card_body-content_price"><?= $getAllDestinationsStatement[ 'price' ] ?> €</span >
                        </div >
                        <p class="card-text to-card_body-description text-center">
                                Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit.
                                Labore, quas.
                            </p >

                        <div class="to-card to-card_footer">

                            <div class="to-card to-card_footer-btn">
                            
                                <a
                                        class="btn btn-outline-warning rounded-0 to-card_footer-btn"
                                        href="user_destination.php?id=<?=$getAllDestinationsStatement['location'] ?>"
                            


                                >Read
                                 More</a >
                            </div >
                            <div class="to-card to-card_footer-rating">
                                <!-- <i class="fa fa-star text-warning"></i > -->
                            </div >
                        </div >
                    </div >
                </div >
            <?php endforeach; ?>
    </main >
</div >
<?php include "./partials/footer.php"; ?>
</body >
</html >