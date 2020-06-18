<?php

include "includes/class-autoload.inc.php";
include "includes/db.php";
?>

<?php
//requete get all data from relation table



/* $requete = $db -> query( 'SELECT destinations.location,destinations.days,destinations.price, images.img_url 
                          from destinations 
                          inner join images  on destinations.id = images.id_destination
                          group by destinations.location' ); */
?>
<?php
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $getAllDestinationsTO = "SELECT * FROM destinations inner  join tour_operators on destinations.id_tour_operator=tour_operators.id  where location= ?";
    $request=$db->prepare($getAllDestinationsTO);
    $request->execute(array($id));
    $patients=$request->fetchAll();

    $getAllDestinationsTO2 = "SELECT * FROM destinations inner  join tour_operators on destinations.id_tour_operator=tour_operators.id  where location= ? group by location";
    $request2=$db->prepare($getAllDestinationsTO2);
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
<?php foreach($patients2 as $patient2): ?>
<h1 class="display-2 text-center my-4"><?= $patient2[ 'location' ] ?></h1>
<?php endforeach; ?>

    <section >
        <div
                id="carouselExampleFade" class="carousel slide carousel-fade"
                data-ride="carousel"
        >
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img
                            src="https://pbs.twimg.com/media/EGHYvttU4AAYKb7?format=jpg&name=large"
                            class="d-block w-100" alt="..."
                    >
                </div >
                <div class="carousel-item">
                    <img
                            src="https://pbs.twimg.com/media/EGHYvtkUcAAuc8T?format=jpg&name=large"
                            class="d-block w-100" alt="..."
                    >
                </div >
                <div class="carousel-item">
                    <img
                            src="https://pbs.twimg.com/media/EGHYvtjU0AAO8w1?format=jpg&name=large"
                            class="d-block w-100" alt="..."
                    >
                </div >
                <!--https://upload.wikimedia.org/wikipedia/commons/8/8d/Yarra_Night_Panorama%2C_Melbourne_-_Feb_2005.jpg-->
            </div >
            <a
                    class="carousel-control-prev" href="#carouselExampleFade"
                    role="button" data-slide="prev"
            >
                <span class="carousel-control-prev-icon" aria-hidden="true"></span >
                <span class="sr-only">Previous</span >
            </a >
            <a
                    class="carousel-control-next" href="#carouselExampleFade"
                    role="button" data-slide="next"
            >
                <span class="carousel-control-next-icon" aria-hidden="true"></span >
                <span class="sr-only">Next</span >
            </a >
        </div >
    </section >
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class=" display-4 text-center my-3">Choose Your Tour
                                                       Operator</h3 >
            </div >
        </div >
        <?php foreach($patients as $patient): ?>
        <div class="row">
            <div class="col-12 mb-4">
                <div class="media border p-3 flex-column flex-md-row">
                    <img
                            src="images/images1.jpeg" alt="#" class="mr-3"
                            style="width:250px;"
                    >
                  

                    <div class="media-body align-self-center">
                            <h4 ><?= $patient[ 'name' ] ?>
                       
                        </h4 >
                        <p >Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Nam vel ipsum aliquam metus facilisis scelerisque.
                            Quisque vitae condimentum nulla. Vestibulum lobortis
                            ullamcorper augue id consequat. Orci varius natoque
                            penatibus et magnis dis parturient montes, nascetur
                            ridiculus mus. Phasellus at aliquet dui. Mauris dapibus
                            lectus id laoreet iaculis. Duis auctor augue augue, eget
                            lobortis quam auctor at.</p >

                            <class="d-flex justify-content-center"><a
                                        class="btn btn-warning w-50"
                                        href="user_tour_operator.php?id=<?=$patient['name'] ?>"
                                >Book</a >
                    </div >
                </div >
            </div >
        </div >
        <?php endforeach; ?>


    </div >
    </section>
    </div >
 
</div>
</section>
</div>
</main >
<?php include "./partials/footer.php"; ?>
</body >
</html >