<?php
session_start();
include "includes/class-autoload.inc.php";
$db_host = 'mysql:host=127.0.0.1;';
$db_name = 'dbname=ComparOperator';
$db_hn = $db_host . $db_name;
$db_username = 'root';
$db_password = '';

try {
    $db = new PDO( $db_hn , $db_username , $db_password );
    $db -> setAttribute( PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION );
//    echo "Successful Connexion";
} catch (PDOException $e) {
    echo "Connection Failed : " . $e -> getMessage();


}
//objet tourOperator from Manager class
//$destinations = new Manager();
//$tourOperators = new Manager();


//request to get the tour opertor name
if ( isset( $_GET[ 'id' ] ) ) {
    $id = $_GET[ 'id' ];
    $getAllDestinationsTO = "SELECT * FROM tour_operators inner  join destinations on destinations.id_tour_operator=tour_operators.id  where name= ? ";
    $request = $db -> prepare( $getAllDestinationsTO );
    $request -> execute( array( $id ) );
    $patients = $request -> fetchAll();
}
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
            >Welcome Tour Operator</a >
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
                                href="./tourOperator_index.php"
                        >HOME</a >
                    </li >

                </ul >
            </div >
        </div >
    </nav >

</header >
<main class="destination-main">
    <h1 class="text-center display-4 mt-4">
        <div class="getTo getTo_content">
            <?php
            if ( isset( $_POST[ 'submit' ] ) ): ?>
                <?php $name = $_POST[ 'toName' ] ?>
                <?
                $sql = "select * from tour_operators where name= '$name' ";
                $result = $db -> prepare( $sql );
                $result -> execute();
                ?>
                <?php if ( $result -> rowCount() > 0 ) : ?>
                    <?
                    $data = $result -> fetchAll();
                    ?>
                    <h2 >Dear <strong
                                class="text-warning
            text-capitalize"
                        ><?= $name ?></strong >,
                         Welcome to
                         your admin page</h2 >
                    <? $_SESSION[ 'toName' ] = $name ?>

                    <a
                            href="tourOperator_getTo.php?id=<?= $name ?>" class="btn
                    btn-info"
                    >See all your Destinations</a >
                    <a
                            href="tourOperator_getAll-reviews.php?id=<?= $name ?>" class="btn
                    btn-primary"
                    >See Customers Reviews</a >
                <?php else: ?>
                    <div class="row justify-content-center">
                        <div
                                class="col alert alert-danger  d-flex flex-column justify-content-center"
                                role="alert"
                        >
                            <p class=" d-block">This tour Operator is not
                                                registred!! </p >
                            <a
                                    href="tourOperator_index.php" class="btn
                    btn-danger w-25 align-self-center"
                            >Close</a >
                            <p >Or get Registred </p ><a
                                    href="admin_add_tour-operator.php"
                            >Here</a >
                        </div >
                    </div >
                <?php endif; ?>
            <?php endif; ?>
</main >

<?php include "./partials/footer.php"; ?>
</body >
</html >


