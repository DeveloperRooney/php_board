<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Developer Rooney :: Write</title>
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
        <header class="masthead" style="background-image: url('assets/img/contact-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="page-heading">
                            <h1>Write</h1>
                            <span class="subheading"></span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <main class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <p>Write here!</p>
                        <div class="my-5">
                            <form name="frm" action="doWrite.php" method="POST">
                                <div class="form-floating">
                                    <input class="form-control" name="name" id="inputName" type="text" placeholder="Enter your name..." />
                                    <label for="inputName">Name</label>
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" name="password" id="inputPass" type="password" placeholder="Enter your password..." />
                                    <label for="inputPass">Password</label>
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" name="email" id="inputEmail" type="email" placeholder="Enter your email..." />
                                    <label for="inputEmail">Email address</label>
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" name="title" id="inputTitle" type="title" placeholder="Enter title..." />
                                    <label for="inputTitle">Title</label>
                                </div>
                                <div class="form-floating">
                                    <textarea class="form-control" name="content" id="inputContent" placeholder="Enter content..." style="height: 12rem"></textarea>
                                    <label for="inputContent">Content</label>
                                </div>
                                <br />
                                <button class="btn btn-primary text-uppercase" type="button" onClick="send()">Write</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
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

<script>
    function send() {
        if(frm.name.value=="") {
            alert("이름을 작성해 주세요.");
            frm.name.focus();
            return;
        }else if(frm.password.value=="") {
            alert("비밀번호를 작성해 주세요.");
            frm.password.focus();
            return;
        }else if(frm.email.value=="") {
            alert("이메일을 작성해 주세요.");
            frm.email.focus();
            return;
        }else if(frm.title.value=="") {
            alert("제목을 작성해 주세요.");
            frm.title.focus();
            return;
        }
        else if(frm.content.value=="") {
            alert("내용을 작성해 주세요.");
            frm.content.focus();
            return;
        }

        frm.submit();
    }

</script>
