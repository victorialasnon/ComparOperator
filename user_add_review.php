<?php
include "includes/class-autoload.inc.php";
?>
<!doctype html>

<?php include "partials/head.php"; ?>
<body >
<header >
    <?php include "partials/nav.php"; ?>
</header >
<main class="destination-main mt-4">
    <h3 class="display-4 text-center mb-3">Add a Review</h3 >
    <div class="container">
        <div class="row ">
            <div class="col-6">
                <form
                        class="form-group" method="post"
                        action="user_tour_operator.php"
                >

                    <div class="form-row mb-3">
                        <div class="col ">
                            <input
                                    class="form-control" type="text" name="author"
                                    placeholder="Author" required
                            />
                        </div >

                    </div >
                    <div class="form-group mb-5">
                        <label for="message">Message</label >
                        <textarea
                               class="form-control" id="message" rows="3" name="author"
                        ></textarea >
                    </div >

                    <div class="btn d-flex justify-content-center">

                        <button class="btn btn-primary" name="submitReview" type="submit">Submit
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



