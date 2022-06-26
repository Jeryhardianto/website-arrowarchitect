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
                    <img src="<?= BASEURL ?>/assets/frontend/img/logo-light.png" class="logo-sidebar" alt="">
                </div>

                <ul class="list-unstyled components">
                    <li>
                        <a href="<?= BASEURL ?>/_project">projects</a>
                    </li>
                    <li class="mid-about">
                        <a href="<?= BASEURL ?>/_about">About US</a>
                    </li>
                    <li>
                        <a href="<?= BASEURL ?>/_contact">Contact</a>
                    </li>
                    <div class="mt-4">
                        <a href="<?= BASEURL ?>/_contact">
                            <div class="link-cons">
                                <center class="my-2">
                                    <span>FREE CONSULTATION</span>
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
            <div id="content" class="contact-us">
               
                <nav id="klik" class="navbar navbar-expand-lg bg-transparent" style="box-shadow: none;">
                    <a href="<?= BASEURL ?>">
                        <img src="assets/img/logo-dark.png" class="logo-sidebar" alt="">
                    </a>
                    <a type="button" id="sidebarCollapse" class="btn btn-menu bg-transparent">
                        <span class="menu-dark"><strong>MENU</strong></span>
                    </a>
                </nav>

                <div class="container p-0">
                    <div class="row">
                        <div class="col-md-12 my-3 mb-5">
                            <h4 class="my-2 title-contact">CONTACT US</h4>
                        </div>
                        <div class="col-md-6">
                            <p class="text-justify text-dark" style="font-size: 16px;">
                                From large-scale remodels to a simple quick makeover, the design team at Amber Interiors will expertly reflect your personal taste and style.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p class="text-justify text-dark" style="font-size: 16px;">
                                <span>
                                    Condongcatur
                                </span>
                                <br>
                                <span>
                                    Yogyakarta 55283
                                </span>
                                <br>
                                <br>
                                <span>
                                    0812 1262 7162
                                </span>
                                <br>
                                <span>
                                    instagram: 
                                    <a href="https://www.instagram.com/arrow_architecture/" class="ig-link" target="_blank">
                                        arrow_architecture
                                    </a>
                                </span>
                                <br>
                                <span>
                                    <a href="mailto:hello@arrowarchitecture.com" target="_blank">
                                        hello@arrowarchitecture.com
                                    </a>
                                </span>
                            </p>
                        </div>
                        <div class="col-md-12 my-5">
                            <hr class="my-2" style="height:2px;border-width:0;color:gray;background-color:gray">
                        </div>
                        <div class="col-md-6">
                            <p class="text-justify text-dark" style="font-size: 16px;">
                                If you are interested in our design services and have a potential project, please complete the form below and one of our team members will be in touch.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="container p-0 mt-2" id="contact">
                    <form action="<?= BASEURL ?>/_contact/sendEmail" method="post" >
                        <div class="row">
                            <div class="col-md-6 my-3">
                                <input type="text" class="w-100 input-contact" name="firstname" id="exampleFormControlInput1" placeholder="First Name">
                            </div>
                            <div class="col-md-6 my-3">
                                <input type="text" class="w-100 input-contact" name="lastname" id="exampleFormControlInput1" placeholder="Last Name">
                            </div>
                            <div class="col-md-6 my-3">
                                <input type="text" class="w-100 input-contact" name="telp" id="exampleFormControlInput1" placeholder="Telephone">
                            </div>
                            <div class="col-md-6 my-3">
                                <input type="email" class="w-100 input-contact" name="email" id="exampleFormControlInput1" placeholder="Email">
                            </div>
                            <div class="col-md-6 my-3">
                                <input type="text" class="w-100 input-contact" name="propertyaddress" id="exampleFormControlInput1" placeholder="Property Address">
                            </div>
                            <div class="col-md-6 my-3">
                                <input type="text" class="w-100 input-contact" name="sfp" id="exampleFormControlInput1" placeholder="Square Footage of Property">
                            </div>
                            <div class="col-md-6 my-3">
                                <input type="text" class="w-100 input-contact" name="ecb" id="exampleFormControlInput1" placeholder="Estimated Construction Budget">
                            </div>
                            <div class="col-md-6 my-3">
                                <input type="text" class="w-100 input-contact" name="efdb" id="exampleFormControlInput1" placeholder="Estimated Furniture & Decor Budget">
                            </div>
                            <div class="col-md-12 my-3">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Scope of Work to Be Included*</label>
                                    <textarea class="area-contact" name="scwbi" id="exampleFormControlTextarea1" rows="3"></textarea>
                                  </div>
                            </div>
                            <div class="col-md-12 mt-3">
                                <button class="btn btn-form" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <footer class="footer-section">
                    <div>
                        <div class="row">
                            <div class="col-md-6 my-1">
                                <div class="footer-left">
                                    <div>
                                        <a href="">
                                            CONTACT
                                        </a>
                                    </div>
                                    <div>
                                        <a href="" style="font-weight: lighter;letter-spacing: 0em;">
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
                                        
                                        <a href="https://www.facebook.com/arrowarchitect/" target="_blank">
                                            <i class="fa fa-facebook font-sosmed"></i>
                                        </a>
                                        
                                        <a href="https://twitter.com/arrow_arch" target="_blank">
                                            <i class="fa fa-twitter font-sosmed"></i>
                                        </a>
                                        
                                        <a href="https://www.youtube.com/channel/UCVEKkDIHhnzS5J5sBsHLERg" target="_blank">
                                            <i class="fa fa-youtube-play font-sosmed"></i>
                                        </a>
                                    </div>
                                    <!-- <div>
                                        <a href="">
                                            TERMS + CONDITIONS
                                        </a>
                                    </div> -->
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
<script src="<?= BASEURL ?>/assets/backend/js/sweetalert2.all.min.js"></script>
<?php
FlasherAlert::flashA();
?>

</body>

</html>