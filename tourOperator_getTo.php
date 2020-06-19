<?php
include "includes/class-autoload.inc.php";
$destinations = new Manager();
//objet tourOperator from Manager class
//$destinations = new Manager();
//$tourOperators = new Manager();

$db_host = 'mysql:host=127.0.0.1;';
$db_name = 'dbname=ComparOperator';
$db_hn = $db_host . $db_name;
$db_username = 'root';
$db_password = '';

try {
    $db = new PDO( $db_hn , $db_username , $db_password );
    $db -> setAttribute( PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION );
//    echo "Successful Connexion";
} catch (PDOException $e) {
    echo "Connection Failed : " . $e -> getMessage();
}
    $id=$_GET['id'];
//request to get the tour opertor name
$getAllDestinationsTO = "SELECT * FROM destinations 
                            inner  join tour_operators 
                            on destinations.id_tour_operator=tour_operators.id where name=? ";
$request=$db->prepare($getAllDestinationsTO);
$request->execute(array($id));
$patients=$request->fetchAll();
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



                </ul >
            </div >
        </div >
    </nav >

</header >
<main class="destination-main">
    <div class="container">
        <div class="jumbotron-fluid mt-4">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h3 class="card-title">DESTINATION DATABASE</h3 >
                    <!--starting modal-->
                    <!-- Button trigger modal -->
                    <button
                            type="button" class="btn btn-primary mr-4"
                            data-toggle="modal"
                            data-target="#addTourModal"
                    >
          <span ><i
                      class="fas fa-city mr-2"
              ></i ></span >Add Tour Destination
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
                                            action="admin_crud_tour-operator.php"
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
            <div class="card-body">
                <table class="table table-primary">
                    <thead >
                    <tr >
                        <th scope="col">City</th >
                        <th scope="col">Days</th >
                        <th scope="col">Price</th >
                        <th class="text-center">Actions</th >
                    </tr >
                    </thead >
                    <tbody >
                    <!-- display of all tour operator by
                    calling the method from Manager Class-->
                    <?php if ($destinations -> getAllDestinations()): ?>
                        <?php foreach ($destinations -> getAllDestinations() as
                                       $destination): ?>
                            <tr >
                                <td width="250px"><?= $destination[ 'location' ]
                                    ?></td >
                                <td width="250px"><?= $destination[ 'days' ] ?></td >
                                <td width="350px"><?= $destination[ 'price' ]
                                    ?></td >

                                <td class="text-center">
                                    <a
                                            href="tourOperator_update_destinations.php?id=<?= $destination[ 'location' ]
                                            ?>"
                                            class="btn
                                    btn-primary mr-2"
                                            style="width: 80px;"
                                    >Update
                                    </a >
                                    <a
                                            href="tourOperator_delete_destinations.php?id=<?= $destination[ 'location' ]
                                            ?>"
                                            class="btn
                                    btn-danger"
                                            style="width: 80px;"
                                    >Delete
                                    </a >
                                </td >

                            </tr >
                        <?php endforeach; ?>
                    <?php endif; ?>
                    </tbody >
                </table >
            </div >
        </div >
</main >
<?php include "./partials/footer.php"; ?>
</body >
</html >


