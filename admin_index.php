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
                    <li class="nav-item active">
                        <a
                                class="nav-link js-scroll-trigger"
                                href="./admin_index.php"
                        >HOME</a >
                    </li >
                    <li class="nav-item ">
                        <a
                                class="nav-link js-scroll-trigger"
                                href="./admin_getAll_tour-operator.php"
                        >Tours</a >
                    </li >

                </ul >
            </div >
        </div >
    </nav >

</header >
<main class="destination-main">
    <h1 class="text-center my-4">WELCOME TO YOUR DATABASE DEAR ADMIN </h1 >
    <div class="container">

            <div class="col d-flex justify-content-center my-5">
                <a href="admin_getAll_tour-operator.php" class="btn btn-info
                btn-lg">Tour Operator Table
                </a >

        </div >
    </div >

</main >

<?php include "./partials/footer.php"; ?>
</body >
</html >


