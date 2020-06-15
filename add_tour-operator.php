<?php
include "config/db.php";
include "config/autoload_class.php";
?>
<?php
$requete2 = $db -> query( 'select * from tour_operators ' );

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
<main class="destination-main">
    <h3 class="text-center display-4 mt-4"> TOUR OPERATOR DATABASE</h3 >
    <div class="btn-blo d-flex justify-content-center mb-5">
        <a
                class="btn btn-primary mr-4"
                href="add_destination.php"
        > <span ><i
                        class="fas fa-city mr-2"
                ></i ></span >Add Tour Operator </a >
    </div >

    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered">
                    <thead >
                    <tr >
                        <th >id</th >
                        <th >Tour Operator</th >
                        <th >Grade</th >
                        <th >Link</th >
                        <th >Premium</th >
                        <th >Actions</th >
                    </tr >
                    </thead >
                    <tbody >
                    <?php while ( $donnees = $requete2 -> fetch() ) : ?>
                        <tr >
                            <th scope="row"><?= $donnees[ 'id' ] ?></th >
                            <td ><?= $donnees[ 'name' ] ?></td >
                            <td ><?= $donnees[ 'grade' ] ?></td >
                            <td ><?= $donnees[ 'link' ] ?></td >
                            <?php if ( $donnees[ 'is_premium' ] === "1" ) : ?>
                                <td >
                                    Oui
                                </td >
                            <?php else : ?>
                                <td >
                                    Non
                                </td >
                            <?php endif; ?>
                            <td class="d-flex justify-content-between">
                                <a
                                        class="btn
                                    btn-info " href="voir_tour-operator.php"
                                > <span ><i class="fas fa-eye mr-2"></i ></span >See
                                </a >
                                <a
                                        class="btn
                                    btn-primary " href="update_tour-operator.php"
                                >
                                    <span ><i class="fas fa-edit mr-2"></i ></span >Update
                                </a >
                                <a
                                        class="btn
                                    btn-danger " href="delete_tour-operator.php"
                                > <span ><i class="fas fa-trash-alt mr-2"></i ></span
                                    >Delete
                                </a >
                            </td >
                        </tr >
                    <?php endwhile; ?>
                    </tr >
                    </tbody >
                </table >
            </div >
        </div >
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


