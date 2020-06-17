<?php
include "includes/class-autoload.inc.php";
$destinations = new Manager();
 
?>

<!doctype html>

<?php include "partials/head.php"; ?>
<body >
<?php include "partials/admin_nav.php"; ?>

<main class="destination-main">
    <h1 class="text-center display-4 mt-4">DESTINATIONS DATABASE</h1 >
    <div class="btn-blo d-flex justify-content-center mb-5">

    <!-- Button trigger modal -->
                    <button
                            type="button" class="btn btn-primary mr-4"
                            data-toggle="modal"
                            data-target="#addTourModal"
                    >
          <span ><i
                      class="fas fa-city mr-2"
              ></i ></span >Add Tour Operator
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
                                        Add Tour
                                        Operator</h5 >
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
                                            action="tourOperator_add-destinations.php"
                                    >
                                        <!-- TEXT FIELD GROUPS -->
                                        <div class="form-row  mb-3">

                                            <div class="col-8">
                                                <input
                                                        class="form-control"
                                                        type="text"
                                                        name="location" required
                                                        placeholder="City"
                                                />
                                            </div >

                                            <div class="col ">
                                                <input
                                                        class="form-control"
                                                        type="number"
                                                        name="days"
                                                        placeholder="days"
                                                        min="3"
                                                        max="10";
                                                />
                                            </div >

                                            <div class="col-4">
                                                <input
                                                        class="form-control"
                                                        type="number"
                                                        name="price"
                                                        placeholder="Price" required
                                                        min="150"
                                                        max="3000";
                                                />

                                            </div >
                                        </div >
                                            <div class="form-row mb-3">
                                               <input type="text" placeholder="tour operator" name="name"
                                            >
                                               

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
                                                    name="add-destination"
                                                    type="submit"
                                            >Add destination
                                            </button >
                                        </div >
                                    </form >
                                </div >
                            </div >
                        </div >
                    </div >
                    <!--end starting modal-->
    </div >

    <div class="container">
        <table class="table table-bordered">
            <thead >
            <tr >
                <th >id</th >
                <th >City</th >
                <th >Price (€)</th >
                <th >Tour Operator</th >
                <th >Actions</th >

            </tr >
            </thead >
            <tbody >
            <?php if ($destinations -> getAllDestinations()): ?>
                    <?php foreach ($destinations -> getAllDestinations() as
                    $destination): ?>
               
                    <tr >
                        <th ><?= $destination[ 'id' ] ?></th >
                        <td width="250px"><?= $destination[ 'location' ] ?></td >
                        <td ><?= $destination[ 'price' ] ?></td >
                        <td ><?= $destination[ 'name' ] ?></td >
                        <td class="text-center">
                            <a
                                    href="admin_update_tour-operator.php?id=<?= $tourOperator[ 'id' ] ?>"
                                    class="btn
                                    btn-primary mr-2"
                                    style="width: 80px;"
                            >Update
                            </a >
                            <a
                                    href="admin_getAll_tour-operator.php?id=<?= $tourOperator[ 'id' ] ?>"
                                    class="btn
                                    btn-danger"
                                    style="width: 80px;"
                            >Delete
                            </a >
                        </td >
                     
                    </tr >
                    <?php endforeach; ?>
                        <?php else: ?>
                        <?php endif; ?>
            </tbody >
        </table >
    </div >

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 ">
                <h3 class="text-center">saisie des données</h3 >
                <form class="form-group" method="get">
                    <!-- TEXT FIELD GROUPS -->
                    <div class="form-row  align-items-center mb-3">
                        <div class="col  ">
                            <input
                                    class="form-control" type="text"
                                    placeholder="Tour Operator"
                            />
                        </div >
                        <div class=" form-check">
                            <label class="form-check-label mr-5">
                                <input
                                        class="form-check-input mr-2"
                                        type="checkbox"
                                /> Premium
                            </label >
                        </div >
                    </div >
                    <div class="form-row mb-3">
                        <div class="col ">
                            <input
                                    class="form-control" type="text"
                                    placeholder="Grade"
                            />
                        </div >
                        <div class="col">
                            <input
                                    class="form-control" type="text"
                                    placeholder="Price"
                            />
                        </div >
                    </div >
                    <div class="form-row mb-3">
                        <div class="col ">
                            <select class="form-control" id="gender">
                                <option >All Cities</option >
                                <option >Paris</option >
                                <option >Rio</option >
                                <option >Rome</option >
                                <option >Cape Coast</option >
                            </select >
                        </div >
                        <div class="col">
                            <input
                                    class="form-control" type="text"
                                    placeholder="Link"
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
                    </div >
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


