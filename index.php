


<?php include "config/autoloader_inc.php"; ?>
<!doctype html>
<html lang = "en" >
<head>
    <meta charset = "UTF-8"/>
    <meta name = "viewport"
          content = "width=device-width, initial-scale=1.0"/>

    <!-- CSS BOOTSTRAP LINK -->
    <link rel = "stylesheet"
          href = "css/bootstrap.min.css"/>

    <!-- PERSONAL CSS LINK -->
    <link rel = "stylesheet"
          href = "css/style.css"/>

    <!-- GOOGLEFONTS LINK -->
    <link
            href = "https://fonts.googleapis.com/css2?family=Roboto:wght@500;700&display=swap"
            rel = "stylesheet"
    />
    <!-- FONTAWESOME JS LINK -->
    <script src = "js/all.js"></script>

    <!-- Nom du Projet -->
    <title>Project title</title>
</head>


<body >
<header >
    <nav class = "navbar navbar-expand-lg navbar-dark bg-dark "
         id = "mainNav" >
        <div class = "container" >
            <a class = "navbar-brand js-scroll-trigger"
               href = "index.php" >MY LOGO</a >
            <button class = "navbar-toggler"
                    type = "button"
                    data-toggle = "collapse"
                    data-target = "#navbarResponsive"
                    aria-controls = "navbarResponsive"
                    aria-expanded = "false"
                    aria-label = "Toggle navigation" >
                <span class = "navbar-toggler-icon" ></span >
            </button >
            <div class = "collapse navbar-collapse"
                 id = "navbarResponsive" >
                <ul class = "navbar-nav ml-auto" >
                    <li class = "nav-item" >
                        <a class = "nav-link js-scroll-trigger"
                           href = "#" >Link 1</a >
                    </li >
                    <li class = "nav-item" >
                        <a class = "nav-link js-scroll-trigger"
                           href = "#" >Link 2</a >
                    </li >
                    <li class = "nav-item" >
                        <a class = "nav-link js-scroll-trigger"
                           href = "#" >Link 3</a >
                    </li >
                </ul >
            </div >
        </div >
    </nav >

</header >
<main >

</main >

<?php include "./partials/footer.php"; ?>
</body >
</html >

