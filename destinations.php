<?php
include "config/db.php";
include "config/autoload_class.php";
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
        <div class="card-columns col">
            <?php for ($i = 0; $i < 11; $i++): ?>
                <div class="card" id="myDIV">
                    <img
                            class="card-img-top img-fluid"
                            src="images/canada/canada1.jpeg"
                            alt=""
                    />
                    <div class="to-card_body card-body">
                        <h4 class="card-title to-card_body-title text-center">west africa
                                                                  tour</h4 >
                        <div class="to-card_body-content my-4">
                    <span class="badge badge-warning to-card_body-content_time">5-10
                                                                            jours</span >

                            <span class="to-card_body-content_price">à partir de
                                                             1000€</span >
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
                                        href="choose_tour.php"
                                >Read
                                 More</a >
                            </div >
                            <div class="to-card to-card_footer-rating">
                                <!-- <i class="fa fa-star text-warning"></i > -->
                            </div >
                        </div >
                    </div >
                </div >
            <?php endfor; ?>

    </main >
</div >
<?php include "./partials/footer.php"; ?>
</body >
</html >




