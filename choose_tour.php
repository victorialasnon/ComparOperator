
<?php

include "config/db.php";
include "config/autoload_class.php";
?>

<!doctype html>

<?php include "partials/head.php"; ?>
<body >
<header >
    <?php include "partials/nav.php"; ?>

</header >
<main class="destination-main">
    <div class="container">



<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row pt-1 pb-1">
        <div class="col-lg-12">
            <h4 class="text-center display-1">Paris</h4>
           <p class="lead text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae porro nihil 
               laudantium illo nostrum! Dolore aliquam repellat hic, harum vel debitis ipsam 
               maiores dignissimos at odit ipsum numquam delectus ratione. </p>
        </div>
    </div>
</div>
<section class="mt-4">
    <!-- resize les images -->
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/images1.jpeg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/images2.jpeg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/images3.jpeg" class="d-block w-100" alt="...">
            </div>
            <!--https://upload.wikimedia.org/wikipedia/commons/8/8d/Yarra_Night_Panorama%2C_Melbourne_-_Feb_2005.jpg-->
        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>




    </div >
    <div class="container">
        <div class="media">
            <div class="media-body">
                <h5>Media heading</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                scelerisque ante sollicitudin. Cras purus odio, vestibulum in
                vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi
                vulputate fringilla. Donec lacinia congue felis in faucibus.
            </div>
        </div>
        <table class="table table-bordered">
                    <thead >
                    <tr >
                        <th >id</th >
                        <th >Tour Operator</th >
                        <th >Premium</th >
                        <th >Grade</th >
                        <th >Price </th >
                        <th >Book Here </th >

                    </tr >
                    </thead >
                    <tbody >
                    <tr >
                        <th scope="row">1</th >
                        <td >John tour</td >
                        <td >Non</td >
                        <td >4.5</td >
                        <td >1500</td> 
                        <td class="d-flex justify-content-center"><a class="btn btn-warning w-50" href="tour_operator.php">Book</a></td >
                


                    </tr >
                    <tr >
                        <th scope="row">1</th >
                        <td >John tour</td >
                        <td >Non</td >
                        <td >4.5</td >
                        <td >1500</td>
                        <td class="d-flex justify-content-center"><a class="btn btn-warning w-50" href="tour_operator.php">Book</a></td >
                


                    </tr >
                    <tr >
                        <th scope="row">1</th >
                        <td >John tour</td >
                        <td >Non</td >
                        <td >4.5</td >
                        <td >1500</td>
                        <td class="d-flex justify-content-center"><a class="btn btn-warning w-50" href="tour_operator.php">Book</a></td >
                

                    </tr >
                    </tbody >
                </table >

        </div>
    </div>

</main >

<?php include "./partials/footer.php"; ?>
</body >
</html >


