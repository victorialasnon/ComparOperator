<?php
include "includes/class-autoload.inc.php";
//objet tourOperator from Manager class
$destinations = new Manager();

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
                    <li class="nav-item">
                        <a
                                class="nav-link js-scroll-trigger"
                                href="./tourOperator_index.php"
                        >HOME</a >
                    </li >

                    <li class="nav-item active">
                        <a
                                class="nav-link js-scroll-trigger"
                                href="./tourOperator_getAll-destination.php"
                        >Destinations</a >
                    </li >
                    <li class="nav-item">
                        <a
                                class="nav-link js-scroll-trigger"
                                href="./tourOperator_getAll-reviews.php"
                        >See Reviews</a >
                    </li >

                </ul >
            </div >
        </div >
    </nav >

</header >


<main class="destination-main">
    <h1 class="text-center display-4 mt-4">DESTINATIONS DATABASE</h1 >


    <div class="container">
        <div class="jumbotron-fluid mt-4">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h3 class="card-title">DESTINATIONS DATABASE</h3 >

                    <!--starting modal-->
                    <!-- Button trigger modal -->
                    <button
                            type="button" class="btn btn-info mr-4"
                            data-toggle="modal"
                            data-target="#addTourModal"
                    >
                        <span ><i class="fas fa-plane-departure mr-2"></i ></span >Add
                                                                                   Destination
                    </button >

                    <!-- Modal -->
                    <div
                            class="modal fade" id="addTourModal" tabindex="-1"
                            role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true"
                    >
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">
                                        Add Destination</h5 >
                                    <button
                                            type="button" class="close"
                                            data-dismiss="modal"
                                            aria-label="Close"
                                    >
                                        <span aria-hidden="true">&times;</span >
                                    </button >
                                </div >
                                <div class="modal-body">
                                    <form
                                            class="form-group" method="post"
                                            action="tourOperator_crud-destination.php"
                                    >
                                        <!-- TEXT FIELD GROUPS -->
                                        <div class="form-row mb-3">
                                            <div class="col ">
                                                <input
                                                        class="form-control"
                                                        type="text"
                                                        name="location"
                                                        placeholder="City"
                                                />
                                            </div >

                                        </div >
                                        <div class="form-row mb-3">
                                            <div class="col-5">
                                                <input
                                                        class="form-control"
                                                        type="number"
                                                        name="days"
                                                        min="5"
                                                        max="14"
                                                        placeholder="Days" required
                                                />
                                            </div >
                                            <div class="col">
                                                <input
                                                        class="form-control"
                                                        type="number"
                                                        name="price"
                                                        min="350"
                                                        max="2500"
                                                        placeholder="Price (€)"
                                                />
                                            </div >
                                        </div >

                                        </div >

                                        <div class="modal-footer">
                                            <button
                                                    type="button"
                                                    class="btn btn-secondary"
                                                    data-dismiss="modal"
                                            >Close
                                            </button >
                                            <button
                                                    class="btn btn-primary"
                                                    name="add-to"
                                                    type="submit"
                                            >Add Destination
                                            </button >
                                        </div >
                                    </form >
                                </div >
                            </div >
                        </div >
                    </div >
                    <!--end starting modal-->



                </div >
            </div >
            <div class="card-body">
                <table class="table table-dark">
                    <thead >
                    <tr >
                        <th >id</th >
                        <th >City</th >
                        <th >Days</th >
                        <th >Price (€)</th >
                        <th class="text-center">Actions</th >

                    </tr >
                    </thead >
                    <tbody >
                    <th scope="row">1</th >
                    <td >Roanne</td >
                    <td >10</td >
                    <td >1400</td >
                    <td class="text-center">

                        <a
                                href="tourOperator_update_destination.php"
                                class="btn
                                    btn-primary mr-2"
                                style="width: 80px;"
                        >Update
                        </a >
                        <a
                                href="tourOperator_delete_destination.php"
                                class="btn
                                    btn-danger"
                                style="width: 80px;"
                        >Delete
                        </a >
                    </td >
                    </tbody >
                </table >
            </div >
        </div >
</main >

<?php include "./partials/footer.php"; ?>
</body >
</html >


