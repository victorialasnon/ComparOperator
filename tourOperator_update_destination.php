<?php
//appel de la fonction autoload
include "includes/class-autoload.inc.php";
//objet tourOperator from Manager class

?>


<!doctype html>
<?php include "partials/head.php"; ?>
<body >
<?php include "partials/head.php"; ?>
<main class="destination-main">
    <div class="container">
        <div class="text-center my-4 "><h4 class="display-4">Update Tour
                                                             Operator</h4 ></div >
        <div class="row">
            <div class="col-md-8 mx-auto">
                <form
                    class="form-group" method="post"
                    action="tourOperator_crud-destination.php"
                >
                    <!-- TEXT FIELD GROUPS -->
                    <div class="form-row  mb-3">

                        <div class="col-8">
                            <input
                                class="form-control"
                                type="text"
                                name="name" required
                                value=""
                            />
                        </div >

                        <div class="col-4">
                            <input
                                class="form-control"
                                type="number"
                                name="grade"
                                min="0"
                                max="5"
                                value="" required
                            />

                        </div >
                    </div >
                    <div class="form-row mb-3">
                        <div class="col-9">
                            <input
                                class="form-control"
                                type="text"
                                name="link"
                                value=""
                                required
                            />
                        </div >
                        <div class="col-3">
                            <input
                                class="form-control"
                                type="number"
                                name="is_premium"
                                value=""
                                min="0"
                                max="1"
                                required
                            />

                        </div >
                    </div >


                    <div class="form-btn float-right">
                        <a
                            href="tourOperator_getTo.php"
                            class="btn btn-info text-white"

                        >Close
                        </a >
                        <button
                            class="btn btn-primary"
                            name="update-destination"
                            type="submit"
                        >Update
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





