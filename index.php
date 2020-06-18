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
<h1
        class="display-4 main-container_title my-5 text-white
        text-center"
>Welcome to
 Compar
 Operator</h1 >
<main class="index-main ">
    <video id="videoBG" autoplay muted loop>
        <source src="videos/video.mp4" type="video/mp4">
    </video >
        <div class="text-center text-white main-container">
            <h5 class="main-container_lead ">Enjoy Your Trip </h5 >
            <a
                    class="btn btn-outline-warning text-white btn-lg
                    main-content_btn1 mt-4"
                    href="user_getAll-destinations.php"
                    role="button"
            >
                voir nos
                destinations
            </a >
        </div >

            <div class="text-center text-warning main-container">
                <h5 class="main-container_lead">Are You a Tour Operator?
                </h5 >
                <a
                        class="btn btn-warning text-white btn-lg
                        main-content_btn2 mt-4"
                        href="tourOperator_index.php"
                        role="button"
                >
                    inscrivez vous ici
                </a >
            </div >

</main >
<?php include "./partials/footer.php"; ?>
</body >
</html >

