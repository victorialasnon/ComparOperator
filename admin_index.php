<?php
include "includes/class-autoload.inc.php";
?>

<!doctype html>

<?php include "partials/head.php"; ?>
<body >
<?php include "partials/admin_nav.php"; ?>
<main class="destination-main">
    <h1 class="text-center my-4">BASE DE DONNEES</h1 >
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered">
                    <thead >
                    <tr >
                        <th >id</th >
                        <th >Tour Operator</th >
                        <th >Grade</th >
                        <th >Price (€)</th >
                        <th >Destination</th >
                        <th >Link</th >

                        <th >Premium</th >

                    </tr >
                    </thead >
                    <tbody >
                    <?php ?>
                    <tr >
                        <th scope="row">1</th >
                        <td >Club Med</td >
                        <td >5</td >
                        <td >1200</td >
                        <td >Roanne</td >
                        <td >ww.google.com</td >
                        <td >Oui</td >

                    </tr >

                    </tbody >
            </div >
        </div >
        </table >
    </div >
    </div >
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <h3 class="text-center">saisie des données</h3 >
                <form class="form-group" method="get">
                    <!-- TEXT FIELD GROUPS -->
                    <div class="form-row  align-items-center mb-3">
                        <div class="col-8">
                            <select class="form-control" id="tour-operator">
                                <option >Select tour Operator ...</option >

                                    <option value="tour operator">Club Med</option >
                                    <option value="tour operator">Club
                                                                  roanne</option >
                                    <option value="tour operator">Club
                                                                  Apero</option >

                            </select >
                        </div >
                        <div class="col-4">
                            <select class="form-control" id="premium">
                                <option >Premium</option >
                                <option value="">0</option >
                                <option value="">1</option >
                            </select >
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
                                    placeholder="Price (€)"
                            />
                        </div >
                    </div >
                    <div class="form-row mb-3">
                        <div class="col ">
                            <input
                                    class="form-control" type="text"
                                    placeholder="City"
                            />
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
    </div >
</main >

<?php include "./partials/footer.php"; ?>
</body >
</html >


