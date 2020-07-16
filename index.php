<?php

session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat datang | InfinityDev</title>
    <link rel="stylesheet" href="assets/css/gaya.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/fontawesome/css/brands.css">
    <link rel="stylesheet" href="assets/fontawesome/css/brands.min.css">
    <link rel="stylesheet" href="assets/fontawesome/css/fontawesome.css">
    <link rel="stylesheet" href="assets/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/bootstrap/js/bootstrap.js">
    <link rel="stylesheet" href="assets/bootstrap/js/bootstrap.min.js">
</head>

<body>
    <!--Navigation-->

    <nav class="navbar navbar-expand-md navbar-light fixed-top " id="navbar" style="background-color: #e6e6e6;">
        <div class="container-fluid">
            <a class="navbar-brand"><img src="img/dev.png" alt="logo" width="200" height="auto" class="mr-2" ">
            </a>
            <button class=" navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation" style="color: #505050;">
                <span class="navbar-toggler-icon" style="color: #505050;"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav" id="menu_navbar">
                        <a class="nav-item nav-link" style="color: black;" href="#header">Home <span class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link" style="color: black;" href="#welcome">Profile</a>
                        <a class="nav-item nav-link" style="color: black;" href="#service">Service</a>
                        <a class="nav-item nav-link" style="color: black;" href="#footer">Contact</a>
                        <?php
                        //bua menghapus notice session  
                        error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

                        $nama = $_SESSION['username'];
                        if ($nama == "") {
                            echo '<a class="nav-item nav-link" style="color: black;" href="back/LOGIN">Login</a>';
                        } else {
                            echo '<a class="nav-item nav-link" style="color: black;" href="back/logout.php">Logout</a>';
                        }
                        ?>


                    </div>
                </div>
    </nav>

    <!--Header-->
    <header class="hdr" id="header">
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-center ">
                <div class="col-lg-6 " id="content_header">
                    <h1 class="font-weight-bold ml-5">Welcome To <br> Our Personal Web</h1>
                    <p class="ml-5">
                        Lorem ipsum dolor sit, amet consectetur adipisicing <br>
                        elit. Doloribus animi, minus numquam voluptatibus aut <br>
                        error accusantium inventore voluptate officiis eos qui <br>
                    </p>
                    <div><a href="#welcome">
                            <center><button type="button" class="btn btn-primary" id="btn_header">Learn More</button>
                            </center>
                    </div></a>
                </div>
                <div class="col-lg-6 ">
                    <img src="img/Infinitydevvlogo.png" alt="" srcset="" class="img_header">
                </div>
            </div>
        </div>
    </header>

    <!--Welcome-->
    <div class="welcome" id="welcome">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-md-6">
                    <img src="img/monitordev2.png" alt="" srcset="" style="max-width: 80%; height: auto;">
                </div>
                <div class="col-md-6" style="text-align: center;" id="welcome_content">
                    <h2>Hi, thank's to visit our website</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br>
                        Magnam consequatur dolorum doloremque? Aliquamanimi dolor,<br>
                        laboriosam saepe, quas hic quibusdam quasi, ullam necessitat<br>
                        ibus numquam laborum cum voluptate? Neque, natus explicabo.<br></p>
                </div>
            </div>
        </div>
    </div>

    <!--Service-->
    <div class="container-fluid text-center" id="service"><br><br><br><br><br>
        <div>
            <h1 class="font-weight-bold text-center">Our Services</h1>
            <br><br>
        </div>
        <div class="row text-center  bs" id="content_service">
            <div class="col-lg-4" id="content1">
                <div class="box"><br>
                    <center>
                        <h3>Design</h3>
                    </center><br>
                    <img src="img/1.png" width="250" height="200" alt="">
                    <p>
                        <center>Lorem ipsum dolor sit amet, consectetur<br>
                            adipisicing elit. Itaque mollitia accusantium<br>
                            hic totam exercitationem natus, nesciunt<br>
                            placeat. Voluptates dolores nulla neque<br>
                            architecto laboreobcaecati perspiciatis minima,<br>
                            sed optio at adipisci?<br></center>
                    </p>
                    <div>
                        <center><button type="button" class="btn btn-primary">Learn More</button></center>
                    </div>
                </div>
                <br><br>
            </div>
            <div class="col-lg-4" id="content2">
                <div class="box "><br>
                    <center>
                        <h3>Front End</h3>
                    </center><br>
                    <img src="img/2.png" width="250" height="200" alt="">
                    <p>
                        <center>Lorem ipsum dolor sit amet, consectetur<br>
                            adipisicing elit. Itaque mollitia accusantium<br>
                            hic totam exercitationem natus, nesciunt<br>
                            placeat. Voluptates dolores nulla neque<br>
                            architecto laboreobcaecati perspiciatis minima,<br>
                            sed optio at adipisci?<br></center>
                    </p>
                    <div>
                        <center><button type="button" class="btn btn-primary">Learn More</button></center>
                    </div>
                </div>
                <br><br>
            </div>
            <div class="col-lg-4" id="content3">
                <div class="box"><br>
                    <center>
                        <h3>Back End</h3>
                    </center><br>
                    <img src="img/3.png" width="250" height="200" alt="">
                    <p>
                        <center>Lorem ipsum dolor sit amet, consectetur<br>
                            adipisicing elit. Itaque mollitia accusantium<br>
                            hic totam exercitationem natus, nesciunt<br>
                            placeat. Voluptates dolores nulla neque<br>
                            architecto laboreobcaecati perspiciatis minima,<br>
                            sed optio at adipisci?<br></center>
                    </p>
                    <div>
                        <center><button type="button" class="btn btn-primary">Learn More</button></center>
                    </div>
                </div>
                <br><br>
            </div>
        </div>

    </div>

    <!--Comment-->

    <diV class="comment" id="comment"><br><br><br><br>
        <div>
            <h3>Comment</h3>
        </div>



        <?php
        include("back/connection.php");

        if (isset($_POST['btn_komen'])) {
            $nama = $_SESSION['username'];
            $komen = htmlspecialchars($_POST['komen']);

            if ($nama == "") {
                echo "
                 <script>
                    alert('maaf anda harus login terlebih dahulu') ;
                    document.location.href='index.php';
                </script>";
            } else if ($komen == "") {
                echo "
                 <script>
                    alert('kolom komen harus di isi terlebih dahulu.') ;
                    document.location.href='index.php';
                </script>";
            } else {
                mysqli_query($mysqli, "INSERT INTO komen(nama, komen) VALUES('$nama', '$komen')");

                echo "<script>alert('Komentar anda berhasil ditambahkan') ;
                document.location.href='index.php';
                </script>";
            }
        } else {
        ?>
            <div class="d-flex justify-content-center text-center">
                <form action="" method="post">
                    <textarea cols="70" rows="10" type="text" name="komen" placeholder="Masukkan Komentar Anda Disini"></textarea><br>
                    <button type="submit" class="btn btn-light" name="btn_komen">kirim</button>
                </form>
            </div>
            <div class="kmn" style="margin-left: 20px;">

            <?php }

        $result = mysqli_query($mysqli, "SELECT * FROM komen");

        echo "<br>";
        while ($res = mysqli_fetch_assoc($result)) {
            echo "<hr>";
            echo "<b>" . $res['nama'] . "</b>" . "<br>";
            echo $res['time'] . "<br>";
            echo $res['komen'] . "<br>";
        }

            ?>
            </div>
            <hr>

    </diV>
    <br><br>



    <!--Footer-->

    <div class="container-fluid" id="footer">
        <div class="row ml-5">
            <div class="col-sm-3 text-center">
                <img src="img/Infinitydevlogo.png" width="250" height="200" alt="" srcset="">
            </div>
            <div class="col-sm-3" id="footer1">
                <h3>Menu</h3><br>
                <p class="lf">
                    <a href="#header">Home</a><br>
                    <a href="#welcome">Profile</a><br>
                    <a href="#service">Services</a><br>
                    <a href="#footer">Contact</a><br>
                    <?php
                    //bua menghapus notice session  
                    error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

                    $nama = $_SESSION['username'];
                    if ($nama == "") {
                        echo '<a href="back/LOGIN">Login</a>';
                    } else {
                        echo '<a href="back/logout.php">Logout</a>';
                    }
                    ?>
                </p>
            </div>
            <div class="col-sm-3" id="footer2">
                <h3>Support</h3><br>
                <p class="lf">
                    <a href="">Get Help</a><br>
                    <a href="">Team</a><br>
                    <a href="">Contact Us</a><br>
                </p>
            </div>
            <div class="col-sm-3" id="footer3">
                <h3>Contact</h3><br>
                <p class="lf">
                    <a href="">Profile</a><br>
                    <a href="">Project</a><br>
                    <a href="">Freelance</a><br>
                    <a href="">Development</a><br>
                </p>
            </div>
        </div>
    </div>
    <div class="container-fluid copyright">
        <footer class="row">
            <div class="col-sm-6 ml-auto mt-2 ">
                <p>©Copyright 2020 By InfinityDev</p>
            </div>
            <div class="col-sm-6 text-right mt-1 sosialmedia">
                <a href="" class=" ml-3">
                    <i class="fab fa-whatsapp"></i>
                </a>
                <a href="" class=" ml-3">
                    <i class="fab fa-facebook"></i>
                </a>
                <a href="" class=" ml-3">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>

        </footer>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>