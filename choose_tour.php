
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


<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">
        <div class="col-12">
            <h3 class="mb-3">choose your tour</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="media border p-3 flex-column flex-md-row">
              <img src="images/images1.jpeg" alt="#" class="mr-3" style="width:250px;">
              <div class="media-body align-self-center">
                <h4>My Name <small><i>Posted on May 20, 2018</i></small></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel ipsum aliquam metus facilisis scelerisque. Quisque vitae condimentum nulla. Vestibulum lobortis ullamcorper augue id consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus at aliquet dui. Mauris dapibus lectus id laoreet iaculis. Duis auctor augue augue, eget lobortis quam auctor at.</p>
                <a class="btn btn-warning w-50" href="tour_operator.php">Book</a>
            </div>
            </div>
        </div>
    </div>
	<div class="row">
		<div class="col-12">
            <div class="media border p-3 flex-column flex-md-row">
              <div class="media-body align-self-center">
                <h4>My Name <small><i>Posted on May 20, 2018</i></small></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel ipsum aliquam metus facilisis scelerisque. Quisque vitae condimentum nulla. Vestibulum lobortis ullamcorper augue id consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus at aliquet dui. Mauris dapibus lectus id laoreet iaculis. Duis auctor augue augue, eget lobortis quam auctor at.</p>
                <a class="btn btn-warning w-50" href="tour_operator.php">Book</a>
              </div>
              <img src="images/images1.jpeg" alt="#" class="mr-3" style="width:250px;">
            </div>
		</div>
	</div>
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


