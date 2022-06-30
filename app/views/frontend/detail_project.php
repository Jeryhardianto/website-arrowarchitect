<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="<?= BASEURL ?>/assets/frontend/img/logo-dark.png" />
    <title>Detail Project | Arrow Architecture</title>
    <link rel="icon" type="image/png" href="<?= BASEURL ?>/assets/frontend/img/logo-dark.png" />
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
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/frontend/css/style-slide.css">
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/frontend/css/responsive.css">
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/frontend/css/style-new.css">
   

</head>

<?php 
    foreach ($data['project'] as $prj)
    {
        $project    = $prj['nama_project'];
        $location   = $prj['location'];
        // var_dump($prj);
    }

?>



<body class="bg-body">
    <div>
        <div class="wrapper">
            <!-- Sidebar  -->
            <nav id="sidebar">
    
                <div class="sidebar-header">
                <img src="<?= BASEURL ?>/assets/frontend/img/logo-light.png" class="logo-sidebar" alt="">
                </div>
    
                <ul class="list-unstyled components">
                    <li>
                        <a href="<?= BASEURL ?>/_project" >projects</a>
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
            <div id="content" class="p-0 section-detail-product">
                <nav id="klik" class="bg-transparent" style="box-shadow: none;">
                    <!-- <img src="<?= BASEURL ?>/assets/frontend/img/logo-dark.png" style="width: 105px;margin-left: 55px;margin-top: 25px;" alt=""> -->
                    <a href="index.html">
                        <img src="<?= BASEURL ?>/assets/frontend/img/logo-dark.png" class="logo-sidebar" alt="">
                    </a>
                    <a type="button" id="sidebarCollapse" class="btn btn-menu bg-transparent">
                        <span class="menu-dark"><strong>MENU</strong></span>
                    </a>
                </nav>

                <div class="box-project">
                    <div class="row">
                        <div class="col-md-3 col-12 top-class">
                            <div id="sidebar-project">
                                <div class="sidebar-header-project">
                                   <a href="<?= BASEURL ?>">
                                    <img src="<?= BASEURL ?>/assets/frontend/img/logo-light.png" class="logo-sidebar-project" alt="">
                                   </a>
                                </div>
                
                                <ul class="list-unstyled components">
                                    <li>
                                        <span class="text-1">project</span>
                                        <h6 class="text-2"><?= $project; ?></h6>
                                    </li>
                                    <li>
                                        <span class="text-1">location</span>
                                        <h6 class="text-2"><?= $location; ?></h6>
                                    </li>
                                    <li>
                                            <span class="text-1">share</span>
                                            <h6 class="text-2">
                                               <a href="">
                                                    <i class="fa fa-instagram font-sosmed"></i>
                                               </a>
                                               /
                                               <a href="">
                                                <i class="fa fa-facebook font-sosmed"></i>
                                            </a>
                                            /
                                            <a href="">
                                                <i class="fa fa-twitter font-sosmed"></i>
                                            </a>
                                            </h6>
                                    </li>
                                </ul>
                                <ul id="p-n" class="list-unstyled CTAs">
                                    <li class="mr-4" style="flex-grow: 5;">
                                       <a href="">
                                            Previous
                                       </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            Next
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-9 col-12 mid-class">
                            <div class="row" id="slider-overlay"> 
                            <?php
                            //    var_dump($data['detail_project'][2]);
                               $imgCount = count($data['detail_project']);
                            //    var_dump($imgCount);
                               $cek = 0;
                               for($x = 0; $x < $imgCount; $x++) {
                                    if($x == 0 || ($x%2 == 0 && $cek == 1) || ($x%2 == 1 && $cek == 1)){ ?>
                                      <div class="col-md-12 col-12">
                                        <a href="#slide-<?= $data['detail_project'][$x]['id'] ?>">
                                            <img src="<?= BASEURL ?>/assets/upload/<?= $data['detail_project'][$x]['foto'] ?>" class="w-100" alt="">
                                        </a>
                                    </div>
                                    <?php
                                    $cek = 0;
                                    }elseif (($x%2 == 1 AND $cek == 0)|| ($x%2 == 0 AND $cek == 0)) { ?>
                                       <div class="col-md-6 col-12 my-4" >
                                        <a href="#slide-<?= $data['detail_project'][$x]['id'] ?>">
                                            <img src="<?= BASEURL ?>/assets/upload/<?= $data['detail_project'][$x]['foto'] ?>" class="w-100" alt="">
                                        </a>
                                     </div>
                                       <div class="col-md-6 col-12 my-4" >
                                        <a href="#slide-<?= $data['detail_project'][$x+1]['id'] ?>">
                                            <img src="<?= BASEURL ?>/assets/upload/<?= $data['detail_project'][$x+1]['foto'] ?>" class="w-100" alt="">
                                        </a>
                                     </div>
                                <?php
                                $cek = 1;
                                $x++;
                                    }
                               }
                            ?> 
                            </div>

                            <!-- footer section -->
                        <footer class="footer-section-detail-project detail-product-footer">
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
                        <div class="col-md-3 col-12 bottom-class">
                            <div id="sidebar-project">
                                <div class="sidebar-header-project">
                                    <a href="<?= BASEURL ?>">
                                     <img src="<?= BASEURL ?>/assets/frontend/img/logo-light.png"  class="logo-sidebar-project-details">
                                    </a>
                                 </div>
                                <br>
                                <ul class="list-unstyled components">
                                    <li>
                                        <span class="text-1">project</span>
                                        <h6 class="text-2"><?= $project ?></h6>
                                    </li>
                                    <li>
                                        <span class="text-1">location</span>
                                        <h6 class="text-2"><?= $location ?></h6>
                                    </li>
                                    <li>
                                            <span class="text-1">share</span>
                                            <h6 class="text-2">
                                               <a href="">
                                                    <i class="fa fa-instagram font-sosmed"></i>
                                               </a>
                                               
                                               <a href="">
                                                <i class="fa fa-facebook font-sosmed"></i>
                                                </a>
                                                
                                                <a href="">
                                                    <i class="fa fa-twitter font-sosmed"></i>
                                                </a>
                                            </h6>
                                    </li>
                                </ul>
                                <ul id="p-n" class="list-unstyled CTAs">
                                <?php 
                                    foreach ($data['provious_project'] as $pp): 
                                ?>
                                    <li class="mr-4" style="flex-grow: 5;">
                                       <a href="<?= BASEURL ?>/_project/_detail_project/<?= $pp['id'] ?>">
                                            Previous
                                       </a>
                                    </li>
                                 <?php
                                    endforeach;
                                  ?>
                                    <?php 
                                    foreach ($data['next_project'] as $np): ?>
                                    <li>
                                        <a href="<?= BASEURL ?>/_project/_detail_project/<?= $np['id'] ?>">
                                            Next
                                        </a>
                                    </li>
                                    <?php
                                    endforeach;
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="overlay">
        <div id="dismiss">
            <img src="<?= BASEURL ?>/assets/frontend/img/x-light.png" class="w-75" alt="" srcset="">
        </div>
    </div>

    <div class="overlay-slider">
        <div class="logo-overlay">
            <img src="<?= BASEURL ?>/assets/frontend/img/logo-dark.png" alt="">
        </div>
        <div id="dismiss-slider">
            <img src="<?= BASEURL ?>/assets/frontend/img/x-dark.png" class="w-75" alt="" srcset="">
        </div>
        <div class="title-project">
            <h6 class="text-center"><?= $project ?></h6>
        </div>
        <div class="row">
            <div class="owl-carousel owl-theme">
                <?php
                   foreach ( $data['detail_project'] as $pr) :
                ?>
                <div class="item" data-hash="slide-<?= $pr['id'] ?>">
                    <div class="item-slide">
                        <a class="prev">
                            <img src="<?= BASEURL ?>/assets/frontend/img/slide-left.png" class="my-auto mx-auto">
                        </a>
                        <img src="<?= BASEURL ?>/assets/upload/<?= $pr['foto'] ?>" class="item-img" alt="">
                        <a class="next">
                            <img src="<?= BASEURL ?>/assets/frontend/img/slide-right.png" class="my-auto mx-auto">
                        </a>
                    </div>
                </div>
                <?php
                    endforeach;
                ?>
         
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div id="dismiss-bottom-slider">
                    <div class="mt-5">
                        <center>
                            <a href="" class="bottom-slider">
                                <span>
                                    back to project
                                </span>
                            </a>
                        </center>
                    </div>
                </div>
            </div>
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
    <script src="<?= BASEURL ?>/assets/frontend/js/slide-custom.js"></script>
    <script src="<?= BASEURL ?>/assets/frontend/js/style.js"></script>

</body>

</html>
