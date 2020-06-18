<?php
//appel de la fonction autoload
include "includes/class-autoload.inc.php";
//objet tourOperator from Manager class
$destinations = new Manager();
$destinations = $destinations -> startUpdateDestinations( $_GET[ 'id' ] );
$id = $destinations[ 'id' ];
$location = $destinations[ 'location' ];
$days = $destinations[ 'days' ];
$price = $destinations[ 'price' ];
$id_tour_operator = $destinations[ 'id_tour_operator' ];
?>


<!doctype html>
<?php include "partials/head.php"; ?>
<body >
<?php include "partials/head.php"; ?>
<main class="destination-main">
    <div class="container">
        <div class="text-center my-4 "><h4 class="display-4">Update destination</h4 ></div >
        <div class="row">
            <div class="col-md-8 mx-auto">
                <form
                        class="form-group" method="post"
                        action="admin_add_tour-operator.php?id=<?= $id ?>"
                >
                    <!-- TEXT FIELD GROUPS -->
                    <div class="form-row  mb-3">

                        <div class="col-8">
                            <input
                                    class="form-control"
                                    type="text"
                                    location="location" required
                                    value="<?= $location ?>"
                            />
                        </div >

                        <div class="col-4">
                            <input
                                    class="form-control"
                                    type="number"
                                    name="days"
                                    min="0"
                                    max="5"
                                    value="<?= $days ?>" required
                            />

                        </div >
                    </div >
                    <div class="form-row mb-3">
                        <div class="col-9">
                            <input
                                    class="form-control"
                                    type="number"
                                    name="price"
                                    value="<?= $price ?>"
                                    required
                            />
                        </div >
                        <div class="col-3">
                            <input
                                    class="form-control"
                                    type="number"
                                    name="id_tour_operator"
                                    value="<?= $id_tour_operator ?>"
                                    min="0"
                                    max="1"
                                    required
                            />

                        </div >
                    </div >


                    <div class="form-btn float-right">
                        <a
                                href="tourOperator_getAll-destinations.php"
                                class="btn btn-warning text-white"

                        >Close
                        </a >
                        <button
                                class="btn btn-primary"
                                name="update-to"
                                type="submit"
                        >Update destination
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




