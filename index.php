
<?php
/*include "includes/db.php";*/
include "includes/class-autoload.inc.php";
?>
<!doctype html>

<?php include "partials/head.php"; ?>
<body >
<header >
    <?php include "partials/nav.php"; ?>

</header >
<main class="index-main">
    <div class=" jumbotron-fluid text-center text-white main-container">
        <h1 class="display-4 main-container_title mb-3">Welcome to Compar
                                                        Operator</h1 >
        <p class="main-container_lead lead">Lorem ipsum, dolor sit amet
                                            consectetur adipisicing elit. Nostrum
                                            necessitatibus perspiciatis cum
                                          lorem100 </p >

        <a
                class="btn btn-outline-warning text-white btn-lg main-content_btn mt-4"
                href="destinations.php"
                role="button"
        >
            voir nos
            destinations
        </a >
    </div >
    <video id="videoBG"  autoplay muted loop >
        <source src="videos/video.mp4" type="video/mp4">
    </video >
</main >
<?php include "./partials/footer.php"; ?>
</body >
</html >

