<?php
 try {
     $db = new PDO( " mysql:host=localhost;dbname=ComparOperator",'root',
         '');
     $db -> setAttribute( PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION );
     echo "Successful Connexion";

 } catch (PDOException $e) {
     echo "Connection Failed : " . $e -> getMessage();


 }
 phpinfo()
?>

<!doctype html>

<?php include "partials/head.php"; ?>
<body >
<header >
    <?php include "partials/nav.php"; ?>

</header >
<main class="destination-main">
    <h1 class="text-center">admin page</h1>
    <div class="container">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>id</th>
                <th>Tour Operator</th>
                <th>Premium</th>
                <th>Grade</th>
                <th>Price</th>
                <th>City</th>
                <th>Reviews</th>
                <th>Author</th>
                <th>Link</th>

            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>John tour</td>
                <td>Non</td>
                <td>4.5</td>
                <td>1500</td>
                <td>Abidjan</td>
                <td>place to be in summer</td>
                <td>kadio</td>
                <td>https://hakatours.com/</td>

            </tr>
            <tr>
                <th scope="row">2</th>
                <td>John tour</td>
                <td>Non</td>
                <td>4.5</td>
                <td>1500</td>
                <td>Abidjan</td>
                <td>place to be in summer</td>
                <td>kadio</td>
                <td>https://hakatours.com/</td>

            </tr>
            <tr>
                <th scope="row">3</th>
                <td>John tour</td>
                <td>Non</td>
                <td>4.5</td>
                <td>1500</td>
                <td>Abidjan</td>
                <td>place to be in summer</td>
                <td>kadio</td>
                <td>https://hakatours.com/</td>

            </tr>
            </tbody>
        </table>

    </div>
</main >

<?php include "./partials/footer.php"; ?>
</body >
</html >


