<?php
//appel de la fonction autoload
include "includes/class-autoload.inc.php";
//objet tourOperator from Manager class
$tourOperators = new Manager();
$tourOperator = $tourOperators -> startUpdateTourOperator( $_GET[ 'id' ] );
$id = $tourOperator[ 'id' ];
$name = $tourOperator[ 'name' ];
$grade = $tourOperator[ 'grade' ];
$link = $tourOperator[ 'link' ];
$is_premium = $tourOperator[ 'is_premium' ];
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
                    <li class="nav-item active">
                        <a
                                class="nav-link js-scroll-trigger"
                                href="./add_tour-operator.php"
                        >Tours</a >
                    </li >
                    <li class="nav-item">
                        <a
                                class="nav-link js-scroll-trigger"
                                href="add_tour-operator.php"
                        >Destinations</a >
                    </li >
                    <li class="nav-item">
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
    <div class="container">
        <div class="text-center my-4 "><h4 class="display-4">Update Tour
                                                             Operator</h4 ></div >
        <div class="row">
            <div class="col-md-8 mx-auto">
                <form
                        class="form-group" method="post"
                        action="add_tour-operator.php?id=<?= $id ?>"
                >
                    <!-- TEXT FIELD GROUPS -->
                    <div class="form-row  mb-3">

                        <div class="col-8">
                            <input
                                    class="form-control"
                                    type="text"
                                    name="name" required
                                    value="<?= $name ?>"
                            />
                        </div >

                        <div class="col-4">
                            <input
                                    class="form-control"
                                    type="number"
                                    name="grade"
                                    min="0"
                                    max="5"
                                    value="<?= $grade ?>" required
                            />

                        </div >
                    </div >
                    <div class="form-row mb-3">
                        <div class="col-9">
                            <input
                                    class="form-control"
                                    type="text"
                                    name="link"
                                    value="<?= $link ?>"
                                    required
                            />
                        </div >
                        <div class="col-3">
                            <input
                                    class="form-control"
                                    type="number"
                                    name="is_premium"
                                    value="<?= $is_premium ?>"
                                    min="0"
                                    max="1"
                                    required
                            />

                        </div >
                    </div >


                    <div class="form-btn float-right">
                        <a
                                href="admin_tour-operator.php"
                                class="btn btn-warning text-white"

                        >Close
                        </a >
                        <button
                                class="btn btn-primary"
                                name="update-to"
                                type="submit"
                        >Update Tour Operator
                        </button >
                    </div >
                </form >
            </div >
        </div >
    </div >
</main >


<?php include "./partials/footer.php"; ?>
</body >
</html >




