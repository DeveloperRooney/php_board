<?php

$dbConn = mysqli_connect("localhost", "wayne94", "suhan1994@@", "wayne94") or die("MariaDB 연결 실패");

// if ($dbConn != null) {
//     echo "MariaDB 연결 완료";
// }

$id = $_GET['id'];

$sql = "select * from article where id = $id";

$rs = mysqli_query($dbConn, $sql);

$article = mysqli_fetch_assoc($rs);

$content = nl2br($article['content']);

// $date = $article['regDate'];

$yy = substr($article['regDate'], 0, 4);
$mm = substr($article['regDate'], 5, 2);
$dd = substr($article['regDate'], 8, 2);

$month = "";

if ($mm == "01"){
    $month = "January";
}else if ($mm == "02") {
    $month = "February";

}else if ($mm == "03") {
    $month = "March";
    
}else if ($mm == "04") {
    $month = "April";
    
}else if ($mm == "05") {
    $month = "May";
    
}else if ($mm == "06") {
    $month = "June";
    
}else if ($mm == "07") {
    $month = "July";
    
}else if ($mm == "08") {
    $month = "Auguest";
    
}else if ($mm == "09") {
    $month = "September";
    
}else if ($mm == "10") {
    $month = "October";
    
}else if ($mm == "11") {
    $month = "November";
    
}else if ($mm == "12") {
    $month = "December";
    
}

?>

<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Developer Rooney :: Board</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.php">Developer Rooney</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="about.html">About</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="write.php">Write</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('assets/img/home-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="post-heading">
                            <h1><?=$article['title']?></h1>
                            <h2 class="subheading"></h2>
                            <span class="meta">
                                Posted by
                                <a href="#!"><?=$article['name']?></a>
                                on <?=$month?> <?=$dd?>, <?=$yy?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Post Content-->
        <article class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <p><?=$content?>
                        </p>
                    </div>
                </div>
            </div>
        </article>
        <!-- Footer-->
        <footer class="border-top bg-dark">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <ul class="list-inline text-center">
                            <!-- <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://github.com/DeveloperRooney">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li> -->
                        </ul>
                        <div class="small text-center text-white fst-italic">Copyright &copy; Developer Rooney 2021</div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
