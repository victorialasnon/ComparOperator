
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
        <div class="media">
            <img class="mr-3 mt-3" src="https://source.unsplash.com/random/90x90" />
            <div class="media-body">
                <h5>Media heading</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                scelerisque ante sollicitudin. Cras purus odio, vestibulum in
                vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi
                vulputate fringilla. Donec lacinia congue felis in faucibus.
                <a class="btn btn-outline-warning rounded-0 to-card_footer-btn"
                   href="choose_tour.php"
                >Read
                More</a >
            </div>
        </div>
        <div class="media">
            <div class="media-body">
                <h5>Media heading</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                scelerisque ante sollicitudin. Cras purus odio, vestibulum in
                vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi
                vulputate fringilla. Donec lacinia congue felis in faucibus.
                <a class="btn btn-outline-warning rounded-0 to-card_footer-btn"
                   href="choose_tour.php"
                >Read
                More</a >
            </div>
            <img class="mr-3 mt-3" src="https://source.unsplash.com/random/90x90" />

        </div>
        <div class="media">
            <img class="mr-3 mt-3" src="https://source.unsplash.com/random/90x90" />
            <div class="media-body">
                <h5>Media heading</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                scelerisque ante sollicitudin. Cras purus odio, vestibulum in
                vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi
                vulputate fringilla. Donec lacinia congue felis in faucibus.
                <a class="btn btn-outline-warning rounded-0 to-card_footer-btn"
                   href="choose_tour.php"
                >Read
                More</a >
            </div>
        </div>
        <div class="media">
            <div class="media-body">
                <h5>Media heading</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                scelerisque ante sollicitudin. Cras purus odio, vestibulum in
                vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi
                vulputate fringilla. Donec lacinia congue felis in faucibus.
                <a class="btn btn-outline-warning rounded-0 to-card_footer-btn"
                   href="choose_tour.php"
                >Read
                More</a >
            </div>
            <img class="mr-3 mt-3" src="https://source.unsplash.com/random/90x90" />

        </div>
    </div>

</main >


<!------commentaire---------->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!--
Author : Maniruzzaman Akash
Email  : manirujjamanakash@gmail.com
-->

<!--To Work with icons-->
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<div class="container">
	
	<div class="card">
	    <div class="card-body">
	        <div class="row">
        	    <div class="col-md-2">
        	        <img src="https://image.ibb.co/jw55Ex/def_face.jpg" class="img img-rounded img-fluid"/>
        	    </div>
        	    <div class="col-md-10">
        	        <p>
        	            <a class="float-left" href="https://maniruzzaman-akash.blogspot.com/p/contact.html"><strong>Maniruzzaman Akash</strong></a>
        	            <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                        <span class="float-right"><i class="text-warning fa fa-star"></i></span>
        	            <span class="float-right"><i class="text-warning fa fa-star"></i></span>
        	            <span class="float-right"><i class="text-warning fa fa-star"></i></span>

        	       </p>
        	       <div class="clearfix"></div>
        	        <p>Lorem Ipsum is simply dummy text of the pr make  but also the leap into electronic typesetting, remaining essentially 
                        unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
                        and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

        	    </div>
	        </div>
	        	<div class="card card-inner">
            	    <div class="card-body">
            	        <div class="row">
                    	    <div class="col-md-2">
                    	        <img src="https://image.ibb.co/jw55Ex/def_face.jpg" class="img img-rounded img-fluid"/>
                    	        <p class="text-secondary text-center">15 Minutes Ago</p>
                    	    </div>
                    	    <div class="col-md-10">
                    	        <p><a href="https://maniruzzaman-akash.blogspot.com/p/contact.html"><strong>Maniruzzaman Akash</strong></a></p>
                    	        <p>Lorem Ipsum is simply dummy text of the pr make  but also the leap into electronic typesetting, remaining essentially 
                                    unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
                                    nd more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    	    </div>
            	        </div>
            	    </div>
	            </div>
	    </div>
    </div>
    <div class="reviews-btn d-flex justify-content-center my-2">
        <a class="btn btn-outline-primary" href="add_review.php">add a review</a >
    </div>
</div>
<?php include "./partials/footer.php"; ?>
</body >
</html >


