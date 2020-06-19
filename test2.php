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
echo "Welcome to Page 2";
echo "<br>";

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $getAllDestinationsTO = "SELECT * FROM destinations inner  join tour_operators on destinations.id_tour_operator=tour_operators.id  where location= ? ";
    $request=$db->prepare($getAllDestinationsTO);
    $request->execute(array($id));
    $patients=$request->fetchAll();

}
?>
<?php foreach($patients as $patient): ?>
<h4>

<?= $patient['location'] ?>
    <br>
    <?= $patient['name'] ?>
    <br >
    <?= $patient['grade'] ?>
    <br >
    <?= $patient['link'] ?>
    <br >
    <?= $patient['is_premium'] ?>
    <br >

</h4>
<?php endforeach;?>