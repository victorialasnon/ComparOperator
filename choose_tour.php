
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
        <div class="row">
            <div class="col-sm-8 m-auto">

                <!-- SLIDER WITH CAPTIONS -->

                <div id="slider4" class="carousel slide mb-5" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li
                                class="active" data-target="#slider3"
                                data-slide-to="0"
                        ></li >
                        <li data-target="#slider4" data-slide-to="1"></li >
                        <li data-target="#slider4" data-slide-to="2"></li >
                    </ol >
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img
                                    class="d-block img-fluid"
                                    src="https://source.unsplash.com/wgq4eit198Q/700x400"
                                    alt="First Slide"
                            />
                            <div class="carousel-caption d-none d-md-block">
                                <h3 >Slide One</h3 >
                                <p >
                                    Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit.
                                    Alias, dolore!
                                </p >
                            </div >
                        </div >
                        <div class="carousel-item">
                            <img
                                    class="d-block img-fluid"
                                    src="https://source.unsplash.com/WLUHO9A_xik/700x400"
                                    alt="Second Slide"
                            />
                            <div class="carousel-caption d-none d-md-block">
                                <h3 >Slide Two</h3 >
                                <p >
                                    Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit.
                                    Alias, dolore!
                                </p >
                            </div >
                        </div >
                        <div class="carousel-item">
                            <img
                                    class="d-block img-fluid"
                                    src="https://source.unsplash.com/4yta6mU66dE/700x400"
                                    alt="Third Slide"
                            />
                            <div class="carousel-caption d-none d-md-block">
                                <h3 >Slide Three</h3 >
                                <p >
                                    Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit.
                                    Alias, dolore!
                                </p >
                            </div >
                        </div >
                    </div >
                    <!-- controls -->
                    <a
                            href="#slider4" class="carousel-control-prev"
                            data-slide="prev"
                    >
                        <span class="carousel-control-prev-icon"></span >
                    </a >
                    <a
                            href="#slider4" class="carousel-control-next"
                            data-slide="next"
                    >
                        <span class="carousel-control-next-icon"></span >
                    </a >
                </div >
            </div >
        </div >
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


