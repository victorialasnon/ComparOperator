
<?php
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


$getAllDestinations = "SELECT * FROM destinations inner join tour_operators where destinations.id_tour_operator = tour_operators.id group by destinations.location";
//prepare the request
$getAllDestinationsRequest = $db-> query( $getAllDestinations );
//execute the request
 $getAllDestinationsStatements=$getAllDestinationsRequest -> fetchAll();

 ?>

<?php foreach($getAllDestinationsStatements as $getAllDestinationsStatement): ?>
<h4>

    <br >
   <?= $getAllDestinationsStatement['location'] ?>
    <br >
    <?= $getAllDestinationsStatement['days'] ?>
    <br >
    <?= $getAllDestinationsStatement['price'] ?>
    <br >
    <a href="test2.php?id=<?=$getAllDestinationsStatement['location'] ?>" class="btn
    btn-primary">go to Tour Operator
                                                                                             Page</a >
</h4>
<?php endforeach; ?>

