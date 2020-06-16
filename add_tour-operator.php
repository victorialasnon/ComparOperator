<?php
/*include "includes/db.php";*/
include "./includes/class-autoload.inc.php";
//database object
$host = new Dbh();
echo $host -> connect();
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
                                href="add_destination.php"
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
<main class="tour-operator_main">
    <h3 class="text-center display-4 mt-4"> TOUR OPERATOR DATABASE</h3 >
    <hr >
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <h3 class="text-center mb-4">saisie des données</h3 >

                <form
                        class="form-group" method="post"
                        action="add_tour-operator.php"
                >
                    <!-- TEXT FIELD GROUPS -->
                    <div class="form-row  mb-3">

                        <div class="col-8">
                            <input
                                    class="form-control" type="text"
                                    name="name" required
                                    placeholder="Tour Operator name"
                            />
                        </div >

                        <div class="col-4">
                            <input
                                    class="form-control" type="number" name="grade"
                                    placeholder="Grade" required
                            />

                        </div >
                    </div >
                    <div class="form-row mb-3">
                        <div class="col-9">
                            <input
                                    class="form-control" type="text" name="link"
                                    placeholder="Link" required
                            />
                        </div >
                        <div class="col-3">

                            <select
                                    class="form-control" id="is_premium"
                                    name="is_premium"
                            >
                                <option >Premium</option >
                                <option value="">0</option >
                                <option value="">1</option >
                            </select >
                        </div >
                    </div >
                    <!--   <div class="form-row mb-3">
                           <div class="col ">
                               <input
                                       class="form-control" type="text"
                                       placeholder="City"
                               />
                           </div >
                           <div class="col">
                               <input
                                       class="form-control" type="text"
                                       placeholder="Price (€)"
                               />
                           </div >
                       </div >
                       <div class="form-row mb-3">
                           <div class="col ">
                               <input
                                       type="hidden" value="1000000"
                                       name="MAX_FILE_SIZE"
                               >
                               <input
                                       type="file" id="myfile" class="custom-file-input"
                               />
                               <label class="custom-file-label" for="myfile">Add Image
                               </label >
                           </div >

                       </div >
                       <div class="form-row mb-3">
                           <div class="col ">
                               <input
                                       class="form-control" type="text"
                                       placeholder="Author"
                               />
                           </div >

                       </div >
                       <div class="form-group mb-5">
                           <label for="message">Message</label >
                           <textarea
                                   class="form-control" id="message" rows="3"
                           ></textarea >
                       </div >-->
                    <div class="btn d-flex justify-content-center">
                        <input
                                class="btn btn-primary" name="add-to"
                                value="Add Tour Operator"
                                type="submit"
                        >

                    </div >
                </form >
            </div >
        </div >
    </div >
    </div >

</main >

<?php include "./partials/footer.php"; ?>
</body >
</html >


