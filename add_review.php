<?php

include "includes/db.php";
include "includes/class-autoload.inc.php";
?>

<!doctype html>

<?php include "partials/head.php"; ?>
<body >
<header >
    <?php include "partials/nav.php"; ?>

</header >
<main class="destination-main mt-4">
    <div class="container">
        <div class="row">
            <div class="col">
                <form class="form-group" method="get" action="tour_operator.php">

                    <div class="form-row mb-3">
                        <div class="col ">
                            <input
                                    class="form-control" type="text"
                                    placeholder="Author" required
                            />
                        </div >

                    </div >
                    <div class="form-group mb-5">
                        <label for="message">Message</label >
                        <textarea
                                class="form-control" id="message" rows="3"
                        ></textarea >
                    </div >
                    <div class="col ">
                        <select class="form-control" id="gender">
                            <option>Tour Operator</option>
                            <option>Club med</option>
                            <option>Simplon</option>
                            <option>Numeriparc</option>
                            <option>Roanne Game</option>
                        </select>
                    </div>
                    <div class="btn d-flex justify-content-center">

                        <button class="btn btn-primary" type="submit">Submit
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



