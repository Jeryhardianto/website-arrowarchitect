<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>ARROW ARCHITECTURE</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/frontend/css/style.css">
    <!-- Scrollbar Custom CSS -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css"> -->
    <!-- Font Awesome JS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- carousel -->
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/frontend/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/frontend/css/owl.theme.default.min.css">
    <!-- <link rel="stylesheet" href="<?= BASEURL ?>/assets/frontend/css/index.css"> -->
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/frontend/css/responsive.css">

</head>

<body>
    <div id="klik">
        <div class="wrapper">
            <!-- Sidebar  -->
            <nav id="sidebar">

                <div class="sidebar-header">
                assets
                </div>

                <ul class="list-unstyled components">
                    <li class="active-list">
                        <a href="list-project.html">projects</a>
                    </li>
                    <li>
                        <a href="<?= BASEURL ?>/_about">About Us</a>
                    </li>
                    <li>
                        <a href="<?= BASEURL ?>/_contact">Contact</a>
                    </li>
                    <div class="mt-4">
                        <a href="<?= BASEURL ?>/_contact">
                            <div class="link-cons">
                                <center class="my-2">
                                    <span>BOOK A FREE CONSULTATION</span>
                                </center>
                            </div>
                        </a>
                    </div>
                </ul>
                <ul id="sidebar-sosmed" class="list-unstyled CTAs">
                    <li>
                        <a href="https://www.instagram.com/arrow_architecture/" target="_blank">
                            <i class="fa fa-instagram font-sosmed"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/arrowarchitect/" target="_blank">
                            <i class="fa fa-facebook font-sosmed"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/arrow_arch" target="_blank">
                            <i class="fa fa-twitter font-sosmed"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/channel/UCVEKkDIHhnzS5J5sBsHLERg" target="_blank">
                            <i class="fa fa-youtube-play font-sosmed"></i>
                        </a>
                    </li>
                </ul>
            </nav>

            <!-- Page Content  -->
            <div id="content" class="p-0">

                <nav id="klik" class="navbar navbar-expand-lg bg-transparent" style="box-shadow: none;">
                    <a href="<?= BASEURL ?>">
                        <img src="assets/img/logo-dark.png" class="logo-sidebar" alt="">
                    </a>
                    <a type="button" id="sidebarCollapse" class="btn btn-menu bg-transparent">
                        <span class="menu-dark"><strong>MENU</strong></span>
                    </a>
                </nav>

                <div id="list-produk" class="mt-4">
                    <?php 
                        foreach ($data['project'] as $prj) :
                    ?>
                    <a href="<?= BASEURL ?>/_project/_detail_project/<?= $prj['id'] ?>">
                        <div class="card my-4 produk">
                            <div class="row">
                                <div class="col-md-4 col-12 card-body">
                                    <div class="left-konten">
                                        <span class="card-text font-white">PROJECT</span>
                                        <h5 class="card-title my-2 font-white"><?= $prj['nama_project'] ?></h5>
                                        <div class="btn-produk col-5">
                                            <div class="my-2">VIEW GALLERY</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-img-top col-md-8 col-12">
                                    <div class="img-produk-body">
                                        <img src="<?= BASEURL ?>/assets/upload/<?= $prj['gambar'] ?>" class="w-100 img-produk" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <?php endforeach; ?>


                </div>

                <footer class="footer-section">
                    <div>
                        <div class="row">
                            <div class="col-md-6 my-1">
                                <div class="footer-left">
                                    <div>
                                        <a href="<?= BASEURL ?>/_contact">
                                            CONTACT
                                        </a>
                                    </div>
                                    <div>
                                        <a href="" style="font-weight: lighter;">
                                            hello@arrowarchitecture.com
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 my-1">
                                <div class="footer-right">
                                    <div>
                                        <a href="https://www.instagram.com/arrow_architecture/" target="_blank">
                                            <i class="fa fa-instagram font-sosmed"></i>
                                        </a>
                                        /
                                        <a href="https://www.facebook.com/arrowarchitect/" target="_blank">
                                            <i class="fa fa-facebook font-sosmed"></i>
                                        </a>
                                        /
                                        <a href="https://twitter.com/arrow_arch" target="_blank">
                                            <i class="fa fa-twitter font-sosmed"></i>
                                        </a>
                                        /
                                        <a href="https://www.youtube.com/channel/UCVEKkDIHhnzS5J5sBsHLERg" target="_blank">
                                            <i class="fa fa-youtube-play font-sosmed"></i>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="">
                                            TERMS + CONDITIONS
                                        </a>
                                    </div>
                                    <div>
                                        <a href="">
                                            CREDITS
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>
   <div class="overlay">
        <div id="dismiss">
            <img src="<?= BASEURL ?>/assets/frontend/img/x-light.png" class="w-75" alt="" srcset="">
        </div>
    </div>
    <div id="dismiss-sidebar" class="dismiss-sidebar">
    <img src="<?= BASEURL ?>/assets/frontend/img/x-light.png" class="w-75" alt="" srcset="">
</div>
<!-- jQuery CDN - Slim version (=without AJAX) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<!-- Popper.JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<!-- jQuery Custom Scroller CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

<script src="<?= BASEURL ?>/assets/frontend/js/owl.carousel.min.js"></script>
<script src="<?= BASEURL ?>/assets/frontend/js/style.js"></script>

</body>

</html>