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
<?php include "partials/head.php"; ?>
<main class="destination-main">
    <div class="container">
        <div class="text-center my-4 "><h4 class="display-4">Update Tour
                                                             Operator</h4 ></div >
        <div class="row">
            <div class="col-md-8 mx-auto">
                <form
                        class="form-group" method="post"
                        action="admin_crud_tour-operator.php?id=<?= $id ?>"
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
                                href="admin_getAll_tour-operator.php"
                                class="btn btn-info text-white"

                        >Close
                        </a >
                        <button
                                class="btn btn-primary"
                                name="update-to"
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




