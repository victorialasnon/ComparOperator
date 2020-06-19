<?php
session_start();
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
                    <li class="nav-item active">
                        <a
                                class="nav-link js-scroll-trigger"
                                href="./tourOperator_index.php"
                        >HOME</a >
                    </li >
                </ul >
            </div >
        </div >
    </nav >

</header >
<main class="destination-main">
    <h1 class="display-4 text-center my-5">Tour Operator Main Page</h1 >
    <hr class="w-75 h-50 d-flex align-self-center">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <h3 class="text-center mb-3">Get Connect</h3 >
                <form
                        method="post"
                        action="tourOperator_getAllToDestinations.php"
                >
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tour Operator Name</label >
                        <input
                                type="text" class="form-control"
                                id="exampleInputEmail1" name="toName"
                                aria-describedby="emailHelp" required

                        >
                        <small
                                id="emailHelp" class="form-text
                        text-muted"
                        >You will always be important for us.</small >
                    </div >
                    <button
                            type="submit" name="submit" value="submit" class="btn
                    btn-primary"
                    > Connect
                    </button >
                </form >
            </div >
        </div >
    </div >


</main >


<?php include "./partials/footer.php"; ?>
</body >
</html >



