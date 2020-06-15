<?php
include "config/db.php";
include "config/autoload_class.php";
?>
<?php

?>
<!doctype html>

<?php include "partials/head.php"; ?>
<body >
<header >
    <?php include "partials/nav.php"; ?>

</header >
<main class="destination-main">
    <h1 class="text-center">admin page</h1 >
    <hr >
    <div class="container-fluid">
        <div class="row justify-content-between">
            <div class="col-10">
                <h3 class="text-center"> bdd</h3 >
                <table class="table table-bordered">
                    <thead >
                    <tr >
                        <th >id</th >
                        <th >Tour Operator</th >
                        <th >Premium</th >
                        <th >Grade</th >
                        <th >Price</th >
                        <th >City</th >
                        <th >Reviews</th >
                        <th >Author</th >
                        <th >Link</th >

                    </tr >
                    </thead >
                    <tbody >
                    <tr >
                        <th scope="row">1</th >
                        <td >John tour</td >
                        <td >Non</td >
                        <td >4.5</td >
                        <td >1500</td >
                        <td >Abidjan</td >
                        <td >place to be in summer</td >
                        <td >kadio</td >
                        <td >https://hakatours.com/</td >

                    </tr >
                    <tr >
                        <th scope="row">2</th >
                        <td >John tour</td >
                        <td >Non</td >
                        <td >4.5</td >
                        <td >1500</td >
                        <td >Abidjan</td >
                        <td >place to be in summer</td >
                        <td >kadio</td >
                        <td >https://hakatours.com/</td >

                    </tr >
                    <tr >
                        <th scope="row">3</th >
                        <td >John tour</td >
                        <td >Non</td >
                        <td >4.5</td >
                        <td >1500</td >
                        <td >Abidjan</td >
                        <td >place to be in summer</td >
                        <td >kadio</td >
                        <td >https://hakatours.com/</td >

                    </tr >
                    </tbody >
                </table >
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


    while($donnees =$requete->fetch()){
        echo $donnees['name'];
        echo "</br>";
        echo $donnees['grade'];
        echo "</br>";

        echo $donnees['link'];
        echo "</br>";

    }
    ?>
</main >

<?php include "./partials/footer.php"; ?>
</body >
</html >


