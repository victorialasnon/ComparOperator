<?php include "config/autoloader_inc.php"; ?>

<!doctype html>

<?php include "partials/head.php"; ?>
<body >
<header >
    <?php include "partials/nav.php"; ?>

</header >
<div class="container-fluid bg-light p-5">


<main class="destination-main ">
    <h1 class="text-center text-uppercase mb-5">toutes nos destinations </h1>
    <div class="card-columns">
        <?php for ($i = 0; $i < 10; $i++): ?>
            <div class="card">
                <img
                        class="card-img-top img-fluid"
                        src="images/canada/canada1.jpeg"
                        alt=""
                />
                <div class="to-card_body card-body">
                    <h4 class="card-title to-card_body-title">west africa tour</h4 >
                    <div class="to-card_body-content ">
                    <span class="badge badge-warning to-card_body-content_time">10
                                                                            jours</span >

                        <span class="to-card_body-content_price">à partir de
                                                             1000€</span >
                    <p class="card-text to-card_body-description">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Labore, quas.
                    </p >
                    </div >

                    <div class="to-card to-card_footer">

                        <div class="to-card to-card_footer-rating">
                            <a
                                    class="btn btn-outline-warning rounded-0 to-card_footer-btn"
                                    href="tour_operator.php"
                            >Read
                             More</a >
                        </div >
                        <div class="to-card to-card_footer-rating">

                            <i class="fa fa-star text-warning"></i >
                            <i class="fa fa-star text-warning"></i >
                            <i class="fa fa-star text-warning"></i >
                            <i class="fa fa-star text-warning"></i >
                            <i class="fa fa-star text-secondary"></i >
                        </div >
                    </div >
                </div >
            </div >
        <?php endfor; ?>
    </div >

</main >
</div>
<?php include "./partials/footer.php"; ?>
</body >
</html >




