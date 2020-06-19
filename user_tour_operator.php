<?php

include "includes/class-autoload.inc.php";
include "includes/db.php";

?>




<?php
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $getAllDestinationsTO = "SELECT * FROM tour_operators   where name= ?";
    $request=$db->prepare($getAllDestinationsTO);
    $request->execute(array($id));
    $patients=$request->fetchAll();
    
    $getAllReviews = "SELECT * FROM reviews inner  join tour_operators on reviews.id_tour_operator=tour_operators.id    where name= ?";
    $request2=$db->prepare($getAllReviews);
    $request2->execute(array($id));
    $patients2=$request2->fetchAll();
}
?>






<!doctype html>

<?php include "partials/head.php"; ?>
<body >
<header >
    <?php include "partials/nav.php"; ?>

</header >
<main class="destination-main">
    <div class="container">
    <?php foreach($patients as $patient): ?>
        <h1 class="display-1 text-center"> <?= $patient[ 'name' ] ?> </h1 >
        <?php endforeach; ?>

        <div class="row mb-3">
            <div class="col-12">
                <div class="media border p-3 flex-column flex-md-row">
                    <img
                            src="images/images1.jpeg" alt="#" class="mr-3"
                            style="width:250px;"
                    >
                    <div class="media-body align-self-center">
                        <h4 ><?= $patient[ 'name' ] ?> <small ><i >Posted on May 20, 2018</i ></small >
                        </h4 >
                        <p >Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Nam vel ipsum aliquam metus facilisis scelerisque.
                            Quisque vitae condimentum nulla. Vestibulum lobortis
                            ullamcorper augue id consequat. Orci varius natoque
                            penatibus et magnis dis parturient montes, nascetur
                            ridiculus mus. Phasellus at aliquet dui. Mauris dapibus
                            lectus id laoreet iaculis. Duis auctor augue augue, eget
                            lobortis quam auctor at.</p >
                    </div >
                </div >
            </div >
        </div >
        <div class="row mb-3">
            <div class="col-12">
                <div class="media border p-3 flex-column flex-md-row">
                    <div class="media-body align-self-center">
                        <h4 >My Name <small ><i >Posted on May 20, 2018</i ></small >
                        </h4 >
                        <p >Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Nam vel ipsum aliquam metus facilisis scelerisque.
                            Quisque vitae condimentum nulla. Vestibulum lobortis
                            ullamcorper augue id consequat. Orci varius natoque
                            penatibus et magnis dis parturient montes, nascetur
                            ridiculus mus. Phasellus at aliquet dui. Mauris dapibus
                            lectus id laoreet iaculis. Duis auctor augue augue, eget
                            lobortis quam auctor at.</p >
                    </div >
                    <img
                            src="images/images1.jpeg" alt="#" class="mr-3"
                            style="width:250px;"
                    >
                </div >
            </div >
        </div >
        <div class="clearfix"></div>
        <div class="container">
            <h1 class="display-4 text-center text-warning"> What Our customer
                                                            think...</h1 >
                        <?php foreach($patients2 as $patient2): ?>
            <div class="card mb-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-2">
                            <img
                                    src="https://image.ibb.co/jw55Ex/def_face.jpg"
                                    class="img img-rounded img-fluid"
                            />
                        </div >
                        <div class="col-md-10">

                            <p >
                                <a
                                        class="float-left"
                                        href="https://maniruzzaman-akash.blogspot.com/p/contact.html"
                                ><strong ><?= $patient2[ 'author' ] ?></strong ></a >
                            <p class="float-right">12-06-2020</span>


                            </p >
                            <div class="clearfix"></div >
                            <p ><?= $patient2[ 'message' ] ?></p >
                        </div >

                    </div >
                </div >

            </div >
                        <?php endforeach; ?>
            <div class="reviews-btn d-flex justify-content-center my-4">
                <a class="btn btn-outline-primary" href="user_add_review.php?id=<?=$patient['name'] ?>">add
                                                                              a
                                                                              review</a >
            </div >
</main >

<?php include "./partials/footer.php"; ?>
</body >
</html >