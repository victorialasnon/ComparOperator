<?php
include "includes/db.php";
include "includes/class-autoload.inc.php";
?>
<?php
$requete3 = $db -> query( 'select destinations.id,tour_operators.name,destinations.location,destinations.price from tour_operators inner join destinations  on tour_operators.id = destinations.id_tour_operator ' );

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
                    <li class="nav-item">
                        <a
                                class="nav-link js-scroll-trigger"
                                href="./add_tour-operator.php"
                        >Tours</a >
                    </li >
                    <li class="nav-item active">
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
<main class="destination-main">
    <h1 class="text-center display-4 mt-4">DESTINATIONS DATABASE</h1 >
    <div class="btn-blo d-flex justify-content-center mb-5">
        <a
                class="btn
                                    btn-info mr-4" href="add_tour-operator.php"
        > <span

            ><i class="fas fa-plane-departure mr-2"></i ></span
            >Add
             Destination
        </a >
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
                        <?php while ( $donnees = $requete3 -> fetch() ) : ?>
                            <tr >
                                <th scope="row"><?= $donnees[ 'id' ] ?></th >
                                <td ><?= $donnees[ 'location' ] ?></td >
                                <td ><?= $donnees[ 'price' ] ?></td >
                                <td ><?= $donnees[ 'name' ] ?></td >

                                <td class="d-flex justify-content-between">
                                    <a
                                            class="btn
                                    btn-info " href="voir_tour-operator.php"
                                    > <span ><i class="fas fa-eye mr-2"></i></span >See </a >
                                    <a
                                            class="btn
                                    btn-primary " href="update_tour-operator.php"
                                    > <span ><i class="fas fa-edit mr-2"></i></span >Update
                                    </a >
                                    <a
                                            class="btn
                                    btn-danger " href="delete_tour-operator.php"
                                    > <span ><i class="fas fa-trash-alt mr-2"></i></span
                                        >Delete
                                    </a >
                                </td >
                            </tr >
                        <?php endwhile; ?>
                        </tbody >
                    </table >
                </div >
            </div >
            <div class="col-6">
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
    <?php
    $requete = $db -> query( 'select * from tour_operators' );


    while ( $donnees = $requete -> fetch() ) {
        echo $donnees[ 'name' ];
        echo "</br>";
        echo $donnees[ 'grade' ];
        echo "</br>";

        echo $donnees[ 'link' ];
        echo "</br>";

    }
    ?>
</main >

<?php include "./partials/footer.php"; ?>
</body >
</html >


