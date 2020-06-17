<?php
//appel de la fonction autoload
include "includes/class-autoload.inc.php";
//objet tourOperator from Manager class
$tourOperators = new Manager();
?>
<!doctype html>
<?php include "partials/head.php"; ?>
<body >
<?php include "partials/admin_nav.php";  ?>
<main class="destination-main">
    <div class="container">
        <div class="jumbotron-fluid mt-4">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h3 class="card-title">TOUR OPERATOR DATABASE</h3 >
                    <!--starting modal-->
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
                                            action="admin_add_tour-operator.php"
                                    >
                                        <!-- TEXT FIELD GROUPS -->
                                        <div class="form-row  mb-3">

                                            <div class="col-8">
                                                <input
                                                        class="form-control"
                                                        type="text"
                                                        name="name" required
                                                        placeholder="Tour Operator name"
                                                />
                                            </div >

                                            <div class="col-4">
                                                <input
                                                        class="form-control"
                                                        type="number"
                                                        name="grade"
                                                        min="0"
                                                        max="5"
                                                        placeholder="Grade" required
                                                />

                                            </div >
                                        </div >
                                        <div class="form-row mb-3">
                                            <div class="col-9">
                                                <input
                                                        class="form-control"
                                                        type="text"
                                                        name="link"

                                                        value="Pas de Site web"

                                                        placeholder="Link"

                                                />
                                            </div >
                                            <div class="col-3">
                                                <input
                                                        class="form-control"
                                                        type="number"
                                                        name="is_premium"
                                                        placeholder="Premium"
                                                        min="0"
                                                        max="1"
                                                        required
                                                />

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
                                            >Add Tour Operator
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

            <!--   <div class="container">
                   <div class="row justify-content-center">
                       <div class="col-6">
                           <div class="alert alert-success">
                               <p class="text-center">Tour Operator Added Successfully!!</p>
                           </div>
                       </div>
                   </div>
               </div>-->

            <div class="card-body">
                <table class="table table-dark">
                    <thead >
                    <tr >
                        <th scope="col">ID</th >
                        <th scope="col">Tour Operator</th >
                        <th scope="col">Grade</th >
                        <th scope="col">Link</th >
                        <th scope="col">Premium</th >
                        <th class="text-center">Actions</th >
                    </tr >
                    </thead >
                    <tbody >
                    <!-- display of all tour operator by
                    calling the method from Manager Class-->
                    <?php if ($tourOperators -> getAllOperator()): ?>
                    <?php foreach ($tourOperators -> getAllOperator() as
                    $tourOperator): ?>
                    <tr >
                        <th ><?= $tourOperator[ 'id' ] ?></th >
                        <td width="250px"><?= $tourOperator[ 'name' ] ?></td >
                        <td ><?= $tourOperator[ 'grade' ] ?></td >
                        <td ><?= $tourOperator[ 'link' ] ?></td >
                        <td ><?= $tourOperator[ 'is_premium' ] ?></td >
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
                        <?php endforeach; ?>
                        <?php else: ?>
                        <?php endif; ?>
                    </tr >
                    </tbody >
                </table >
            </div >
        </div >
</main >


<?php include "./partials/footer.php"; ?>
</body >
</html >



